<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TandC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
        </style>
        @yield('styles')
    </head>
    <body>
        <div class="container">
            <header>
                <nav>
                    <a href="#" class="header-li"><li>Home</li></a>
                    <a href="#" class="header-li"><li>Terminology</li></a>
                    <a href="{{ route('articles_index') }}" class="header-li"><li>Articles</li></a>
                    <a href="{{ route('videos_index') }}" class="header-li"><li>Videos</li></a>
                    <a href="#" class="header-li"><li>About</li></a>
                </nav>
            </header>
        </div>

        <div class="container">
            @yield('content')
        </div>
        <div class="container">
            <div class="footer">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Contact
                </button>
            </div>
        </div>

        @include('sections.contact.contact_modal')

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
