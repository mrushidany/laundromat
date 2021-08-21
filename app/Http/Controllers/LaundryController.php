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

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manager.laundry');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.form.laundry_input_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try{
            $routine_client = RoutineClient::create([
               'full_name' => $request->full_name,
               'phone' => $request->phone_number,
            ]);
            if($routine_client->id){
                $laundry_details = LaundryDetail::create([
                   'routine_client_id' => $routine_client->id,
                   'quantity' => $request->laundry_quantity.' '.' Kgs',
                   'pickup_date' => $request->pickup_date,
                   'issued_by' => Auth::user()->id
                ]);
            }if ($laundry_details->id) {
                    $laundry_machine_details = LaundryMachineDetail::create([
                        'laundry_details_id' => $laundry_details->id,
                        'washine_machine_id' => $request->washine_machine,
                        'drying_machine_id' => $request->drying_machine
                    ]);
                if ($laundry_machine_details->id) {
                    $laundry_costs = LaundryCost::create([
                       'laundry_details_id' => $laundry_details->id,
                       'amount' => $request->total_cost.' '.'/='
                    ]);
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
        //
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
    public function destroy($id)
    {
        //
    }
}
