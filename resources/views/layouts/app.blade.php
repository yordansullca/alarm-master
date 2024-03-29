<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/unauth.ico') }}">
        @if (Auth::guest())
            <link rel="shortcut icon" href="{{ asset('img/lock.ico') }}">
        @else
            <link rel="shortcut icon" href="{{ asset('img/auth.ico') }}">
            <link href="css/noty.css" rel="stylesheet">
        @endif
    <script src="{{ asset('js/favicon.js') }}"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Alarm System</title>
        @if (Auth::guest())
            
        @else
           <link rel="stylesheet" href="css/menu.css">
           <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        @endif
    <!-- Styles -->
      <link rel='stylesheet prefetch' href="{{ asset('css/font-awesome.min.css') }}">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style-modal.css') }}" rel="stylesheet">



</head>
<body>
    <div id="app">

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        Alarm System - Sistema de seguridad
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                    <form action="/logout">
                                        <p style="text-align: center"><button class="btn btn-primary">Salir</button>
                                    </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @if (Auth::guest())
        @yield('content')
        @else
        @yield('contentusers')
        @endif
    </div>
        @if (Auth::guest())
        @else
        <script src='js/snap.svg-min.js'></script>
        <script src='js/jquery-3.2.1.min.js'></script>
        <script src='js/angular.min.js'></script>
        <script src="js/howler.js"></script>
        <script src="js/noty.js" type="text/javascript"></script>
        <script src="js/noty_project.js" type="text/javascript"></script>
        <script src="js/menu.js"></script>
        @endif
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </div>
</body>
</html>