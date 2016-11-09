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
        <link rel="stylesheet" href="/css/footer.css">
        <!-- Styles -->

        @yield('styles')
    </head>
    <body>

    

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
                <div class="footer__wrapper">
                    <div class="footer__mission-statement">
                        <p>We're just two coders looking to add to the community one "ah-ha" at a time!</p>
                        <p class="">TandC 2016</p>
                    </div>                    
                    
                    <div class="footer__nav__box">
                        <h4 class="footer__box__header">Site Navigation</h4>
                        <ul>
                            <li class="footer__box__li"><a href="#">Articles</a></li>
                            <li class="footer__box__li"><a href="#">Videos</a></li>
                            <li class="footer__box__li"><a href="#">Resources</a></li>                        
                            <li class="footer__box__li"><a href="#">About</a></li>
                        </ul>
                    </div>

                    <div class="footer__social__box footer__box">
                        <h4 class="footer__box__header">Follow Us</h4>
                        <ul>
                            <li class="footer__box__li"><a href="#">YouTube</a></li>                    
                            <li class="footer__box__li"><a href="#">Facebook</a></li>                        
                            <li class="footer__box__li"><a href="#">Twitter</a></li>                        
                        </ul>
                    </div>

                    <div class="footer__contact__box footer__box">
                        <h4 class="footer__box__contact">Filler</h4>
                        <ul>
                            <li class="footer__box__li"><a href="#">Contact</a></li>
                            <li class="footer__box__li"><a href="#">Subscribe</a></li>
                            <li class="footer__box__li"><a href="#">Register</a></li>                        
                            <li class="footer__box__li"><a href="#">Terms</a></li>
                        </ul>
                    </div>

                </div> {{-- .footer__wrapper --}}
            </footer>



    

    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="js/header.js"></script>
    @yield('scripts')
    </body>
</html>
