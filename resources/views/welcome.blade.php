<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TandC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="/css/starting.css">
        <!-- Styles -->

        @yield('styles')
    </head>
    <body>

        <div>

            <header>
                <div class="container">
                    <h1 id="logo">TandC</h1>
                    <nav>
                        <a href="#" class="header-li">Home</a>
                        <a href="#" class="header-li">Lingo</a>
                        <a href="{{ route('articles_index') }}" class="header-li">Articles</a>
                        <a href="{{ route('videos_index') }}" class="header-li">Videos</a>
                        <a href="#" class="header-li">Who</a>
                    </nav>
                </div>
            </header>

            <main>
                <section class="content">
                    @yield('content')
                </section>
            </main>

            <footer>
                Footer content
            </footer>

    
    </div> {{-- .wrapper --}}

    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="js/header.js"></script>
    @yield('scripts')
    </body>
</html>
