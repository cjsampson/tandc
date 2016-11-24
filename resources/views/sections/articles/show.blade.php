@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/highlightjs/styles/tomorrow.css')}}">
    <script src="{{asset('assets/js/highlightjs/highlight.pack.min.js')}}"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <link rel="stylesheet" href="/css/article_show.css">
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro" rel="stylesheet">
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
@stop


@section('content')

    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-three-quarters">
                <p class="notification is-info">
                    <code class="html">is-three-quarters</code>
                </p>
            </div>
            <div class="column">
                <p class="notification is-warning">Auto</p>
            </div>
            <div class="column">
                <p class="notification is-danger">Auto</p>
            </div>
        </div>
    </div>
    

@stop

