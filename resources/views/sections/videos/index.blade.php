@extends('welcome')

@section('styles')

<style>
    .video-box { 
        border: 1px solid black;
        margin-bottom: 20px;
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
        </div>
    @endforeach
</div>


@stop