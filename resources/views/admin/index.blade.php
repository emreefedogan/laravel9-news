@php
$count= App\Models\News::count();
@endphp
@php
    $countcategories= App\Models\Category::count();
@endphp

@extends('layouts.adminbase')

@section('title', 'News Admin Panel')


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Blank Page</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Blank</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">News</h5>

                            <p>{{$count}}</p>

                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Categories</h5>
                            <p>{{$countcategories}}</p>
                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->

@endsection
