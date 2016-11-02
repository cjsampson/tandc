@extends('welcome')

@section('content')

    {!! Form::open(['url' => 'somewherethatneedstobechanged', 'id' => 'video--upload--form']) !!}

        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', 'Video Title Here') !!}

        {!! Form::label('category', 'Category') !!}
        {!! Form::select('category', ['javascript' => 'JavaScript', 'php' => 'PHP']) !!}

        {!! Form::label('category', 'Category') !!}
        {!! Form::select('category', ['javascript' => 'JavaScript', 'php' => 'PHP']) !!}

        {!! Form::label('url', 'Url') !!}
        {!! Form::text('url', 'Enter a url') !!}

        {!! Form::submit('Submit Video') !!}

    {!! Form::close() !!}

@stop