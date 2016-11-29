@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
    <link rel="stylesheet" href="/css/bulma.css">
    <link rel="stylesheet" href="/css/resources.css">
@stop

@section('content')
    

    <div class="container borderclass">
        <div id="tabs" class="columns">

            <div class="column is-9 borderclass">
                <div id="tabs-1">
                    @include('resources.partials.subscription')
                </div>

                <div id="tabs-2">
                    @include('resources.partials.youtube')
                </div>

                <div id="tabs-3">
                    @include('resources.partials.blogs')
                </div>

                <div id="tabs-4">
                    @include('resources.partials.coding-practice')
                </div>                                
            </div>

            <div class="column is-3 borderclass">
                <h1>Resources Panel</h1>
                <ul>
                    <li class="title"><a href="#tabs-1">Subscription Learning</a></li>
                    <li class="title"><a href="#tabs-2">YouTube Channels</a></li>
                    <li class="title"><a href="#tabs-3">Top Notch Blogs/Content Driven Sites</a></li>
                    <li class="title"><a href="#tabs-4">Coding Practice</a></li>
                </ul>

            </div>


        </div>
    </div>
    
@stop