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
                'inside_img' => '322.jpg',
                'outside_img' => '322.jpg',
                'text1' => '322 Grand Concourse, Bronx, NY 10451',
                'text2' => 'Completed 2023',
                'slide' => 'slideInUp',

            ],

            [
                'inside_img' => '130.jpg',
                'outside_img' => '130.jpg',
                'text1' => '130 Hope St, Brooklyn, NY 11211',
                'text2' => 'Completed 2023',
                'slide' => 'slideInRight',
            ],
                          

            [
                'inside_img' => '540.jpg',
                'outside_img' => '540.jpg',
                'text1' => '540 Waverly Ave, Brooklyn, NY 11238',
                'text2' => 'Completed 2023',
                'slide' => 'slideInUp',

            ],

            [
                'inside_img' => '210.jpg',
                'outside_img' => '210.jpg',
                'text1' => '210 Clarkson AveBrooklyn, NY 11226',
                'text2' => 'Completed 2023',
                'slide' => 'slideInLeft',

            ],

            [
                'inside_img' => '219.webp',
                'outside_img' => '219.jpg',
                'text1' => '219 Hudson Street, New York, NY, 10013',
                'text2' => 'Completed 2022',
                'slide' => 'slideInRight',

            ],

            [
                'inside_img' => 'kj.webp',
                'outside_img' => 'kj.jpg',
                'text1' => 'Veyoel Moshe Gardens Condo Apartment Complex',
                'text2' => 'Completed 2022',
                'slide' => 'slideInDown',

            ],

            [
                'inside_img' => '10.jpg',
                'outside_img' => '10.jpg',
                'text1' => '10 MONTIETH STREET BROOKLYN, NY 11206',
                'text2' => 'Completed 2023',
                'slide' => 'slideInDown',

            ],

            [
                'inside_img' => '540.jpg',
                'outside_img' => '540.jpg',
                'text1' => '540 Waverly Ave, Brooklyn, NY 11238',
                'text2' => 'Apartment building',
                'slide' => 'slideInLeft',

            ],


        ];

        return $portfolios;
    }
}
