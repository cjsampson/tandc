<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, user-scalable=no" />


        <title>TandC</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
        <link rel="stylesheet" href="/css/bulma.css">

        <link rel="stylesheet" href="{{ asset('/css/starting.css') }}">
        
        <link rel="stylesheet" href="{{ asset('/css/content_box_component.css') }}">
        
        <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
        
        <link rel="stylesheet" href="{{ asset('/css/sidebar.css') }}">

        <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
        
        <link rel="stylesheet" href="{{ asset('/css/hamburger.css') }}">

    
        <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
        <script src="{{asset('/js/header.js')}}"></script>
        @yield('styles')
    </head>
    <body>
    
        @include('partials.sidebar')
            
                <div id="nav-icon1" class="openSidebar">
                    <span class="hamburger--line"></span>
                    <span class="hamburger--line"></span>
                    <span class="hamburger--line"></span>
                </div>
                
            <div class="container">


                <header class="header">

                    <div class="header--wrapper">
                        <nav>
                            
                            <a style="background-color: white" href="{{ url('/') }}">
                                <img width="300" height="100" src="{{ asset('images/logo/tandcLogo.png') }}" alt="">
                            </a>
                            <a href="{{ route('articles_index') }}" class="header-li">Articles</a>                    
                            <a href="{{ route('videos_index') }}" class="header-li">Videos</a>
                            <a href="{{ url('resources') }}" class="header-li">Resources</a>
                            <a href="{{ url('about') }}" class="header-li">Who</a>
                            @if(isset(Auth::user()->role) && Auth::user()->role === 'admin')
                                <a href="#" class="header-li">Dashboard</a>
                            @endif
                        </nav>
                        
                    </div>

                </header>   


                <main class="section">
                    @yield('content')
                </main>
            </div>

        @include('partials.footer')

    @yield('scripts')

    </body>
</html>
