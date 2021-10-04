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

    public function laundry_list(Request $request){

        if($request->ajax()){
            if(!empty($request->recent_laundry)){
                if($request->recent_laundry == Carbon::yesterday()->format('d/m/Y')){
                    $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
                        ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
                        ->whereDate('laundry_details.created_at', Carbon::yesterday()->format('Y-m-d') )
                        ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status']);
                    $paid_laundry_cost = LaundryCost::where('payment_status','Paid')->whereDate('created_at', Carbon::yesterday()->format('Y-m-d') )->sum('amount');
                } else if($request->recent_laundry == Carbon::today()->format('d/m/Y')){
                    $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
                        ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
                        ->whereDate('laundry_details.created_at', Carbon::today()->format('Y-m-d') )
                        ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status']);
                    $paid_laundry_cost = LaundryCost::where('payment_status','Paid')->whereDate('created_at', Carbon::today()->format('Y-m-d') )->sum('amount');
                }
            }else if(!empty($request->from_specific_date) && !empty($request->to_desired_date)) {

                $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
                    ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
                    ->where('laundry_details.created_at','>=', $request->from_specific_date)
                    ->where('laundry_details.created_at','<=', $request->to_desired_date)
                    ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status']);
                $paid_laundry_cost = LaundryCost::where('payment_status','Paid')
                    ->where('created_at','>=', $request->from_specific_date)
                    ->where('created_at','<=', $request->to_desired_date)
                    ->sum('amount');
            }
            else{
                $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
                    ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
                    ->whereDate('laundry_details.created_at', Carbon::today()->format('Y-m-d') )
                    ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status']);
                $paid_laundry_cost = LaundryCost::where('payment_status','Paid')->whereDate('created_at', Carbon::today()->format('Y-m-d') )->sum('amount');
            }

        }
            return DataTables::of($laundry_list)
                ->addColumn('full_name', function ($list) {
                    return '<a href="'.route('laundry.show',$list->id).'">'. $list->full_name .'</a>';
                })
                ->addColumn('payment_status', function ($list){
                    switch ($list->payment_status){
                        case 'Paid' : return '<span class="mt-2 badge badge-success">Paid</span>';
                            break;
                        case 'Not Paid' : return '<a href="javascript:updateLaundryPayment(\'' . $list->id . '\')"><span class="mt-2 badge badge-pill badge-danger">Not Paid</span></a>';
                            break;
                        case 'Partial Payment' : return '<a href="javascript:updateLaundryPayment(\'' . $list->id . '\')"><span class="mt-2 badge badge-pill badge-warning">Partial Payment</span></a>';
                            break;
                    }
                })
                ->addColumn('created_at',function ($list){
                    return $list->created_at->format('d/m/Y H:i:s');
                })
                ->addColumn('action', function ($list) {
                    $div = '<div class="flex align-items-center list-user-action">';
                    if (Auth::user()->hasRole('owner')) {
                        $div .= '<a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit" href="javascript:edit(\''. route('laundry.update', $list->id). '\')"><i class="ri-pencil-line"></i></a>&nbsp;&nbsp;';
                        $div .= '<a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete" href="javascript:destroy(\''. route('laundry.destroy', $list->id).'\')"><i class="ri-delete-bin-line"></i></a></div>';
                    }
                    return '<nobr>' . $div . '</nobr>';
                })
                ->rawColumns(['full_name','payment_status','created_at','action'])
                ->with('total_amount', number_format($paid_laundry_cost))
                ->make(true);
        }


}
