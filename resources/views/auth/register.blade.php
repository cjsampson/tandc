@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}">
@stop

@section('content')

    <div class="register--wrapper">

        <h1>Register with TandC</h1>
        <div class="form--question--box--container">

            <form id="register--form" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}


                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                       autofocus placeholder="Name">



                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">



                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">



                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">

                <button type="submit" class="register--form--button">
                    Register
                </button>
                <h2><a href="/login">Already have a account?</a></h2>
            </form>

        </div> {{-- .form--question--box--container --}}

    </div>

@stop
