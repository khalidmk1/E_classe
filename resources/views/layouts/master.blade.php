<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('public/header.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/Main_banner.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/about_section.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/about_us.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/contact_us.css')}}">

    <title>E_CLASSE</title>
  </head>
  <body>

    @include("landing_page.navbar")
    @include('landing_page.main_baner')
    @include('landing_page.about_section')
    @include('landing_page.about_us')
    @include('landing_page.chose_section')
    @include('landing_page.our_student')
    @include('landing_page.contact_us')


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="{{URL::asset('js/custom.js')}}"></script>
    <script src="{{URL::asset('js/main_banner.js')}}"></script>


  </body>
</html>
