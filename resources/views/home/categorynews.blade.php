@extends('layouts.home')

@section('title', $category->title , 'News')



@section('content')


   <br>

    <!-- Main News Start-->
    <div class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        @foreach($news as $rs)
                            @if($rs->status=='True')
                                <div class="col-md-4">
                                    <div class="mn-img">
                                        <img src="{{Storage::url($rs->image)}}" />
                                        <div class="mn-title">
                                            <a href="{{route('news',['id'=>$rs->id])}}">{{$rs->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach



                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mn-list">

                        @php
                            $mainCategories= \App\Http\Controllers\HomeController::categorylist();
                        @endphp

                        <h2>Categories</h2>
                        <ul>
                            @foreach($mainCategories as $rs)
                                <li>  <a href="{{route('categorynews',['id'=>$rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}</a> </li>
                            @endforeach
                            <a href=""></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News End-->

@endsection
