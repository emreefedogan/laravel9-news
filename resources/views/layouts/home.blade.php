<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title> News Title - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keyword')">
    <meta name="author" content="Emre Dogan">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="@yield('icon')">
    <link href="{{asset("assets")}}/img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset("assets")}}/lib/slick/slick.css" rel="stylesheet">
    <link href="{{asset("assets")}}/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset("assets")}}/css/style.css" rel="stylesheet">
    @section ('head')

    @show
 </head>
<body>
@include("home.header")


@section('slider')
    @show


    @yield('content')


@include("home.footer")
@section('footer')

@show
</body>
</html>
