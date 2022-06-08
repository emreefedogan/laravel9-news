@extends('layouts.adminbase')

@section('title', 'FAQ List Panel')


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>FAQ List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">FAQ List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <a href="{{route('admin.faq.create')}}" class="btn btn-dark"> +  Add Faq </a>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">FAQ List</h5>

                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Question</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <th scope="row">{{$rs->id}}</th>

                        <td>{{$rs->question}}</td>

                        <td>{{$rs->answer}}</td>

                        <td>{{$rs->status}}</td>

                        <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-primary"> Edit </a></td>
                        <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
                               onclick="return confirm('Deleting Are You Sure ?')"> Delete </a></td>
                        <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-success"> Show </a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>



            </div>
        </div>
    </main><!-- End #main -->

@endsection
