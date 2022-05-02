@extends('layouts.adminbase')

@section('title', 'Edit Category :  ',$data->title)


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Category : {{$data->title}}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Edit Category :  {{$data->title}}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> Parent Category</h5>

                <!-- Vertical Form -->
                <form class="row g-3" action="{{route('admin.news.update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf

                <select class="form-control select2" name="parent_id" style="">
                    <option value="0" selected="selected" >Main Category</option>

                    @foreach($datalist as $rs)

                        <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif >
                            {{\App\Http\Controllers\AdminPanel\AdminNewsController::getParentsTree($rs,$rs->title)}}
                        </option>


                    @endforeach
                </select>

                <h5 class="card-title">Category Elements</h5>


                    <div class="col-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$data->title}}">
                    </div>
                    <div class="col-12">
                        <label for="keywords" class="form-label">Keywords</label>
                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" value="{{$data->description}}">
                    </div>
                    <div class="col-12">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Choose Image File</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" name="image" value="">
                        </div>
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
    </main><!-- End #main -->


@endsection
