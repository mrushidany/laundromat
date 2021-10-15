<?php

namespace App\Http\Controllers;

use App\Models\InitialPayment;
use App\Models\LaundryCost;
use App\Models\LaundryDetail;
use App\Models\LaundryMachineDetail;
use App\Models\RoutineClient;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Mike42\Escpos\CapabilityProfile;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\ImagickEscposImage;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;
use Rawilk\Printing\Receipts\ReceiptPrinter;
use Yajra\DataTables\Facades\DataTables;
use function PHPUnit\Framework\isNull;


class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laundry.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laundry.form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $routine_client = new RoutineClient();
               $routine_client->full_name = $request->full_name;
               $routine_client->phone = $request->phone;
               $routine_client->save();
            if(isset($routine_client->id)){
                $laundry_details = new LaundryDetail();
                   $laundry_details->routine_client_id = $routine_client->id;
                   $laundry_details->quantity = $request->laundry_quantity;
                   $laundry_details->selected_machines = $request->all_machines_selected;
                   $laundry_details->issued_by = Auth::user()->id;
                   $laundry_details->save();
            }
            if (isset($laundry_details->id)) {
                    $laundry_costs = new LaundryCost();
                    $laundry_costs->laundry_details_id = $laundry_details->id;
                    $laundry_costs->amount = $request->total_cost;
                    $laundry_costs->payment_status = $request->payment_status;
                    $laundry_costs->save();
                switch ($request->payment_status){
                    case 'Partial Payment':
                        $initial_payment = new InitialPayment();
                        $initial_payment->laundry_cost_id = $laundry_costs->id;
                        $initial_payment->initial_payment = $request->initial_payment.' /=';
                        $initial_payment->save();
                        break;
                }
                }
            DB::commit();
            if (isset($laundry_costs)) {
                    $data = ['state' => 'Done', 'title' => 'Successful', 'msg' => 'Record created successful'];
                    return \Request::ajax() ? response()->json($data) : redirect()->route('laundry.index')->with('data', $data);
                }
            $data = ['state'=>'Fail', 'title'=>'Fail', 'msg'=>'Record could not be created'];
            return \Request::ajax() ? response()->json($data) : redirect()->route('laundry.index')->withInput()->with('data', $data);
        }catch (QueryException $queryException){
            DB::rollback();
            $data = ['state'=>'Error', 'title'=>'Database error', 'msg'=>'Something went wrong!<br />' . $queryException->errorInfo[2]];
            return \Request::ajax() ? response()->json($data) : redirect()->back()->with('data', $data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laundry_detail = LaundryDetail::find($id);
        $client_id = $laundry_detail->routine_client_id;
        $client = RoutineClient::find($client_id);
        $laundry_cost = LaundryCost::where('laundry_details_id','=', $laundry_detail->id)->first();

        $data = [
            'laundry_detail' => $laundry_detail,
            'client' => $client,
            'laundry_cost' => $laundry_cost,
        ];
        return view('laundry.form.create')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $laundry = LaundryDetail::find($id);
            $client = RoutineClient::where('id',$laundry->routine_client_id)->first();
            $client->full_name = $request->full_name;
            $client->phone = $request->phone;
            $client->update();
            if(isset($client)){
                $laundry->routine_client_id = $client->id;
                $laundry->quantity = $request->laundry_quantity;
                $laundry->selected_machines = $request->all_machines_selected;
                $laundry->issued_by = Auth::user()->id;
                $laundry->update();

            }
            if(isset($laundry->id)){
                $laundry_cost = LaundryCost::where('laundry_details_id',$laundry->id)->first();
                $laundry_cost->laundry_details_id = $laundry->id;
                $laundry_cost->amount = $request->total_cost;
                $laundry_cost->payment_status = $request->payment_status;
                $laundry_cost->update();
                switch ($request->payment_status) {
                    case 'Partial Payment' :
                        $partial = new InitialPayment();
                        $partial->laundry_cost_id = $laundry_cost->id;
                        $partial->initial_payment = $request->initial_payment.' /=';
                        $partial->save();
                        break;
                }
            }
            DB::commit();
            if (isset($laundry_cost)) {
                $data = ['state' => 'Done', 'title' => 'Successful', 'msg' => 'Record created successful'];
                return \Request::ajax() ? response()->json($data) : redirect()->route('laundry.index')->with('data', $data);
            }
            $data = ['state'=>'Fail', 'title'=>'Fail', 'msg'=>'Record could not be created'];
            return \Request::ajax() ? response()->json($data) : redirect()->route('laundry.index')->withInput()->with('data', $data);
        }catch (QueryException $queryException){
            DB::rollback();
            $data = ['state'=>'Error', 'title'=>'Database error', 'msg'=>'Something went wrong!<br />' . $queryException->errorInfo[2]];
            return \Request::ajax() ? response()->json($data) : redirect()->back()->with('data', $data);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        try {
            DB::beginTransaction();
            LaundryCost::where('laundry_details_id',$id)->delete();
            $routine_client = LaundryDetail::where('id',$id)->first();
            LaundryDetail::find($id)->delete();
            RoutineClient::find($routine_client->routine_client_id)->delete();

            DB::commit();
            $data = ['state' => 'Done', 'title' => 'Success', 'msg' => " Record Deleted"];
            return $request->ajax() ? response()->json($data) : redirect()->back()->with($data);

        }catch(QueryException $queryException){
            DB::rollBack();
            $data =['state' => 'Fail', 'title' => 'Fail', 'msg' => 'Record could not be Deleted'];
            return $request->ajax() ? response()->json($data) : redirect()->back()->with($data);
        }
        $data =['state' => 'Fail', 'title' => 'Fail', 'msg' => 'Record could not be Deleted'];
        return $request->ajax() ? response()->json($data) : redirect()->back()->with($data);
    }

    /**
     * Laundry List Datatable.
     */
    public function laundry_list(Request $request){

        if($request->ajax()){
            if(!empty($request->recent_laundry)){
                if($request->recent_laundry == Carbon::yesterday()->format('d/m/Y')){
                    $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
                        ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
                        ->whereDate('laundry_details.created_at', Carbon::yesterday()->format('Y-m-d') )
                        ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status','laundry_costs.id as laundry_cost_id']);
                    $paid_laundry_cost = LaundryCost::where('payment_status','Paid')->whereDate('created_at', Carbon::yesterday()->format('Y-m-d') )->sum('amount');
                    $partial_payments = InitialPayment::where('laundry_cost_id','!=',null)->whereDate('created_at', Carbon::yesterday()->format('Y-m-d'))->sum('initial_payment');
                    $cash_draw = $paid_laundry_cost + $partial_payments;
                } else if($request->recent_laundry == Carbon::today()->format('d/m/Y')){
                    $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
                        ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
                        ->whereDate('laundry_details.created_at', Carbon::today()->format('Y-m-d') )
                        ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status','laundry_costs.id as laundry_cost_id']);
                    $paid_laundry_cost = LaundryCost::where('payment_status','Paid')->whereDate('created_at', Carbon::today()->format('Y-m-d') )->sum('amount');
                    $partial_payments = InitialPayment::where('laundry_cost_id','!=',null)->whereDate('created_at', Carbon::today()->format('Y-m-d') )->sum('initial_payment');
                    $cash_draw = $paid_laundry_cost + $partial_payments;
                }
            }else if(!empty($request->from_specific_date) && !empty($request->to_desired_date)) {
                $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
                    ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
                    ->whereDate('laundry_details.created_at','>=', $request->from_specific_date)
                    ->whereDate('laundry_details.created_at','<=', $request->to_desired_date)
                    ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status','laundry_costs.id as laundry_cost_id']);
                $paid_laundry_cost = LaundryCost::where('payment_status','Paid')
                    ->whereDate('created_at','>=', $request->from_specific_date)
                    ->whereDate('created_at','<=', $request->to_desired_date)
                    ->sum('amount');
                $partial_payments = InitialPayment::where('laundry_cost_id','!=',null)
                    ->whereDate('created_at','>=', $request->from_specific_date)
                    ->whereDate('created_at','<=', $request->to_desired_date)
                    ->sum('initial_payment');
                $cash_draw = $paid_laundry_cost + $partial_payments;
            }
            else{
                $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
                    ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
                    ->whereDate('laundry_details.created_at', Carbon::today()->format('Y-m-d') )
                    ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status','laundry_costs.id as laundry_cost_id']);
                $paid_laundry_cost = LaundryCost::where('payment_status','Paid')->whereDate('created_at', Carbon::today()->format('Y-m-d') )->sum('amount');
                $partial_payments = InitialPayment::where('laundry_cost_id','!=',null)->whereDate('created_at', Carbon::today()->format('Y-m-d') )->sum('initial_payment');
                $cash_draw = $paid_laundry_cost + $partial_payments;
            }

        }
            return DataTables::of($laundry_list)
                ->addColumn('full_name', function ($list) {
                    return '<a href="">'. $list->full_name .'</a>';
                })
                ->addColumn('payment_status', function ($list){
                    switch ($list->payment_status){
                        case 'Paid' : return '<span class="mt-2 badge badge-success">Paid</span>';
                            break;
                        case 'Not Paid' : return '<a href="" onclick="event.preventDefault();updateNotPaidPaymentStatus(\''. $list->id . '\')"><span class="mt-2 badge badge-pill badge-danger">Not Paid</span></a >';
                            break;
                        case 'Partial Payment' :
                            $initial = InitialPayment::where('laundry_cost_id','=',$list->laundry_cost_id)->first();
                            $to_be_paid = str_replace(' /=', '', $list->amount ) - str_replace(' /=','', $initial->initial_payment);

                            return '<a href="" onclick="event.preventDefault();updateNotPaidPaymentStatus(\''. $list->id . '\')"><span class="mt-2 badge badge-pill badge-warning font-size-12">Partial Payment&nbsp;<span class="badge badge-light ml-2 font-size-12">( <sup>*</sup> '.$to_be_paid.' &nbsp;/= )</span></span></a>';
                            break;
                    }
                })
                ->addColumn('created_at',function ($list){
                    return $list->created_at->format('d/m/Y H:i:s');
                })
                ->addColumn('action', function ($list) {
                    $div = '<div class="flex align-items-center list-user-action">';
                    if (Auth::user()->hasRole('owner')) {
                        $div .= '<a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit" href="'.route('laundry.edit', $list->id) .'"><i class="ri-pencil-line"></i></a>&nbsp;&nbsp;';
                        $div .= '<a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete" href="javascript:destroy(\''. route('laundry.destroy', $list->id).'\')"><i class="ri-delete-bin-line"></i></a></div>';
                    }
                    return '<nobr>' . $div . '</nobr>';
                })
                ->rawColumns(['full_name','payment_status','created_at','action'])
                ->with([
                    'total_amount' => number_format($paid_laundry_cost),
                    'partial_payments' => number_format($partial_payments),
                    'cash_draw' => number_format($cash_draw)
                ])
                ->make(true);
        }

    /**
     * Updating the Not Paid and Partial Payment Status
     */
    public function update_not_paid_payment_status(Request $request){
            if($request->not_paid){
                $not_paid = LaundryCost::where('laundry_details_id', $request->id)->first();
                $not_paid->payment_status = 'Paid';
                $not_paid->update();

                $data = ['type' => 'success', 'title' => 'Successful', 'text' => 'Payment Status updated successful'];
                return \Request::ajax() ? response()->json($data) : redirect()->back()->with('data', $data);

            }
        }

    public function test_printing(Request $request){


    }


}
