@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="/css/starting.css">
    <link rel="stylesheet" href="/css/videos_show.css">
@stop


@section('content')

    <div class="wrapper">
        
        <h1>{{ $video->title }}</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->url }}" frameborder="0" allowfullscreen></iframe>

        <p>This is a holder for the description of the video.  Short description or images will go here in this spot. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam commodi aut accusamus aliquid fuga, voluptas vitae laboriosam quisquam fugit quam praesentium doloribus, ex obcaecati beatae consequatur, qui tempora nemo. Esse! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta nostrum cumque quas minus, atque, reprehenderit doloribus ducimus vero, explicabo reiciendis molestiae animi ab unde. Dolorum, cumque, aut. Rem, impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, modi, amet obcaecati corporis adipisci aliquid quo tempore expedita, fugiat sit odit eligendi placeat voluptatem accusantium mollitia neque. Rerum, error! Iusto!</p>

    </div> {{-- .wrapper --}}

@stop