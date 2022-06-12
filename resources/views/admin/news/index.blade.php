@extends('layouts.adminbase')

@section('title', 'Category List Panel')


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>News List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">News List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <a href="{{route('admin.news.create')}}" class="btn btn-dark"> +  Add News </a>

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
                        <th scope="col">Image Gallery</th>
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

                        <td> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                        <td>{{$rs->title}}</td>

                        <td>{{$rs->description}}</td>
                        <td>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" style="height: 50px">

                            @endif

                        </td>
                        <td>

                            <a href="{{route('admin.image.index',['nid'=>$rs->id])}}" class="btn btn-primary" onclick="return !window.open(this.href, ' ', 'toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=100,width=1100,height=700')">
                            <img src="{{asset("assets")}}/img/gallery.png" height="40px">
                            </a>
                        </td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin.news.edit',['id'=>$rs->id])}}" class="btn btn-primary"> Edit </a></td>
                        <td><a href="{{route('admin.news.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
                               onclick="return confirm('Deleting Are You Sure ?')"> Delete </a></td>
                        <td><a href="{{route('admin.news.show',['id'=>$rs->id])}}" class="btn btn-success"> Show </a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>



            </div>
        </div>
    </main><!-- End #main -->

@endsection
