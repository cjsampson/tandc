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

        <div class="wrapper">

            <header>
                <nav>
                    <a href="#" class="header-li"><li>Home</li></a>
                    <a href="#" class="header-li"><li>Terminology</li></a>
                    <a href="{{ route('articles_index') }}" class="header-li"><li>Articles</li></a>
                    <a href="{{ route('videos_index') }}" class="header-li"><li>Videos</li></a>
                    <a href="#" class="header-li"><li>About</li></a>
                    <a href="{{ route('contact_index') }}" class="header-li">Contact</a>
                    <a href="#" class="header-li">Settings</a>
                </nav>
            </header>
    
        
            <main>
            
                <aside class="left--aside">
                    <p>Sidebar</p>    
                </aside>

                <section class="content">
                    @yield('content')
                </section>

            </main>

            <footer>
                Footer content
            </footer>

    
    </div> {{-- .wrapper --}}

    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    @yield('scripts')
    </body>
</html>
