<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $services = Services::index(); 

        return view('index', [
            'services' => $services
        ]);
    }
}
