@extends('layouts.adminbase')

@section('title', 'Add FAQ Panel')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Question</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Add Question</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="card">



                <div class="card-body">


                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{route('admin.faq.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf




                 <h5 class="card-title">FAQ Elements</h5>


                    <div class="col-12">
                        <label for="question" class="form-label">Question</label>
                        <input type="text" class="form-control" name="question">
                    </div>
                        <div class="col-12">
                            <label for="answer" class="form-label">Answer</label>
                            <textarea type="text" id="answer" class="form-control" name="answer"></textarea>

                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#answer' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
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
