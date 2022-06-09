@extends('layouts.adminwindow')

@section('title', 'Show Comments :  ',$data->title)


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

        <a href="{{route('admin.comment.destroy',['id'=>$data->id])}}" class="btn btn-danger"> Delete Comment </a>


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Comments Detail Data</h5>

                <table class="table">
                    <tbody>
                    <tr class="table-dark">
                        <th scope="row" style="width: 150px">Id :</th>
                        <td>{{$data->id}}</td>

                    </tr>

                    <tr class="table-dark">
                        <th scope="row">News Id :</th>
                        <td>{{$data->news_id}} </td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">News Name :</th>
                        <td> {{$data->news->title}} </td>

                    </tr>



                    <tr class="table-dark">
                        <th scope="row">User Id :</th>
                        <td>{{$data->user_id}} </td>

                    </tr>

                    <tr class="table-dark">
                        <th scope="row">Name & Surname :</th>
                        <td>{{$data->user->name}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Comment :</th>
                        <td>{{$data->comment}}</td>

                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Rate :</th>
                        <td>{{$data->rate}}</td>

                    </tr>

                    <tr class="table-dark">
                        <th scope="row">Ip :</th>
                        <td>{{$data->IP}}</td>

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
                        <form class="row g-3" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                      <select name="status">
                          <option selected>
                              {{$data->status}}
                          </option>
                          <option>
                              True
                          </option>
                          <option>
                              False
                          </option>
                      </select>

                            <button type="submit"  class="btn btn-success" >  Update Comment </button>


                        </form>
                        </td>
                    </tr>


                    </tbody>
                </table>


        </div>
        </div>
    </main><!-- End #main -->


@endsection
