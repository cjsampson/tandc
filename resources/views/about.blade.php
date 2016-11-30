@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/unslider/css/unslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/unslider/css/unslider-dots.css') }}">
    <link rel="stylesheet" href="/css/about.css">
@stop

@section('content')


<div class="banner">
    <ul>
        <li style="background-image: url('http://unslider.com/img/sunset.jpg');">
            <h1>The jQuery slider that just slides.</h1>
            <p>No fancy effects or unnecessary markup, and it’s less than 3kb.</p>
            <a class="btn" href="#download">Download</a>
        </li>
        <li style="background-image: url('http://unslider.com/img/wood.jpg');">
            <h1>Fluid, flexible, fantastically minimal.</h1>
            <p>Use any HTML in your slides, extend with CSS. You have full control.</p>
            <a class="btn" href="#download">Download</a>
        </li>
        <li style="background-image: url('http://unslider.com/img/subway.jpg');">
            <h1>Open-source.</h1>
            <p>Everything to do with Unslider is hosted on GitHub.</p>
            <a class="btn" href="//github.com/idiot/unslider">Contribute</a>
        </li>
        <li style="background-image: url('http://unslider.com/img/shop.jpg');">
            <h1>Uh, that’s about it.</h1>
            <p>I just wanted to show you another slide.</p>
            <a class="btn" href="#download">Download</a>
        </li>
    </ul>
</div>
    



@stop

@section('scripts')
    <script src="{{ asset('assets/js/unslider/unslider-min.js') }}"></script>
    <script>
        $(function() { 
            $('.my-slider').unslider({
                animation: 'horizontal'
            });

        })
    </script>
@stop