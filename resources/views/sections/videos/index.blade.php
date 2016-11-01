@extends('welcome')

@section('styles')

<style>

    .video-grid {
        
    }
    .video-box { 
        border: 1px solid black;
        margin-bottom: 20px;
        max-width: 300px;
        min-height: 400px;
    }
</style>

@stop


@section('content')

<div class="video-grid">
    <h1>Video Index</h1>

    @foreach($videos as $video)
        <div class="video-box">
            <h4>{{ $video->title}}</h4>
            <p>{{ $video->category }}</p>
            <div class="im-a-video-box">
                Video goes here
            </div>
            <iframe 
                title="youtube video player" src="https://www.youtube.com/embed/{{ $video->url }}" frameborder="0" allowfullscreen>
            </iframe>
            
        </div>
    @endforeach
</div>


@stop