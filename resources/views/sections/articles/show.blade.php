@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/highlightjs/styles/solarized_light.css')}}">
    <script src="{{asset('assets/js/highlightjs/highlight.pack.min.js')}}"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" href="/css/article_show.css">
@stop


@section('content')


    <div class="article--wrapper">

        <div class="article--header">
            <h2 class="article--title">React JS for Noobs</h2>
            <img src="/images/react.png" alt="React Js">
        </div>
    </div>

@stop

