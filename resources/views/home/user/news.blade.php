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
                    <h1>My News  & My News Edit &  My News Create</h1>

                           @include('home.user.usermenu')

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <a href="{{route('user.create')}}" class="btn btn-dark"> +  Add News </a>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">News List</h5>

                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Image</th>

                                        <th scope="col">Status</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($news as $rs)
                                        <tr>
                                            <th scope="row">{{$rs->id}}</th>
                                            <td> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                            <td>{{$rs->title}}</td>

                                            <td>{{$rs->description}}</td>
                                            <td>
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" style="height: 50px">

                                                @endif

                                            </td>

                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('user.edit',['id'=>$rs->id])}}" class="btn btn-primary"> Edit </a></td>
                                            <td><a href="{{route('user.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
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



    </div>





    <!-- Contact End -->


@endsection
