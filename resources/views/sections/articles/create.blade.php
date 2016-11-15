@extends('welcome')
@section('content')
    {!! Form::open(['url' => route('articles_store'), 'method' => 'post', 'files' => true]) !!}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', '') !!}
    {!! Form::label('author', 'Author') !!}
    {!! Form::text('author', '') !!}
    {!! Form::textArea('body', '') !!}
    {!! Form::label('description', 'Description') !!}
    {!! Form::text('description', '') !!}
    {!! Form::multiSelect($keywords, 'keywords', null, 'test') !!}
    {!! Form::file('images[]', ['multiple' => 'multiple']) !!}
    {!! Form::file('cover_image') !!}
    {!! Form::submit('Submit') !!}
@stop