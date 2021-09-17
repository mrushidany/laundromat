<?php

namespace App\Http\Controllers;

use App\Models\InitialPayment;
use App\Models\LaundryCost;
use App\Models\LaundryDetail;
use App\Models\LaundryMachineDetail;
use App\Models\RoutineClient;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
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
//            $ = RoutineClient::find($id);
//            $routine_client->delete();

        }catch(QueryException $queryException){

        }
    }

    public function laundry_list(Request $request){
      $laundry_list = [];
//      if($request->ajax()){
//          if(!empty($request->from_specific_date)){
//              if(Auth::user()->hasRole('owner')){
//                  $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
//                      ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
//                      ->whereBetween('laundry_details.created_at', [$request->from_specific_date,$request->to_desired_date])
//                      ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status']);
//              } else {
//                  $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
//                      ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
//                      ->whereBetween('laundry_details.created_at', [$request->from_specific_date,$request->to_desired_date])
//                      ->where('laundry_details.issued_by', '=', Auth::user()->id)
//                      ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status']);
//              }
//          } if(!empty($request->recent_laundry)){
//              if(Auth::user()->hasRole('owner')){
//                  $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
//                      ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
//                      ->where('laundry_details.created_at', '=', $request->recent_laundry)
//                      ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status']);
//              } else {
//                  $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
//                      ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
//                      ->where('laundry_details.created_at', '=', $request->recent_laundry)
//                      ->where('laundry_details.issued_by', '=', Auth::user()->id)
//                      ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status']);
//              }
//          }
//          return DataTables::of($laundry_list)
//              ->addColumn('full_name', function ($list) {
//                  return '<a href="'.route('laundry.show',$list->id).'">'. $list->full_name .'</a>';
//              })
//              ->addColumn('payment_status', function ($list){
//                  switch ($list->payment_status){
//                      case 'Paid' : return '<span class="mt-2 badge badge-success">Paid</span>';
//                          break;
//                      case 'Not Paid' : return '<span class="mt-2 badge badge-pill badge-danger">Not Paid</span>';
//                          break;
//                      case 'Partial Payment' : return '<span class="mt-2 badge badge-pill badge-warning">Partial Payment</span>';
//                          break;
//                  }
//              })
//              ->addColumn('created_at',function ($list){
//                  return $list->created_at->format('d/m/Y H:i:s');
//              })
//              ->rawColumns(['full_name','payment_status','created_at'])
//              ->make(true);
//      }

          if(Auth::user()->hasRole('owner')){
              $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
                  ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
                  ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status']);
          } else {
              $laundry_list = LaundryDetail::join('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
                  ->join("laundry_costs",'laundry_costs.laundry_details_id','=','laundry_details.id')
                  ->where('laundry_details.issued_by', '=', Auth::user()->id)
                  ->get(['laundry_details.id','routine_clients.full_name','routine_clients.phone','laundry_details.selected_machines','laundry_details.quantity','laundry_costs.amount','laundry_details.created_at','laundry_costs.payment_status']);
          }
          return DataTables::of($laundry_list)
              ->addColumn('full_name', function ($list) {
                  return '<a href="'.route('laundry.show',$list->id).'">'. $list->full_name .'</a>';
              })
              ->addColumn('payment_status', function ($list){
                  switch ($list->payment_status){
                      case 'Paid' : return '<span class="mt-2 badge badge-success">Paid</span>';
                          break;
                      case 'Not Paid' : return '<span class="mt-2 badge badge-pill badge-danger">Not Paid</span>';
                          break;
                      case 'Partial Payment' : return '<span class="mt-2 badge badge-pill badge-warning">Partial Payment</span>';
                          break;
                  }
              })
              ->addColumn('created_at',function ($list){
                  return $list->created_at->format('d/m/Y H:i:s');
              })
              ->addColumn('action', function () {
                  $div = '<div class="flex align-items-center list-user-action">';
                  if (Auth::user()->hasRole('owner')) {
                      $div .= '<a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="Print" data-original-title="Print" href="#"><i class="ri-printer-line"></i></a>&nbsp;&nbsp;';
                      $div .= '<a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>&nbsp;&nbsp;';
                      $div .= '<a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a></div>';
                  }else {
                      $div .= '<a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="Print" data-original-title="Print" href="#"><i class="ri-printer-line"></i></a>&nbsp;&nbsp;';
                      $div .= '<a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a></div>';
                  }
                  return '<nobr>' . $div . '</nobr>';

              })
              ->rawColumns(['full_name','payment_status','created_at','action'])
              ->make(true);
        }

}
