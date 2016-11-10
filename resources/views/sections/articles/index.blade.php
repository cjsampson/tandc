@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="/css/videos.css">
    <link rel="stylesheet" href="/css/content_box_component.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
@stop


@section('content')

    <div class="wrapper">

        <div class="video--section">

            <h2 class="video--title">Article Section</h2>

            @foreach($articles as $article)

                <div class="content--box">

                    <div class="image--box">
                        <img src="{{ $article->cover_image }}"
                             alt="bear"
                             class="content--image"
                        >
                    </div>

                    <div class="description--container">
                        {{--<h2 class="cb--title">{{ $video->title }}</h2>--}}

                        {{--<p class="cb--description">{{ $video->description }}</p>--}}
                        <p class="cb--date">{{ $article->updated_at }}</p>
                        {{--<p class="cb--author">Author: <a href="#">{{ $video->author }}</a></p>--}}
                    </div>

                </div>

            @endforeach



            <div class="content--box">

                <div class="image--box">
                    <img src="https://media.licdn.com/mpr/mpr/shrinknp_800_800/AAEAAQAAAAAAAAJ9AAAAJGYxOTExNjUxLWIyYTQtNDMzYi05OGZlLTMyYjM2MWM4ZDZlYQ.png"
                         alt="lorem pixel" class="content--image">
                </div>

                <div class="description--container">
                    <h2 class="cb--title">PHP Basics</h2>
                    <p class="cb--description">Learn how to do the basics in PHP for the first part of this video series.</p>
                    <p class="cb--date">Date: 10-03-2016</p>
                    <p class="cb--author">Author: <a href="#">CJ Sampson</a></p>
                </div>

            </div>

        </div> {{-- .video--section --}}

        <aside class="sidebar">
            <div class="box box1">
                <h3>Some text for a box</h3>
            </div>

            <div class="box box2">
                <h3>Some text for a box</h3>
            </div>

            <div class="box box3">
                <h3>Some text for a box</h3>
            </div>

        </aside>

        <pre><code class="lang-js">
for (var i = 0; i < array.length; i++) {
var obj = array[i];

}
if(hello){
    console.log(true);
}

            </code></pre>

    </div> {{-- .wrapper --}}
    <script>

    </script>
@stop
