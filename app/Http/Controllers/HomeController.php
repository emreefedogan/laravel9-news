<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\News;
use App\Models\Message;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function categorynews($id)
    {

        $category=Category::find($id);
        $news=DB::table('news')->where('category_id',$id)->get();
        return view('home.categorynews',[

            'category'=>$category,
            'news'=>$news

        ]
        );

    }
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function home()
    {
        $sliderdata=News::limit(4)->get();
        $newslist1=News::limit(6)->get();
        $setting=Settings::first();
        return view('home.index',[

            'sliderdata'=>$sliderdata,
            'newslist1'=>$newslist1,
            'setting'=>$setting,
            ]

        );
    }

    public function about()
    {

        $setting=Settings::first();
        return view('home.about',[

                'setting'=>$setting,

            ]

        );
    }
    public function references()
    {

        $setting=Settings::first();
        return view('home.references',[

                'setting'=>$setting,

            ]

        );
    }
    public function contact()
    {

        $setting=Settings::first();
        return view('home.contact',[

                'setting'=>$setting,

            ]

        );
    }
    public function faq()
    {
        $setting=Settings::first();
        $datalist=Faq::all();
        return view('home.faq',[

                'setting'=>$setting,
                'datalist'=>$datalist

            ]

        );
    }

    public function storemessage(Request $request)
    {

        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();
        $data-> save();

    return redirect()->route('contact')->with('info','Your message has been sent, Thank You. ');

    }


    public function storecomment(Request $request)
    {
        $data = new Comment();
        $data->user_id = Auth::Id();
        $data->news_id = $request->input('news_id');
        $data->rate = $request->input('rate');
        $data->comment = $request->input('comment');
        $data->ip = $request->ip();
        $data-> save();

        return redirect()->route('news',['id'=>$request->input('news_id')])->with('info','Your comment has been sent, Thank You. ');

    }



    public function news($id)
    {
        $data=News::find($id);
        $images=DB::table('images')->where('news_id',$id)->get();
        $reviews=Comment::where('news_id',$id)->where('status','True')->get();
        return view('home.news',[

                'data'=>$data,
                'images' => $images,
                'reviews'=> $reviews


            ]

        );
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
