@extends('welcome')
@section('content')
    {!! Form::model($keyword, ['url' => route('settings_keywords_update', $keyword->id), 'method' => 'post']) !!}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name') !!}
    {!! Form::submit('Submit') !!}
    {!! Form::close() !!}
@stop