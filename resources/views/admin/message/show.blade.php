@extends('layouts.adminwindow')

@section('title', 'Show Messages :  ',$data->title)


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

        <a href="{{route('admin.message.destroy',['id'=>$data->id])}}" class="btn btn-danger"> Delete Message </a>


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Messages Detail Data</h5>

                <table class="table">
                    <tbody>
                    <tr class="table-dark">
                        <th scope="row" style="width: 150px">Id :</th>
                        <td>{{$data->id}}</td>

                    </tr>

                    <tr class="table-dark">
                        <th scope="row">Name & Surname :</th>
                        <td>{{$data->name}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">E-Mail :</th>
                        <td>{{$data->email}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Phone :</th>
                        <td>{{$data->phone}}</td>

                    </tr>

                    <tr class="table-dark">
                        <th scope="row">Subject :</th>
                        <td>{{$data->subject}}</td>

                    </tr>

                    <tr class="table-dark">
                        <th scope="row">Message :</th>
                        <td>{{$data->message}} </td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Ip :</th>
                        <td>{{$data->ip}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Status:</th>
                        <td>{{$data->status}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Created Date :</th>
                        <td>{{$data->created_at}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Update Date :</th>
                        <td>{{$data->updated_at}}</td>

                    </tr>

                    <tr class="table-dark">
                        <th scope="row">Admin Note :</th>
                        <td>
                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{route('admin.message.update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <textarea class="textarea"  id="note" name="note">
                            {{$data->note}}
                        </textarea>

                            <button type="submit"  class="btn btn-success" >  Update Data </button>


                        </form>
                        </td>
                    </tr>


                    </tbody>
                </table>


        </div>
        </div>
    </main><!-- End #main -->


@endsection
