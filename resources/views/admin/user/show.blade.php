@extends('layouts.adminwindow')

@section('title', 'User Detail :  ',$data->title)


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

        <a href="{{route('admin.message.destroy',['id'=>$data->id])}}" class="btn btn-danger"> Delete User </a>


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Users Detail Data</h5>

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
                        <th scope="row">Roles :</th>
                        <td>
                            @foreach($data->roles as $role)
                                {{$role->name}}

                                <a href="{{route('admin.user.destroyrole',['uid'=>$data->id, 'rid'=>$role->id])}}" class="btn btn-danger"
                                   onclick="return confirm('Deleting Are You Sure ?')"> [x] </a>

                            @endforeach
                        </td>

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
                        <th scope="row">Add Role to User :</th>
                        <td>
                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                      <select name="role_id">
                          @foreach($roles as $role)
                              <option value="{{$role->id}}">{{$role->name}}</option>
                          @endforeach
                      </select>

                            <button type="submit"  class="btn btn-success" >  Add Role </button>


                        </form>
                        </td>
                    </tr>


                    </tbody>
                </table>


        </div>
        </div>
    </main><!-- End #main -->


@endsection
