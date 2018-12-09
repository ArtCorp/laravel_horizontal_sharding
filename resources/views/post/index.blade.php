@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ action('PostController@create') }}" class="btn btn-primary mb-3">Add post</a>
        <div>
            <h2>Specific User Posts Table 1</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User email</th>
                    <th scope="col">Post title</th>
                </tr>
                </thead>
                <tbody>
                @isset($userPostsFirstDatabase)
                    @foreach($userPostsFirstDatabase as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->user->email }}</td>
                            <td>{{ $post->title }}</td>
                        </tr>
                    @endforeach
                @endisset

                </tbody>
            </table>
        </div>
        <div>
            <h2>Specific User Posts Table 2</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User email</th>
                    <th scope="col">Post title</th>
                </tr>
                </thead>
                <tbody>
                @isset($userPostsSecondDatabase)
                    @foreach($userPostsSecondDatabase as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->user->email }}</td>
                            <td>{{ $post->title }}</td>
                        </tr>
                    @endforeach
                @endisset

                </tbody>
            </table>
        </div>

    </div>

@endsection