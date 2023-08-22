<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use App\Models\Services;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $services = Services::index(); 

        $portfolios = portfolio::index();

        return view('index', [
            'services' => $services,
            'portfolios' => $portfolios,
        ]);
    }
}
