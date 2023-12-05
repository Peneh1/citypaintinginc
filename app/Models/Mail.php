<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;

    public static function validad_recapture($reCAPTCHA){
  
    $secret_key = '6Lf1WSYpAAAAAG75f--FBbvM-0jKMdYUGhCzIk7f';
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $dataArray = ['secret' => $secret_key, 'response' => $reCAPTCHA];

    $data = http_build_query($dataArray);

    $getUrl = $url."?".$data;

$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $getUrl);
curl_setopt($ch, CURLOPT_TIMEOUT, 80);
   
$response = curl_exec($ch);
    
if(curl_error($ch)){
    return 'Request Error:' . curl_error($ch);
}else{
    $response = json_decode($response, true);

           return $response['success'];
    
}
   
curl_close($ch);

    }
}
