<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Open Blog @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
<!--Override bootstrap default css here-->
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .navbar-header{
            background-color: #e74c3c;
            padding-left: 10px;
        }
        .panel-default .panel-heading{
            background-color: #2c3e50;
            color:white;
        }
        .navbar-default .navbar-brand{
            color:#2c3e50;
        }
        .navbar{
            background-color: #2c3e50;
        }
        .navbar-default .navbar-nav li a,.navbar-default .navbar-nav .open .dropdown-menu li a{
            color:#e74c3c;
        }
        .navbar-default .navbar-nav li a:hover{
            color:white;
        }
        .navbar-default .navbar-nav .open .dropdown-menu li a:hover{
            color:white;
        }
        .jumbotron{
            background-color: #1ab7ea;
        }
        .btn btn-danger{
            background-color: #e74c3c;
        }
        .jumbotron p{
            color:white;
        }
        .jumbotron a{
            color:#e74c3c;
        }
        .progress-bar-success{
            background-color:#2c3e50;
        }
        .footer{
            position:fixed;
            padding: .7%;
            margin-top:40px;
            bottom: 0;
            width: 100%;
            height: 40px;
            background-color: #e74c3c;
        }
        #browsers,.footer p{
            color:white;
        }
        #browsers:hover{
            color:#2c3e50;
        }
    </style>
</head>
