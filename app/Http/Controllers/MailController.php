<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Mail as MailModel;

class MailController extends Controller
{
   public function index(Request $request){

$valid = MailModel::validad_recapture($request->recaptcha_response);
   if($valid !== true):
   return $valid;
   return 'MF254';
   endif;

        $mailData = [
            'title' => 'Mail from CityPaintinInc.com',
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->comments,
        ];

        
        try{

            Mail::to('est@citypaintinginc.com')->send(new ContactForm($mailData));
            return "MF000";

        } catch(Exception){
            return 'MF255';

        }
      
    }
}
