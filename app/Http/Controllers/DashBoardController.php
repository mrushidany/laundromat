<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
                'role' => $role->display_name,
                'greeting' => $this->greeting()
            ];
            return view('dashboard.administrator.administrator_dashboard')->with($data);
        }
        elseif(Auth::user()->hasRole('manager')){
            $role = DB::table('roles')->where('name','=','manager')->first();
            $data = ['role'=> $role->display_name];
            return view('dashboard.manager.manager_dashboard')->with($data);
        }
        elseif(Auth::user()->hasRole('dry_man')){
            $role = DB::table('roles')->where('name','=','dry_man')->first();
            $data = ['role'=> $role->display_name];
            return view('dashboard.manager.manager_dashboard')->with($data);
        }
        elseif(Auth::user()->hasRole('wash_man')){
            $role = DB::table('roles')->where('name','=','wash_man')->first();
            $data = ['role'=> $role->display_name];
            return view('dashboard.manager.manager_dashboard')->with($data);
        }
        elseif(Auth::user()->hasRole('owner')){
            $role = DB::table('roles')->where('name','=','owner')->first();
            $data = [
                'company_name' => 'CompTech Company Limited',
                'role' => $role->display_name,
                'greeting' => $this->greeting()
            ];
            return view('dashboard.administrator.administrator_dashboard')->with($data);
        }
        echo "Welcome to the Dashboard";
    }
     public function administrator_profile(){
       return view('dashboard.administrator.profile');
     }
     public function greeting(){
         $hour = Carbon::now()->format('H');
         if($hour < 12) {
             return 'Good Morning';
         } elseif ($hour < 17) {
             return 'Good Afternoon';
         }else {
             return 'Good Evening';
         }
     }
}
