<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;

    public static function index(){
        $portfolios = [
            [
                'inside_img' => '130.jpg',
                'outside_img' => '130.jpg',
                'text1' => '130 Hope St, Brooklyn, NY 11211',
                'text2' => 'Building',
                'slide' => 'slideInRight',
            ],
                

            [
                'inside_img' => '322.jpg',
                'outside_img' => '322.jpg',
                'text1' => '322 Grand Concourse, Bronx, NY 10451',
                'text2' => 'Building',
                'slide' => 'slideInleft',

            ],

            [
                'inside_img' => '540.jpg',
                'outside_img' => '540.jpg',
                'text1' => '540 Waverly Ave, Brooklyn, NY 11238',
                'text2' => 'Apartment building',
                'slide' => 'slideInUp',

            ],

            [
                'inside_img' => '130.jpg',
                'outside_img' => '130.jpg',
                'text1' => '130 Hope St, Brooklyn, NY 11211',
                'text2' => 'Building',
                'slide' => 'slideInDown',

            ],

            [
                'inside_img' => '322.jpg',
                'outside_img' => '322.jpg',
                'text1' => '322 Grand Concourse, Bronx, NY 10451',
                'text2' => 'Building',
                'slide' => 'slideInUp',

            ],

            [
                'inside_img' => '540.jpg',
                'outside_img' => '540.jpg',
                'text1' => '540 Waverly Ave, Brooklyn, NY 11238',
                'text2' => 'Apartment building',
                'slide' => 'slideInUp',

            ],

            [
                'inside_img' => '322.jpg',
                'outside_img' => '322.jpg',
                'text1' => '322 Grand Concourse, Bronx, NY 10451',
                'text2' => 'Building',
                'slide' => 'slideInUp',

            ],

            [
                'inside_img' => '540.jpg',
                'outside_img' => '540.jpg',
                'text1' => '540 Waverly Ave, Brooklyn, NY 11238',
                'text2' => 'Apartment building',
                'slide' => 'slideInUp',

            ],


        ];

        return $portfolios;
    }
}
