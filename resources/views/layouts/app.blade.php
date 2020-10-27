<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/morris.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap3-wysihtml5.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Staatliches&display=swap" rel="stylesheet">

    <!-- Scripts -->
    {{-- <script src="{{ asset('{{asset('backend/js/app.js') }}" defer></script> --}}


    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
              
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                           
                            @if (Route::has('register'))
                            
                              
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>




    <script src="{{asset('backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery-ui.min.js')}}"></script>
    <script>
       $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/js/raphael.min.js')}}"></script>
    <script src="{{asset('backend/js/morris.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('backend/js/jquery.knob.min.js')}}"></script>
    <script src="{{asset('backend/js/moment.min.js')}}"></script>
    <script src="{{asset('backend/js/daterangepicker.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('backend/js/fastclick.js')}}"></script>
    <script src="{{asset('backend/js/adminlte.min.js')}}"></script>
<!-- <script src="{{asset('backend/js/dashboard.js')}}"></script> -->
    <script src="{{asset('backend/js/demo.js')}}"></script>



</body>
</html>
