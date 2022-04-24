@extends('layouts.adminbase')

@section('title', 'Add Category Panel')


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Category</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Add Category</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="card">



                <div class="card-body">
                    <h5 class="card-title"> Parent Category</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <select class="form-control select2" name="parent_id">
                        <option value="0" selected="selected"  >Main Category</option>

                        @foreach($data as $rs)
                            <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                        @endforeach
                    </select>


                 <h5 class="card-title">Category Elements</h5>


                    <div class="col-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="col-12">
                        <label for="keywords" class="form-label">Keywords</label>
                        <input type="text" class="form-control" name="keywords">
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="col-12">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Choose Image File</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" name="image">
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="col-sm-2 col-form-label">Status : </label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option >True</option>
                                <option >False</option>

                            </select>
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save</button>

                    </div>
                </form><!-- Vertical Form -->

        </div>
        </div>
    </main><!-- End #main -->


@endsection
