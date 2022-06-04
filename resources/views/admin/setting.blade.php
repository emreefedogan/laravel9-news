@extends('layouts.adminbase')

@section('title', 'Settings')
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
            <h1>Settings</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

<form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
    @csrf
        <section class="section">

            <div class="row">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bordered Tabs</h5>

                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="false">General</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">SMTP E-Mail</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="true">Social Media</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-list" type="button" role="tab" aria-controls="contact" aria-selected="true">About Us</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-list2" type="button" role="tab" aria-controls="contact" aria-selected="true">Contact Page</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-list3" type="button" role="tab" aria-controls="contact" aria-selected="true">References</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="borderedTabContent">
                            <div class="tab-pane fade active show" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                                <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
                                <div class="col-12">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                </div>
                                <div class="col-12">
                                    <label for="keywords" class="form-label">Keywords</label>
                                    <input type="text" class="form-control" name="keyword" value="{{$data->keyword}}">
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                </div>
                                <div class="col-12">
                                    <label for="company" class="form-label">Company</label>
                                    <input type="text" class="form-control" name="company" value="{{$data->company}}">
                                </div>
                                <div class="col-12">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" value="{{$data->address}}">
                                </div>
                                <div class="col-12">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">E-Mail</label>
                                    <input type="email" class="form-control" name="email" value="{{$data->email}}">
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

                                <div class="col-12">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Choose ICON </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="icon" value="">
                                    </div>
                                </div>



                            </div>
                            <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">

                                <div class="col-12">
                                    <label for="title" class="form-label">SMTP Server</label>
                                    <input type="text" class="form-control" name="smtpserver" value="{{$data->smtpserver}}">
                                </div>
                                <div class="col-12">
                                    <label for="title" class="form-label">SMTP E-Mail</label>
                                    <input type="email" class="form-control" name="smtpemail" value="{{$data->smtpemail}}">
                                </div>
                                <div class="col-12">
                                    <label for="title" class="form-label">SMTP Password</label>
                                    <input type="password" class="form-control" name="smtppassword" value="{{$data->smtppassword}}">
                                </div>
                                <div class="col-12">
                                    <label for="title" class="form-label">SMTP Port</label>
                                    <input type="text" class="form-control" name="smtpport" value="{{$data->smtpport}}">
                                </div>
                            </div>

                            <div class="tab-pane fade " id="bordered-contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="col-12">
                                    <label for="title" class="form-label">Fax</label>
                                    <input type="text" class="form-control" name="fax" value="{{$data->fax}}">
                                </div>
                                <div class="col-12">
                                    <label for="title" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}">
                                </div>
                                <div class="col-12">
                                    <label for="title" class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}">
                                </div>
                                <div class="col-12">
                                    <label for="title" class="form-label">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}">
                                </div>
                                <div class="col-12">
                                    <label for="title" class="form-label">Youtube</label>
                                    <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bordered-list" role="tabpanel" aria-labelledby="home-tab">
                                <div class="col-12">
                                    <label for="title" class="form-label">About Us</label>
                                    <textarea type="text"  id="aboutus" class="form-control" name="aboutus" >
                                        {{$data->aboutus}}
                                    </textarea>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="bordered-list2" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="col-12">
                                    <label for="title" class="form-label">Contact</label>
                                    <textarea type="text"  id="contact"  class="form-control" name="contact" >
                                        {{$data->contact}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="bordered-list3" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="col-12">
                                    <label for="title" class="form-label">References</label>
                                    <textarea type="text" id="references" class="form-control" name="references" >
                                        {{$data->references}}
                                    </textarea>
                                </div>

                            </div>


                        </div><!-- End Bordered Tabs -->


                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Settings</button>

                    </div>

                </div>


            </div>
        </section>
</form>
    </main><!-- End #main -->

@endsection

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


    <script>
        $(function () {
            $('#aboutus').summernote();
            $('#contact').summernote();
            $('#references').summernote();
        })
    </script>
@endsection
