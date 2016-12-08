@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
@stop

@section('content')

    <div class="register--wrapper">

        <h1>Log into TandC</h1>
        <div class="form--question--box--container">

            <form id="register--form" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                       placeholder="Email">

                <input id="password" type="password" class="form-control" name="password" required
                       placeholder="Password">

                <button type="submit" class="register--form--button">
                    Login
                </button>

            </form>

            {{--<h2><a href="/login">Already have a account?</a></h2>--}}
            <div class="password--checks">
                <label for="remember">Remember Me</label>
                <input type="checkbox" name="remember">

                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                    Forgot Your Password?
                </a>

            </div>
            <div class="newAccount">
                <a href="/register">Need a new account?</a>
            </div>
        </div> {{-- .form--question--box--container --}}

    </div>

@stop
