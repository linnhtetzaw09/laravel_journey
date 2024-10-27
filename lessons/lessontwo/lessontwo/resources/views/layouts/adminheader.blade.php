<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <!-- Fav icon -->
    <link rel="icon" href="{{ asset('assets/img/fav/favicon.png') }}" type="image/png" sizes="16x16">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}"/>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/jquery-ui-1.13.2/jquery-ui.min.css') }}">

    <!-- Lightbox2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/lightbox2-2.11.4/dist/css/lightbox.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/style.css') }}" type="text/css">

    <!-- extra css -->

    @yield('css')

</head>
<body class="">