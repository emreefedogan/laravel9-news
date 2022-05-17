@extends('layouts.adminwindow')

@section('title', 'Image List Panel')


@section('content')





    <main id="main" class="main">

        <div class="card">
            <div class="card-body">



                <h5 class="card-title">{{$news->title}}</h5>
<hr>
                <!-- Vertical Form -->
                <form class="row g-3" action="{{route('admin.image.store',['nid'=>$news->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf





                    <div class="col-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>




                    <div class="col-12">
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" name="image">
                            <input type="submit" value="Upload" class="btn btn-light" name="image">
                        </div>
                    </div>





                </form><!-- Vertical Form -->







                <h5 class="card-title">News Image List</h5>

                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>

                        <th scope="col">Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $rs)
                    <tr>
                        <th scope="row">{{$rs->id}}</th>
                        <td>{{$rs->title}}</td>

                        <td>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" style="height: 50px">

                            @endif

                        </td>

                        <td><a href="{{route('admin.image.destroy',['nid'=>$news->id,'id'=>$rs->id])}}" class="btn btn-danger"
                               onclick="return confirm('Deleting Are You Sure ?')"> Delete </a></td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>



            </div>
        </div>
    </main><!-- End #main -->
@endsection
