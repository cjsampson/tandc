@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/highlightjs/styles/solarized_light.css')}}">
    <script src="{{asset('assets/js/highlightjs/highlight.pack.min.js')}}"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" href="/css/article_show.css">
@stop


@section('content')

    <div class="wrapper">

        {!! $article->body !!}

        <aside class="sidebar">
            <div class="sidebar--box">Box 1</div>
            <div class="sidebar--box">Box 2</div>
            <div class="sidebar--box">Box 3</div>
        </aside>

    </div> {{-- .wrapper --}}

@stop

