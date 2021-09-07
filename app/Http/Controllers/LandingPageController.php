<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
     public function index(){
         $data = [
           'facebook_url' => 'https://www.facebook.com/easywashtz-106653400830167/',
           'instagram_url' => 'https://instagram.com/easywashtz?utm_medium=copy_link'
         ];
         return view('home.landing_page')->with($data);
     }

     public function about(){
         $data = [
             'facebook_url' => 'https://www.facebook.com/easywashtz-106653400830167/',
             'instagram_url' => 'https://instagram.com/easywashtz?utm_medium=copy_link'
         ];
          return view('home.about')->with($data);
     }

    public function contact(){
        $data = [
            'facebook_url' => 'https://www.facebook.com/easywashtz-106653400830167/',
            'instagram_url' => 'https://instagram.com/easywashtz?utm_medium=copy_link'
        ];
        return view('home.contact')->with($data);
    }
    public function pricing(){
        $data = [
            'facebook_url' => 'https://www.facebook.com/easywashtz-106653400830167/',
            'instagram_url' => 'https://instagram.com/easywashtz?utm_medium=copy_link'
        ];
        return view('home.pricing')->with($data);
    }
    public function services(){
        $data = [
            'facebook_url' => 'https://www.facebook.com/easywashtz-106653400830167/',
            'instagram_url' => 'https://instagram.com/easywashtz?utm_medium=copy_link'
        ];
        return view('home.services')->with($data);
    }
}
