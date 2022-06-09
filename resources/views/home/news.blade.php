@extends('layouts.home')

@section('title', $data->title , 'News')



@section('content')
<style>


    .be-comment-block {
        margin-bottom: 50px !important;
        border: 1px solid #edeff2;
        border-radius: 2px;
        padding: 50px 70px;
        border:1px solid #ffffff;
    }

    .comments-title {
        font-size: 16px;
        color: #262626;
        margin-bottom: 15px;
        font-family: 'Conv_helveticaneuecyr-bold';
    }

    .be-img-comment {
        width: 60px;
        height: 60px;
        float: left;
        margin-bottom: 15px;
    }

    .be-ava-comment {
        width: 60px;
        height: 60px;
        border-radius: 50%;
    }

    .be-comment-content {
        margin-left: 80px;
    }

    .be-comment-content span {
        display: inline-block;
        width: 49%;
        margin-bottom: 15px;
    }

    .be-comment-name {
        font-size: 13px;
        font-family: 'Conv_helveticaneuecyr-bold';
    }

    .be-comment-content a {
        color: #383b43;
    }

    .be-comment-content span {
        display: inline-block;
        width: 49%;
        margin-bottom: 15px;
    }

    .be-comment-time {
        text-align: right;
    }

    .be-comment-time {
        font-size: 11px;
        color: #b4b7c1;
    }

    .be-comment-text {
        font-size: 13px;
        line-height: 18px;
        color: #7a8192;
        display: block;
        background: #f6f6f7;
        border: 1px solid #edeff2;
        padding: 15px 20px 20px 20px;
    }

    .form-group.fl_icon .icon {
        position: absolute;
        top: 1px;
        left: 16px;
        width: 48px;
        height: 48px;
        background: #f6f6f7;
        color: #b5b8c2;
        text-align: center;
        line-height: 50px;
        -webkit-border-top-left-radius: 2px;
        -webkit-border-bottom-left-radius: 2px;
        -moz-border-radius-topleft: 2px;
        -moz-border-radius-bottomleft: 2px;
        border-top-left-radius: 2px;
        border-bottom-left-radius: 2px;
    }

    .form-group .form-input {
        font-size: 13px;
        line-height: 50px;
        font-weight: 400;
        color: #b4b7c1;
        width: 100%;
        height: 50px;
        padding-left: 20px;
        padding-right: 20px;
        border: 1px solid #edeff2;
        border-radius: 3px;
    }

    .form-group.fl_icon .form-input {
        padding-left: 70px;
    }

    .form-group textarea.form-input {
        height: 150px;
    }


    /*
        Use :not with impossible condition so inputs are only hidden
        if pseudo selectors are supported. Otherwise the user would see
        no inputs and no highlighted stars.
    */
    .rating input[type="radio"]:not(:nth-of-type(0)) {
        /* hide visually */
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }
    .rating [type="radio"]:not(:nth-of-type(0)) + label {
        display: none;
    }

    label[for]:hover {
        cursor: pointer;
    }

    .rating .stars label:before {
        content: "★";
    }

    .stars label {
        color: lightgray;
    }

    .stars label:hover {
        text-shadow: 0 0 1px #000;
    }

    .rating [type="radio"]:nth-of-type(1):checked ~ .stars label:nth-of-type(-n+1),
    .rating [type="radio"]:nth-of-type(2):checked ~ .stars label:nth-of-type(-n+2),
    .rating [type="radio"]:nth-of-type(3):checked ~ .stars label:nth-of-type(-n+3),
    .rating [type="radio"]:nth-of-type(4):checked ~ .stars label:nth-of-type(-n+4),
    .rating [type="radio"]:nth-of-type(5):checked ~ .stars label:nth-of-type(-n+5) {
        color: orange;
    }

    .rating [type="radio"]:nth-of-type(1):focus ~ .stars label:nth-of-type(1),
    .rating [type="radio"]:nth-of-type(2):focus ~ .stars label:nth-of-type(2),
    .rating [type="radio"]:nth-of-type(3):focus ~ .stars label:nth-of-type(3),
    .rating [type="radio"]:nth-of-type(4):focus ~ .stars label:nth-of-type(4),
    .rating [type="radio"]:nth-of-type(5):focus ~ .stars label:nth-of-type(5) {
        color: darkorange;
    }
</style>

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">{{$data->category->title}}</a></li>
                <li class="breadcrumb-item active">{{$data->title}}</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Single News Start-->
    <div class="single-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sn-container">
                        <div class="sn-img">
                            <img src="{{Storage::url($data->image)}}" />
                        </div>
                        <div class="sn-content">
                            <h1 class="sn-title">{{$data->title}}</h1>

                            {!! $data->detail !!}

                        </div>
                    </div>

                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">



                    <h1 class="comments-title">Comments</h1>
                    @foreach($reviews as $rs)
                    <div class="be-comment">
                        <div class="be-img-comment">
                            <a href="{{route('home')}}">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment">
                            </a>
                        </div>
                        <div class="be-comment-content">

				<span class="be-comment-name">
					<a href="blog-detail-2.html">{{$rs->user->name}}</a>
					</span>
                            <span class="be-comment-time">
					<i class="fa fa-clock-o"></i>
					{{$rs->created_at}}, Review : {{$rs->rate}}
				</span>

                            <p class="be-comment-text">
                                {{$rs->comment}}
                            </p>
                        </div>
                    </div>
                    @endforeach



                    @include('home.messages')
                    <form  action="{{route('storecomment')}}" method="POST">
                        @csrf
                        <input class="input" type="hidden" name="news_id" value="{{$data->id}}">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="form-group fl_icon">
                                    <div class="icon"><i class="fa fa-user"></i></div>
                                    <input class="form-input" type="text" name="comment" placeholder="Comment">
                                </div>
                            </div>


                        </div>

                        <fieldset class="rating">
                            <legend>Rating </legend>

                            <input id="demo-1" type="radio" name="rate" value="1">
                            <label for="demo-1">1 star</label>
                            <input id="demo-2" type="radio" name="rate" value="2">
                            <label for="demo-2">2 stars</label>
                            <input id="demo-3" type="radio" name="rate" value="3">
                            <label for="demo-3">3 stars</label>
                            <input id="demo-4" type="radio" name="rate" value="4">
                            <label for="demo-4">4 stars</label>
                            <input id="demo-5" type="radio" name="rate" value="5">
                            <label for="demo-5">5 stars</label>

                            <div class="stars">
                                <label for="demo-1" aria-label="1 star" title="1 star"></label>
                                <label for="demo-2" aria-label="2 stars" title="2 stars"></label>
                                <label for="demo-3" aria-label="3 stars" title="3 stars"></label>
                                <label for="demo-4" aria-label="4 stars" title="4 stars"></label>
                                <label for="demo-5" aria-label="5 stars" title="5 stars"></label>
                            </div>

                        </fieldset>

                        <div class="text-center">
                            @auth
                            <button type="submit" class="btn btn-primary">Submit</button>
                            @else
                            <a href="/login" class="btn btn-danger">For Submit your Review, Please Login</a>
                            @endauth


                        </div>
                    </form>



                    <div class="sn-related">
                        <h2>Related News</h2>
                        <div class="row sn-slider">
                            <div class="col-md-4">
                                <div class="sn-img">
                                    <img src="img/news-350x223-1.jpg" />
                                    <div class="sn-title">
                                        <a href="">Interdum et fames ac ante</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="sn-img">
                                    <img src="img/news-350x223-2.jpg" />
                                    <div class="sn-title">
                                        <a href="">Interdum et fames ac ante</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="sn-img">
                                    <img src="img/news-350x223-3.jpg" />
                                    <div class="sn-title">
                                        <a href="">Interdum et fames ac ante</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="sn-img">
                                    <img src="img/news-350x223-4.jpg" />
                                    <div class="sn-title">
                                        <a href="">Interdum et fames ac ante</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h2 class="sw-title">In This Category</h2>
                            <div class="news-list">
                                <div class="nl-item">
                                    <div class="nl-img">
                                        <img src="img/news-350x223-1.jpg" />
                                    </div>
                                    <div class="nl-title">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    </div>
                                </div>
                                <div class="nl-item">
                                    <div class="nl-img">
                                        <img src="img/news-350x223-2.jpg" />
                                    </div>
                                    <div class="nl-title">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    </div>
                                </div>
                                <div class="nl-item">
                                    <div class="nl-img">
                                        <img src="img/news-350x223-3.jpg" />
                                    </div>
                                    <div class="nl-title">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    </div>
                                </div>
                                <div class="nl-item">
                                    <div class="nl-img">
                                        <img src="img/news-350x223-4.jpg" />
                                    </div>
                                    <div class="nl-title">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    </div>
                                </div>
                                <div class="nl-item">
                                    <div class="nl-img">
                                        <img src="img/news-350x223-5.jpg" />
                                    </div>
                                    <div class="nl-title">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="image">
                                <a href="https://htmlcodex.com"><img src="img/ads-2.jpg" alt="Image"></a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="tab-news">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="featured" class="container tab-pane active">
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-1.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-2.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-3.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-4.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-5.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="popular" class="container tab-pane fade">
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-4.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-3.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-2.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-1.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-2.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="latest" class="container tab-pane fade">
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-3.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-4.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-5.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-4.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="img/news-350x223-3.jpg" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="image">
                                <a href="https://htmlcodex.com"><img src="img/ads-2.jpg" alt="Image"></a>
                            </div>
                        </div>

                        @php
                            $mainCategories= \App\Http\Controllers\HomeController::categorylist();
                        @endphp
                        <div class="sidebar-widget">
                            <h2 class="sw-title">News Category</h2>
                            <div class="category">
                                <ul>

                                        @foreach($mainCategories as $rs)
                                            <li>  <a href="{{route('categorynews',['id'=>$rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}</a> </li>
                                        @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="image">
                                <a href="https://htmlcodex.com"><img src="img/ads-2.jpg" alt="Image"></a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="sw-title">Tags Cloud</h2>
                            <div class="tags">
                                <a href="">National</a>
                                <a href="">International</a>
                                <a href="">Economics</a>
                                <a href="">Politics</a>
                                <a href="">Lifestyle</a>
                                <a href="">Technology</a>
                                <a href="">Trades</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single News End-->
@endsection






