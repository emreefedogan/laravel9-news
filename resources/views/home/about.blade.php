@extends('layouts.home')


@section('title', 'About Us | ' .   $setting->title)
@section('description', $setting->description)
@section('keyword', $setting->keyword)
@section('icon', Storage::url($setting->icon))



@section('content')

<!-- Main News Start-->
<div class="main-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    {!! $setting->aboutus !!}


                </div>
            </div>
        </div>  </div>  </div>

@endsection
