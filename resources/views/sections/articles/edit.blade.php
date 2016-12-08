@extends('welcome')

@section('content')
    {!! Form::model($article, ['url' => route('articles_update', $article->id), 'method' => 'post', 'files' => true]) !!}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name') !!}
    {!! Form::label('author', 'Author') !!}
    {!! Form::text('author') !!}
    {!! Form::textArea('body') !!}
    {!! Form::label('description', 'Description') !!}
    {!! Form::text('description') !!}
    {!! Form::multiSelect($keywords, 'keywords', null, 'test', $article->keywords) !!}
    {!! Form::submit('Submit') !!}
    {!! Form::close() !!}
@stop
