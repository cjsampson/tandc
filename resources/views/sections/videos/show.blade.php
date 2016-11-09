@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="/css/videos.css">
    <link rel="stylesheet" href="/css/content_box_component.css">
@stop


@section('content')

    <div class="wrapper">
        
        <h1>{{ $video->title }}</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->url }}" frameborder="0" allowfullscreen></iframe>

    </div> {{-- .wrapper --}}

@stop