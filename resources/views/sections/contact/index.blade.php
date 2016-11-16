@extends('welcome')

@section('styles')
<link rel="stylesheet" href="/css/contact.css">
@stop

@section('content')
    
    <div class="contact--wrapper">

        <h1>Get in Touch!</h1>

        <div class="form--question--box--container">

            <form action="{{ route('contact_store') }}" method="post" id="contact--form">

                {{ csrf_field() }}

                
                <input type="text" name="name" id="name" placeholder="Your Name:">
                
                
                <input type="text" name="email" id="email" placeholder="Your Email:">

                
                <select name="reason" id="reason">
                    <option value="select" disabled selected>Select Reason</option>
                    <option value="feedback">Feedback</option>
                    <option value="hire">Hire</option>
                    <option value="hello">Just Saying Hello :)</option>
                    <option value="ski">Ski with us!</option>
                </select>
                
                
                <textarea name="message" id="" cols="30" rows="10" placeholder="Let us know what you're thinking!"></textarea>

                <button type="submit" class="contact--form--button">Send</button>

            </form>

            <div class="contact--question--box">
                <p>We highly appreciate any feedback!</p>
                <p>Need some work done?</p>
                <p>Just drop a line to say Hello!</p>
            </div>

        </div> {{-- .form--question--box--container --}}

    </div>
    
@stop