<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Doctrine\DBAL\Query\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function contact($request){

        $data = [
            'facebook_url' => 'https://www.facebook.com/easywashtz-106653400830167/',
            'instagram_url' => 'https://instagram.com/easywashtz?utm_medium=copy_link',
            'request' => $request
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

    public function save_contact(Request $request){
        try{
            DB::beginTransaction();

            $contact_message = new ContactMessage();
            $contact_message->name = $request->name;
            $contact_message->phone = $request->phone;
            $contact_message->subject = $request->subject;
            $contact_message->message = $request->message;
            $contact_message->save();

            DB::commit();
        }catch(QueryException $queryException){
            DB::rollBack();
        }
    }
}
