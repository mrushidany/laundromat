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
        $data = [
           'role' => $this->display_role_names(),
            'company_name' => 'Valar Technology Solutions'
        ];
        return view('dashboard.main_dashboard')->with($data);
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

     public function display_role_names(){
        $role = '';
        if(Auth::user()->hasRole('owner')){
            $owner = DB::table('roles')->where('name','=','owner')->first();
            $role = $owner->display_name;
        }else if(Auth::user()->hasRole('washman')){
            $washman = DB::table('roles')->where('name','=','wash_man')->first();
            $role = $washman->display_name;
        }else if(Auth::user()->hasRole('dryman')){
            $dryman = DB::table('roles')->where('name','=','dry_man')->first();
            $role = $dryman->display_name;
        }
        return $role;
     }
}
