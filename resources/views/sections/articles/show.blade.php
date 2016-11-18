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

    <div class="wrapper">
        
        <div class="article--wrapper">

            <div class="article--header">
                <h2 class="article--title">How to Give a Button Tag an Href</h2>
            </div>
            
            <p class="article--paragraph">Being that button tags do not have href attributes, you can instead link an event handler to the button and add a location property like so: </p>

            <pre>
                <code class="js">
                
    document.getElementById("contact--button").onclick = function () {
      location.href = "/someURI";
    }

                </code>
            </pre>

            <pre>
                <code class="js">
                
    document.getElementById("contact--button").onclick = function () {
      location.href = "/someURI";
    }

                </code>
            </pre>

            <p class="article--paragraph">Being that button tags do not have href attributes, you can instead link an event handler to the button and add a location property like so: </p>

            <pre>
                <code class="js">
                
    document.getElementById("contact--button").onclick = function () {
      location.href = "/someURI";
    }

                </code>
            </pre>                        

            <p class="article--paragraph">Being that button tags do not have href attributes, you can instead link an event handler to the button and add a location property like so: </p>

        </div>

        <section class="sidebar">
            <p>Content</p>
        </section>

    </div>


@stop

