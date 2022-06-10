@extends('layouts.home')


@section('title', 'User Panel')




@section('content')

    <!-- Main News Start-->
    <div class="main-news" style="text-align: center">







        <!-- Contact Start -->
        <div class="contact ">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                    <h1>User Menu & User Profile</h1>

                           @include('home.user.usermenu')

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">


                            <p>
                              @include('profile.show')
                            </p>


                    </div>
                </div>
            </div>
        </div>



    </div>





    <!-- Contact End -->


@endsection
