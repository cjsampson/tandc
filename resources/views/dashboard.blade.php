@extends('welcome')


@section('content')


<h1>Dashboard</h1>

<a href="{{ url('dashboard/keywords') }}">Articles CRUD</a>
<a href="{{ url('dashboard/articles') }}">Articles CRUD</a>
<a href="{{ url('dashboard/videos') }}">Video CRUD</a>

@stop