@extends('layouts.adminbase')

@section('title', 'Show Category :  ',$data->title)


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{$data->title}}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">{{$data->title}}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <a href="{{route('admin.news.edit',['id'=>$data->id])}}" class="btn btn-primary"> Edit News </a>
        <a href="{{route('admin.news.destroy',['id'=>$data->id])}}" class="btn btn-danger"> Delete News </a>


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Detail Data</h5>

                <table class="table">
                    <tbody>
                    <tr class="table-dark">
                        <th scope="row" style="width: 150px">Id :</th>
                        <td>{{$data->id}}</td>

                    </tr>

                    <tr class="table-dark">
                        <th scope="row">Title :</th>
                        <td>{{$data->title}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Keywords:</th>
                        <td>{{$data->keywords}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Description:</th>
                        <td>{{$data->description}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Image :</th>
                        <td>
                            @if($data->image)
                                <img src="{{Storage::url($data->image)}}" style="height: 50px">

                            @endif

                        </td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Status :</th>
                        <td>{{$data->status}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Detail :</th>
                        <td>{{$data->detail}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Type :</th>
                        <td>{{$data->type}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Slug:</th>
                        <td>{{$data->slug}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Created Date :</th>
                        <td>{{$data->created_at}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Update Date :</th>
                        <td>{{$data->updated_at}}</td>

                    </tr>

                    </tbody>
                </table>


        </div>
        </div>
    </main><!-- End #main -->


@endsection
