<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;

    public static function validad_recapture($reCAPTCHA){
  
    $url = "https://google.com/recaptcha/api/siteverify";
    $dataArray = ['secret' => env('RECAPTCHA_SECRET_KEY'), 'response' => $reCAPTCHA];

    $data = http_build_query($dataArray);

    $getUrl = $url."?".$data;

$ch = curl_init();
//curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $getUrl);
curl_setopt($ch, CURLOPT_TIMEOUT, 80);
   
$response = curl_exec($ch);


if(curl_error($ch)){
    return 'Request Error:' . curl_error($ch);
}else{
    $response = json_decode($response, true);
   
        if($response['success'] == true):

            //check for score
            if($response['score'] > 0.5):
                 return true;
            else:
                return false;
            endif;
            
        else:
           return false;
           // return $response['error-codes'][0];
        endif;
    
}
   
curl_close($ch);

    }
}
