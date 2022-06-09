@extends('layouts.adminbase')

@section('title', 'Edit FAQ :  ',$data->title)
@section('head')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit FAQ : {{$data->title}}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Edit FAQ :  {{$data->title}}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="card">
            <div class="card-body">

                <!-- Vertical Form -->
                <form class="row g-3" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf


                <h5 class="card-title">FAQ Elements</h5>


                    <div class="col-12">
                        <label for="title" class="form-label">Question</label>
                        <input type="text" class="form-control" name="question" value="{{$data->question}}">
                    </div>

                    <div class="col-12">
                        <label for="textarea"  class="form-label">Answer</label>
                        <textarea  class="textarea" id="answer" name="answer">{{$data->answer}}</textarea>

                    </div>


                    <div class="col-12">
                        <label class="col-sm-2 col-form-label">Status : {{$data->status}}</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option >True</option>
                                <option >False</option>

                            </select>
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Data</button>

                    </div>
                </form><!-- Vertical Form -->

        </div>
        </div>

        @endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


    <script>
        $(function () {
            $('.textarea').summernote()
        })
    </script>
@endsection




