@extends('layouts.adminbase')

@section('title', 'Contact Form Message List Panel')


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Message List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Message List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Message List</h5>

                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <th scope="row">{{$rs->id}}</th>
                        <td>{{$rs->name}}</td>
                        <td>{{$rs->email}}</td>
                        <td>{{$rs->phone}}</td>
                        <td>{{$rs->subject}}</td>
                        <td>{{$rs->message}}</td>
                        <td>{{$rs->status}}</td>

                        <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
                               onclick="return confirm('Deleting Are You Sure ?')"> Delete </a></td>
                        <td><a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-success"
                               onclick="return !window.open(this.href, ' ', 'toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=100,width=1100,height=700')"> Show </a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>



            </div>
        </div>
    </main><!-- End #main -->

@endsection
