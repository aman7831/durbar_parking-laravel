<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Durbar Parking</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}"></script>


</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="main">
                <div class="navbar">
                    <div class="icon">
                        <h2 class="logo">Durbar Parking</h2>
                    </div>
                
                    <div class="menu">
                        <ul>
                            <li><a href="/home">HOME</a></li>
                            <li><a href="/about">ABOUT</a></li>
                            <li><a href="/service">SERVICES</a></li>
                            <!-- <li><a href="/vehicle_details">vehicle details</a></li> -->

                            @auth
                            @if(auth()->user()->role_id ==1)
                            <li><a href="/dashboard">DASHBOARD</a></li>
                            @endif
                            @endif                         
                            
                            
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>

                            
                            @guest
                            @if (Route::has('login'))
                            <li><a href="{{ route('login') }}">LOGIN</a></li>
                            @endif
                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">REGISTER</a></li> 
                            @endif
                            @else
                            <li><a href="#">{{ Auth::user()->name }}</a></li>
                            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a></li>
        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                    </div>
                </div>   
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

   
</body>
</html>
