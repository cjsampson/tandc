@extends('welcome')
@section('content')
    {!! Form::open(['url' => route('articles_store'), 'method' => 'post']) !!}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', '') !!}
    {!! Form::textArea('body', '') !!}
    {!! Form::multiSelect($keywords, 'keywords', null, 'test') !!}
    {!! Form::submit('Submit') !!}
@stop