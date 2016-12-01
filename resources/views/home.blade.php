@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/unslider.css') }}">
@stop
@section('content')
    <div class="container">

        @foreach($articlesVideos as $key => $article)

            @if (($key + 1) % 3 === 1)
                <div class="columns">
                    @endif
                    <div class="column is-4 testMargin">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <a href="{{ $article->type === 'article' ? route('articles_show', $article->slug) : route('video_show', $article->slug) }}">
                                        <img src="/images/article_cover_images/{{ $article->cover_image }}" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image is-32x32">
                                            <img src="http://placehold.it/64x64" alt="Image">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-5">{{ $article->author }}</p>
                                        <p class="subtitle is-6">@johnsmith</p>
                                    </div>
                                </div>

                                <div class="content">
                                    <p>{{ $article->description }}</p>
                                    <br>
                                    <small>{{ $article->created_at }}</small>
                                </div>
                            </div>
                        </div>

                    </div>
                    @if (($key + 1) % 3 === 0)

                </div>
            @endif
        @endforeach
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/unslider-min.js') }}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('.my-slider').unslider({
                autoplay: true,
                infinite: true,
                delay: 5000,
            });
        });
    </script>
@stop
