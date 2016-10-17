@extends('welcome')

@section('content')


<h1>Video Index</h1>

    @foreach($videos as $video)
        <div class="video-box">
            <h4>{{ $video->title}}</h4>
            <p>{{ $video->category }}</p>
            <video width="320" height="240">
                <source src="youtube.com/{{$video->url}} type="video/mp4"></source>
            </video>
        </div>
    @endforeach

@stop