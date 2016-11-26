<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TandC</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/content_box_component.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/sidebar.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
        <link rel="stylesheet" href="/css/bulma.css">

        <link rel="stylesheet" href="{{ asset('/css/hamburger.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/starting.css') }}">

        <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
        <script src="{{asset('/js/header.js')}}"></script>
        {{-- <script src="https://cdnjs.com/libraries/bulma"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
        <!-- Styles -->

        @yield('styles')
    </head>
    <body>
        
        @include('partials.sidebar')

        
        <header>
            <div class="container">

                <nav>
                    <a href="{{ route('articles_index') }}" class="header-li">Articles</a>                    
                    <a href="{{ route('videos_index') }}" class="header-li">Videos</a>
                    <a href="{{ url('/') }}"><h1 id="logo">TandC</h1></a>
                    <a href="{{ url('resources') }}" class="header-li">Resources</a>
                    <a href="{{ url('about') }}" class="header-li">Who</a>
                    @if(isset(Auth::user()->role) && Auth::user()->role === 'admin')
                        <a href="#" class="header-li">Dashboard</a>
                    @endif
                </nav>                
                
                
                <div id="nav-icon1" class="openSidebar">
                    <span class="hamburger--line"></span>
                    <span class="hamburger--line"></span>
                    <span class="hamburger--line"></span>
                </div>
            

            </div>

        </header>
        
        <main>
            <section class="content">
                @yield('content')
            </section>
        </main>


        @include('partials.footer')
        <script>
//            $(document).ready(function(){
//                $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
//                    $(this).toggleClass('open');
//                });
//            });
        </script>

    @yield('scripts')
    </body>
</html>
