@extends('welcome')
@section('content')
    {!! Form::open(['url' => route('video_store'), 'method' => 'post', 'files' => true]) !!}
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', '') !!}
    {!! Form::label('author', 'Author') !!}
    {!! Form::text('author', '') !!}
    {!! Form::textArea('description', '') !!}
    {!! Form::label('url', 'Youtube Url') !!}
    {!! Form::text('url', '') !!}
    {!! Form::multiSelect($keywords, 'keywords') !!}
    {!! Form::file('cover_image') !!}
    {!! Form::submit('Submit') !!}
@stop
