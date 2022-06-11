<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminNewsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=News::all();

        return view('admin.news.index',[
            'data'=> $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();


            return view('admin.news.create', [
                'data' => $data
            ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new News();

        $data->category_id= $request->category_id;
        $data->user_id= 0; //$request->category_id;
        $data->title= $request->title;
        $data->keywords= $request->keywords;
        $data->description= $request->description;
        if($request->file('image'))
        {
            $data->image=$request->file('image')->store('images');
        }
        $data->detail= $request->detail;
        $data->type= $request->type;
        $data->slug= $request->slug;
        $data->status= $request->status;
        $data->save();

            return redirect('admin/news');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news,$id)
    {
        $data=News::find($id);

        return view('admin.news.show',[
            'data'=> $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news,$id)
    {
        //

        $data=News::find($id);
        $datalist=Category::all();
        return view('admin.news.edit',[
            'data'=> $data,
            'datalist'=> $datalist
        ]);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news,$id)
    {
        $data = News::find($id);

        $data->category_id= $request->category_id;
        $data->user_id= 0; //$request->category_id;
        $data->title= $request->title;
        $data->keywords= $request->keywords;
        $data->description= $request->description;
        if($request->file('image'))
        {
            $data->image=$request->file('image')->store('images');
        }
        $data->detail= $request->detail;
        $data->type= $request->type;
        $data->slug= $request->slug;
        $data->status= $request->status;
        $data->save();
        return redirect('admin/news');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news,$id)
    {
        //

        $data = News::find($id);
        //Storage::delete($data->image);
        if($data->image && Storage::disk('public')->exists($data->image))
        {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/news');

    }
}
