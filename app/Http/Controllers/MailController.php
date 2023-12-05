<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
   public function index(Request $request){

        $mailData = [
            'title' => 'Mail from CityPaintinInc.com',
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->comments,
        ];

        
        try{

            Mail::to('est@citypaintinginc.com')->send(new ContactForm($mailData));
            die("MF000");

        } catch(Exception){
            die('MF255');

        }
      
    }
}
