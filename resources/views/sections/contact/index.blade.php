@extends('welcome')

@section('content')
    <form action="{{ route('contact_store') }}" method="post">
        {{ csrf_field() }}
        <label for="name">
            Name
            <input type="text" name="name">
        </label>
        <label for="email">
            Email
            <input type="text" name="email">
        </label>
        <label for="message">
            Message
            <textarea name="message" id="" cols="30" rows="10"></textarea>
        </label>
        <button type="submit"> Send </button>

    </form>
@stop