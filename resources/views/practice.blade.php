<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TandC</title>


        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="/css/content_box_component.css">
        <link rel="stylesheet" href="/css/starting.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="stylesheet" href="/css/practice.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">    
        @yield('styles')
    </head>
    <body>

        
    <div class="container is-fluid">
      <div class="notification">
        This container is <strong>centered</strong> on desktop.
      </div>
    </div>

    <section class="hero">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Hero title
          </h1>
          <h2 class="subtitle">
            Hero subtitle
          </h2>
        </div>
      </div>
    </section>

    {{-- <script src="js/header.js"></script> --}}
    
    @yield('scripts')
    </body>
</html>
