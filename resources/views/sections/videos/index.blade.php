@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="/css/videos.css">
    <link rel="stylesheet" href="/css/content_box_component.css">
@stop


@section('content')

    <div class="wrapper">
        
        <div class="video--section">        
            <h2 class="video--title">Video Section</h2>
                @foreach($videos as $video)

                    <div class="content--box">

                        <div class="image--box">
                            <img src="{{ $video->cover_image }}" 
                                 alt="bear"
                                 class="content--image"
                            >
                        </div>
                
                        <div class="description--container">
                            <a href="{{ route('video_show', ['id' => $video->id] ) }}"><h2 class="cb--title">{{ $video->title }}</h2></a>
                            <p class="cb--description">{{ $video->description }}</p>
                            <p class="cb--date">{{ $video->updated_at }}</p>
                            <p class="cb--author">Author: <a href="#">{{ $video->author }}</a></p>
                        </div>

                    </div>

                @endforeach

        </div> {{-- .video--section --}}

        <aside class="sidebar">            

        </aside>

    </div> {{-- .wrapper --}}

@stop