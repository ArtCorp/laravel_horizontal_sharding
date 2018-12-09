@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ action('PostController@store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="postTitle">Title</label>
                <input type="text" class="form-control" id="postTitle"
                       placeholder="Post title"
                       name="title">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection