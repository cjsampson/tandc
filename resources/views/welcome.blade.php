<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TandC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/font-awesome/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            a {
                text-decoration: none;
            }
            li {
                list-style-type: none;
            }
            nav {
                display: flex;
                justify-content: space-around;
                /*align-items: flex-end;*/
            }
            .header-li {
                font-size: 2em;
            }
            header { 
                background-color: orange; 
                height: 200px;
            }
            main {
                display: flex;
            }
            main .left--aside {
                flex: 0 0 300px;
                background: lightblue;
            }
            main section.content {
                flex: 3 3 auto;
                background: yellow;
            }
            main .right--aside {
                flex: 0 0 150px;
                background: tomato;
            }
        </style>
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

                <aside class="right--aside">
                    <p>stuff</p>
                </aside>

            </main>

    
    </div> {{-- .wrapper --}}

        <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    @yield('scripts')

    </body>
</html>
