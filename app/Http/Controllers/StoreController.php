<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {
        $informations = 
        (object)[
            'text1'=>'Come On In',
            'text2'=>"We're Open",
                'OpenHours' => (object) [
                    'Sun' => ['Sunday', 'Closed'], 
                    'Mon' => ['Monday', '7:00 AM to 8:00 PM'],
                    'Tue' => ['Tuesday', '7:00 AM to 8:00 PM'],
                    'Wed' => ['Wednesday', '7:00 AM to 8:00 PM'],
                    'Thr' => ['Thrusday', '7:00 AM to 8:00 PM'],
                    'Fri' => ['Friday' ,'7:00 AM to 8:00 PM'],
                    'Sat' => ['Saturday' ,'7:00 AM to 8:00 PM']
                ],
            'text3'=>'1116 Orchard Street',
            'text4'=>'Golden Valley, Minnesota',
            'text5'=>'Call Anytime',
            'text6'=>'(317) 585-8468',
            'img1'=>'img/about.jpg',
            'text7'=>'Strong Coffee, Strong Roots',
            'text8'=>'About Our Cafe',
            'text9'=>'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.',
            'text10'=>'We guarantee that you will fall in
            <em>lust</em>;
            with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.',
            ''=>'',

        ];
        return view('pages.store', compact('informations'));
    }
}
