@extends('welcome')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
<link rel="stylesheet" href="/css/video-dashboard.css">
@stop

@section('content')

    <div class="container-fluid" style="max-width: 768px;">

        <h1>Video CREATE</h1>

        <form action="{{url('videos/store')}}" method="POST" id="video--crud--form">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="tite" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>

            <div class="form-group">
                <label for="cover_image">Cover Image</label>
                <input type="text" name="cover_image" id="cover_image" class="form-control">
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control">
            </div>

            <div class="form-group">
                <select name="category" id="category">
                    <option value="php">PHP</option>
                    <option value="JavaScript">JavaScript</option>
                </select>            
            </div>

            <div class="form-group">
                <select name="keywords" id="keywords">
                    <option value="PHP">PHP</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Beginner">Beginner</option>
                </select>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="tite" id="name" class="form-control">
            </div>                                        

            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" name="url" id="url" class="form-control">
            </div>        

            <div class="btn-group">
                <input type="submit" value="GO">
            </div>
            
        </form>

    </div> {{-- .container-fluid --}}

@stop