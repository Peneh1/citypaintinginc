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

        return view('option1.index', [
            'services' => $services,
            'portfolios' => $portfolios,
        ]);
    }

    public function option2(){
        $services = Services::index(); 

        $portfolios = portfolio::index();

        return view('option2.index', [
            'services' => $services,
            'portfolios' => $portfolios,
        ]);
    }
}
