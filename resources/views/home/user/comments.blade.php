@extends('layouts.home')


@section('title', 'User Comments & Review')


@section('content')

    <!-- Main News Start-->
    <div class="main-news" style="text-align: center">







        <!-- Contact Start -->
        <div class="contact ">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                    <h1>User Menu & User Comments, Review</h1>

                           @include('home.user.usermenu')

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Comment List</h5>

                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">News Name</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Comment</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comments as $rs)
                                        <tr>
                                            <th scope="row">{{$rs->id}}</th>
                                            <td><a href="{{route('news',['id'=>$rs->news_id])}}">{{$rs->news->title}}</a> </td>
                                            <th> {{$rs->user->name}}</th>
                                            <td> {{$rs->comment}}</td>
                                            <td>{{$rs->rate}}</td>
                                            <td>{{$rs->status}}</td>

                                            <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-danger"
                                                   onclick="return confirm('Deleting Are You Sure ?')"> Delete </a></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>



                    </div>
                </div>
            </div>
        </div>



    </div>





    <!-- Contact End -->


@endsection
