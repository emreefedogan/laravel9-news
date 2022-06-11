<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Auth\GuardHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data=News::all();

        return view('home.user.index',[
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


        return view('home.user.create', [
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
        $data->user_id= Auth::id(); //$request->category_id;
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


        return redirect('/userpanel/news');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=News::find($id);

        return view('home.user.show',[
            'data'=> $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=News::find($id);
        $datalist=Category::all();
        return view('home.user.edit',[
            'data'=> $data,
            'datalist'=> $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = News::find($id);

        $data->category_id= $request->category_id;
        $data->user_id= Auth::id(); //$request->category_id;
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
        return redirect('/userpanel/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = News::find($id);
        //Storage::delete($data->image);
        if($data->image && Storage::disk('public')->exists($data->image))
        {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('/userpanel/news');
    }
}
