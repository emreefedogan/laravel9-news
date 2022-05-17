<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $sliderdata=News::limit(4)->get();
        return view('home.index',[

            'sliderdata'=>$sliderdata
            ]

        );
    }
}
