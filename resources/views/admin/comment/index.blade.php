@extends('layouts.adminbase')

@section('title', 'Comment & Review List Panel')


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Comment List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Comment List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


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
                        <th scope="col">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <th scope="row">{{$rs->id}}</th>
                        <td><a href="{{route('admin.news.show',['id'=>$rs->news_id])}}">{{$rs->news->title}}</a> </td>
                        <th> {{$rs->user->name}}</th>
                        <td> {{$rs->comment}}</td>
                        <td>{{$rs->rate}}</td>
                        <td>{{$rs->status}}</td>

                        <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
                               onclick="return confirm('Deleting Are You Sure ?')"> Delete </a></td>
                        <td><a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="btn btn-success"
                               onclick="return !window.open(this.href, ' ', 'toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=100,width=1100,height=700')"> Show </a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>



            </div>
        </div>
    </main><!-- End #main -->

@endsection
