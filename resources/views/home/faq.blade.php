@extends('layouts.home')


@section('title', 'Frequently Asked Questions | ' .   $setting->title)
@section('description', $setting->description)
@section('keyword', $setting->keyword)
@section('icon', Storage::url($setting->icon))



@section('content')
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Main News Start-->
<div class="main-news">
    <div class="container">

            <div class="col-lg-9">


                   <h1>FAQ Asked Questions</h1>
                    <div class="accordion" id="accordionExample">
                        @foreach($datalist as $rs)

                            @php
                       // Hepsini acabilmek icin random php kodu EmreDogan 1910205031


                            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                           $randstring = '';
        for ($i = 0; $i < 3; $i++) {
            $randstring = $characters[rand(0, strlen($characters))];
        }
         ;

                            @endphp

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{$randstring}}" aria-expanded="false" aria-controls="collapseOne">
                                    {{$rs->question}}
                                </button>
                            </h2>
                            <div id="{{$randstring}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <strong>
                                        {!! $rs->answer !!}
                                    </strong>
                            </div>
                        </div>
                    </div>




                @endforeach
        </div>  </div>  </div>

@endsection
