<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $informations = 
            (object)[
                'text1'=>'Blended to Perfection',
                'text2'=>'Coffees &amp; Teas',
                'img1'=>'img/products-01.jpg',
                'text3'=>'We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it\'s our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.',
                // section 2 
                'text4'=>'Delicious Treats, Good Eats',
                'text5'=>'Bakery &amp; Kitchen', 
                'img2'=>'img/products-02.jpg', 
                'text6'=>'Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.',
                // section 3
                'text7'=>'From Around the World',
                'text8'=>'Bulk Speciality Blends',
                'img3'=>'img/products-03.jpg',
                'text9'=>'Travelling the world for the very best quality coffee is something take pride in. When you visit us, you\'ll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.',
            ];

        return view('pages.products', compact('informations'));
    }
}
