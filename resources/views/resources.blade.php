@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
    <link rel="stylesheet" href="/css/bulma.css">
    <link rel="stylesheet" href="/css/resources.css">
@stop

@section('content')
    

    <div class="container is-fluid">
        <div id="tabs">

            <div class="columns">

                <div class="column is-three-quarters">
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

                <div class="column is-one-quarter">
                    
                        <ul>
                            <li><a href="#tabs-1">Subscription Learning</a></li>
                            <li><a href="#tabs-2">YouTube Channels</a></li>
                            <li><a href="#tabs-3">Top Notch Blogs/Content Driven Sites</a></li>
                            <li><a href="#tabs-4">Coding Practice</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
@stop