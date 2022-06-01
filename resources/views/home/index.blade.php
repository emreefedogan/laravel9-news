@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keyword', $setting->keyword)
@section('icon', Storage::url($setting->icon))


@section('slider')
    @include("home.slider")
@endsection



@section('content')

    <center>
    <!-- Category News Start-->
    <div class="cat-news" >
        <div class="container">
            <div class="row">

                <div class="col-md-12" style="align: center">


                    <h2>SON DAKIKA HABERLER</h2>
                       <div class="row cn-slider">
                            @foreach($newslist1 as $orta)
                                <div class="cn-img">
                                    <img src="{{Storage::url($orta->category->image)}}" height="300px" />
                                    <div class="cn-title">
                                        <a href="{{route('news',['id'=>$orta->id])}}">{{$orta->title}}</a>
                                    </div>
                                </div>

                        @endforeach


                </div>
            </div>

        </div>
    </div>
    </div>
    </center>
<br>


    <!-- Main News Start-->
    <div class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        @foreach($newslist1 as $rs)
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="{{Storage::url($rs->image)}}" href="{{route('news',['id'=>$rs->id])}}" />
                                <div class="mn-title">
                                    <a href="{{route('news',['id'=>$rs->id])}}">{{$rs->title}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>



                @php
                    $mainCategories= \App\Http\Controllers\HomeController::categorylist();
                @endphp


                <div class="col-lg-3">
                    <div class="mn-list">
                        <h2>Categories</h2>
                        <ul>
                            @foreach($mainCategories as $rs)
                                <li>  <a href="{{route('categorynews',['id'=>$rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}</a> </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News End-->

<!-- Tab News Start-->
<div class="tab-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="featured" class="container tab-pane active">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-1.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-2.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-3.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                    <div id="popular" class="container tab-pane fade">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-4.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-5.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-1.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                    <div id="latest" class="container tab-pane fade">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-2.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-3.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-4.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="m-viewed" class="container tab-pane active">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-5.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-4.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-3.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                    <div id="m-read" class="container tab-pane fade">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-2.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-1.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-3.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                    <div id="m-recent" class="container tab-pane fade">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-4.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-5.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="{{asset("assets")}}/img/news-350x223-1.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tab News Start-->


@endsection






