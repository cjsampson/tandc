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
        <link rel="stylesheet" href="/css/content_box_component.css">
        <link rel="stylesheet" href="/css/starting.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="stylesheet" href="/css/practice.css">
        <!-- Styles -->

        @yield('styles')
    </head>
    <body>

        <header>
            <div class="container">
                <a href="{{ url('/') }}"><h1 id="logo">TandC</h1></a>
                <nav>
                    <a href="{{ route('articles_index') }}" class="header-li">Articles</a>
                    <a href="{{ route('videos_index') }}" class="header-li">Videos</a>
                    <a href="#" class="header-li">Resources</a>
                    <a href="#" class="header-li">Who</a>
                </nav>
            </div>
            <div class="border"></div>    
        </header>
        
        <main>
            <section class="content">
                @yield('content')
            </section>
        </main>


        @include('partials.footer')            

    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="js/header.js"></script>
    @yield('scripts')
    </body>
</html>
