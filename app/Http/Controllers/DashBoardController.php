<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        if(Auth::user()->hasRole('admin')) {
            $role = DB::table('roles')->where('name','=','admin')->first();
            $data = [
                'company_name' => 'CompTech Company Limited',
                'role' => $role->display_name
            ];
            return view('dashboard.administrator.administrator_dashboard')->with($data);
        }elseif(Auth::user()->hasRole('manager')){
            return view();
        }elseif(Auth::user()->hasRole('dry_man')){
            return view();
        }elseif(Auth::user()->hasRole('wash_man')){
            return view();
        }elseif(Auth::user()->hasRole('owner')){
            $role = DB::table('roles')->where('name','=','owner')->first();
            $data = [
                'company_name' => 'CompTech Company Limited',
                'role' => $role->display_name
            ];
            return view('dashboard.administrator.administrator_dashboard')->with($data);
        }
    }
     public function administrator_profile(){
       return view('dashboard.administrator.profile');
     }
}
