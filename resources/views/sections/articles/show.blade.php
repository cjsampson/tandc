@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/highlightjs/styles/solarized_light.css')}}">
    <script src="{{asset('assets/js/highlightjs/highlight.pack.min.js')}}"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <link rel="stylesheet" href="/css/article_show.css">
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro" rel="stylesheet">
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
@stop


@section('content')

    <div class="container">

        <div class="columns">

            <div class="column is-9">
                {!! $article->body !!}
            </div>
        </div>

    </div>





@stop

