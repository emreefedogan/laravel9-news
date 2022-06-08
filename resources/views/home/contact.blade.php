@extends('layouts.home')


@section('title', 'Contact | ' .   $setting->title)
@section('description', $setting->description)
@section('keyword', $setting->keyword)
@section('icon', Storage::url($setting->icon))



@section('content')

<!-- Main News Start-->
<div class="main-news" style="text-align: center">







                    <!-- Contact Start -->
                    <div class="contact">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="contact-form">

                                        @include('home.messages')
                                        <form action="{{route("storemessage")}}" method="post">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" name="name" placeholder="Name & Surname" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="email" class="form-control" name="email" placeholder="Your Email" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="phone" placeholder="Phone Number" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" placeholder="Subject" />
                                            </div>

                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                                            </div>
                                            <div><button class="btn" type="submit">Send Message</button></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="contact-info">
                                        <h3>Contact Information</h3>
                                        <p>
                                    {!! $setting->contact !!}
                                        </p>

                                        <div class="social">
                                            <a href=""><i class="fab fa-twitter"></i></a>
                                            <a href=""><i class="fab fa-facebook-f"></i></a>
                                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                                            <a href=""><i class="fab fa-instagram"></i></a>
                                            <a href=""><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>





<!-- Contact End -->


@endsection
