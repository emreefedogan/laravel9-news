@extends('layouts.home')


@section('title', 'User Login | ')




@section('content')


    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">User Login </li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

<!-- Main News Start-->
<div class="main-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                    @include('auth.login')


            </div>
        </div>  </div>  </div>

@endsection
