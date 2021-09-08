<?php

namespace App\Http\Controllers;

use App\Models\LaundryCost;
use App\Models\LaundryDetail;
use App\Models\LaundryMachineDetail;
use App\Models\RoutineClient;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('owner')){
            return view('owner.laundry');
        }
        return view('manager.laundry');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->hasRole('owner')){
            return view('owner.form.create');
        }
        return view('manager.form.create');
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
               $routine_client->phone = '+255'.$request->phone_number;
               $routine_client->save();

            if(isset($routine_client->id)){
                $laundry_details = new LaundryDetail();
                   $laundry_details->routine_client_id = $routine_client->id;
                   $laundry_details->quantity = $request->laundry_quantity.' '.' Kgs';
                   $laundry_details->pickup_date = $request->pickup_date;
                   $laundry_details->issued_by = Auth::user()->id;
                   $laundry_details->save();

            }if (isset($laundry_details->id)) {
                    $laundry_machine_details = new LaundryMachineDetail();
                    $laundry_machine_details->laundry_details_id = $laundry_details->id;
                    $laundry_machine_details->washine_machine_id = $request->washine_machine;
                    $laundry_machine_details->drying_machine_id = $request->drying_machine;
                    $laundry_machine_details->save();
                if (isset($laundry_machine_details->id)) {
                    $laundry_costs = new LaundryCost();
                    $laundry_costs->laundry_details_id = $laundry_details->id;
                    $laundry_costs->amount = $request->total_cost.' '.'/=';
                    $laundry_costs->save();
                }
                DB::commit();
                if (isset($laundry_costs)) {
                    $data = ['state' => 'Done', 'title' => 'Successful', 'msg' => 'Record created successful'];
                    return \Request::ajax() ? response()->json($data) : redirect()->route('laundry.index')->with('data', $data);
                }
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = [
            'routine_client' => RoutineClient::find($id),
            'laundry_details' => LaundryDetail::where('routine_client_id', $id)->first()
        ];

        return view('manager.form.laundry_input_form')->with($data);
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
        //
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

    public function laundry_list(){
        if(Auth::user()->hasRole('owner')){
            $laundry_list = DB::table('laundry_details')
                ->leftJoin('routine_clients','routine_clients.id','=','laundry_details.routine_client_id')
                ->leftJoin('laundry_machine_details','laundry_machine_details.laundry_details_id','=','laundry_details.id')
                ->leftJoin('laundry_costs','laundry_costs.laundry_details_id','=','laundry_details.id')
                ->select('laundry_details.id','full_name','phone','quantity','amount','pickup_date','laundry_details.created_at');
            return DataTables::of($laundry_list)
                ->addColumn('full_name', function ($list) {
                    return '<a href="">'. $list->full_name .'</a>';
                })
                ->addColumn('action', function ($list){
                    $button  = '';
                    $button .= '<a style="padding-right: 2px" href="javascript:edit(\''. route('laundry.edit', $list->id) . '\')" class="button-icon button btn btn-sm rounded-small btn-info"><span><i class="fa fa-edit  m-0"></i></span></a>&nbsp;&nbsp;';
                    $button .= '<a href="javascript:destroy(\''. route('laundry.destroy', $list->id) . '\')" class="button-icon button btn btn-sm rounded-small btn-danger"><span><i class="fa fa-trash m-0"></i></span></a>';
                    return '<nobr>' . $button . '</nobr>';
                })
                ->rawColumns(['full_name','action'])
                ->make(true);
        }else {
            $laundry_list = DB::table('laundry_details')
                ->leftJoin('routine_clients', 'routine_clients.id', '=', 'laundry_details.routine_client_id')
                ->leftJoin('laundry_machine_details', 'laundry_machine_details.laundry_details_id', '=', 'laundry_details.id')
                ->leftJoin('laundry_costs', 'laundry_costs.laundry_details_id', '=', 'laundry_details.id')
                ->select('laundry_details.id', 'full_name', 'phone', 'quantity', 'amount', 'pickup_date', 'laundry_details.created_at');
            return DataTables::of($laundry_list)
                ->addColumn('full_name', function ($list) {
                    return '<a href="">' . $list->full_name . '</a>';
                })
                ->rawColumns(['full_name'])
                ->make(true);
        }

    }
}
