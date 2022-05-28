<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function home()
    {
        $sliderdata=News::limit(4)->get();
        $newslist1=News::limit(6)->get();
        return view('home.index',[

            'sliderdata'=>$sliderdata,
            'newslist1'=>$newslist1

            ]

        );
    }

    public function news($id)
    {
        $data=News::find($id);
        $images=DB::table('images')->where('news_id',$id)->get();
        return view('home.news',[

                'data'=>$data,
                'images' => $images,


            ]

        );
    }
}
