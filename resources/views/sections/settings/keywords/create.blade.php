@extends('welcome')
@section('content')
    {!! Form::open(['url' => route('settings_keywords_store'), 'method' => 'post' ]) !!}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name') !!}
    {!! Form::submit('Submit') !!}
    {!! Form::close() !!}
@stop
