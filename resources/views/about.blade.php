@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/unslider/css/unslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/unslider/css/unslider-dots.css') }}">
    <link rel="stylesheet" href="/css/about.css">
@stop

@section('content')

    <div class="container">
        
        <div class="columns borderclass">
            <div class="column">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi minima, laudantium eaque molestiae pariatur commodi, eum nulla iure et ab natus earum voluptates porro. Animi inventore cupiditate quisquam facilis modi.
            </div>

            <div class="column is-half height">            
                <figure class="image2">
                    <img src="/images/cjtomas/tomasthumbnail.png">
                </figure>            
            </div>
        </div>

        <div class="columns borderclass">
            <div class="column is-flex is-half is-mobile tomas">            
                <figure class="image2">
                    <img src="/images/cjtomas/cjthumbnail.png">
                </figure>
            </div>

            <div class="column is-half is-mobile">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi minima, laudantium eaque molestiae pariatur commodi, eum nulla iure et ab natus earum voluptates porro. Animi inventore cupiditate quisquam facilis modi.
            </div>

        </div>        
        
    </div>


@stop

@section('scripts')
    <script src="{{ asset('assets/js/unslider/unslider-min.js') }}"></script>
    <script>
        $(function() { 
            $('.banner').unslider({
                animation: 'horizontal'
            });

        })
    </script>
@stop