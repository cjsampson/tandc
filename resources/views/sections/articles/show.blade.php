@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/styles/darcula.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
@stop


@section('content')

    <div class="wrapper">
        <div>

            <p>lorem</p>
            {!! $article->body !!}
        </div>

    </div> {{-- .wrapper --}}

@stop
