<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $informations = 
            (object)[
                'img'=> 'img/intro.jpg',
                'text1' => 'Fresh Coffee', 
                'text2' => 'Worth Drinking',
                'text3' => 'Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!', 
                'buttn' => 'Visit Us Today!',
                // section 2 
                'text4' => 'Our Promise',
                'text5' => 'To You',
                'text6' => 'When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!',
            ];
        return view('index', compact('informations'));
    }
}
