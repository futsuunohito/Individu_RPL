<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/ico" href="{{asset('images/favicon.ico')}}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel-CRUD-Project') }}</title>

    <!-- Styles -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel" style="min-height: 60px;">
            <div class="container">
                <a class="navbar-brand" href="#" style="position:relative; bottom:10px ;margin:-100px">
                   <font size=10> {{ config('app.name', 'Laravel-CRUD-Project') }} </font><br>
                   <small>{{ \Illuminate\Foundation\Inspiring::quote() }}</small>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('register') }}" style="color:wheat"><span class="glyphicon glyphicon-plus"></span> {{ __('Register') }}</a></li>
                            <li><a class="nav-link" href="{{ route('login') }}" style="color:wheat"><span class="glyphicon glyphicon-log-in"></span> {{ __('Login') }}</a></li>
                            @else
                                <li>@include('layouts.partial._alert')</li>  
                                <li><a class="nav-link" href="{{ url('/home') }}" style="color:wheat"><span class="glyphicon glyphicon-list-alt"></span> Posts</a>
                                <li><a class="nav-link" href="{{ route('post.create') }}" style="color:wheat"><span class="glyphicon glyphicon-file"></span> Write Something </a></l1>
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:wheat">
                                        <span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                     
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <span class="glyphicon glyphicon-log-out"></span>  
                                       {{ __('Logout') }}
                                        
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-2">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
