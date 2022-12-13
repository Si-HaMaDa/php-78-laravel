@extends('admin.layouts.main')

@section('title', 'Show Post!')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Show Post</h1>
        <a class="btn btn-warning" href="{{ route('admin.posts.index') }}">
            < back</a>
    </div>
    <div class="container card my-3 p-3">
        <div class="my-3">
            <label>Name:</label>
            <p>{{ $post->title }}</p>
        </div>
        <div class="my-3">
            <label>Content:</label>
            <p>{{ $post->content }}</p>
        </div>
        <div class="my-3">
            <label>User ID:</label>
            <p>{{ $post->user_id }}</p>
        </div>
        <div class="my-3">
            <label>Category ID:</label>
            <p>{{ $post->cat_id }}</p>
        </div>
        <div class="my-3">
            <label>Created At:</label>
            <p>{{ $post->created_at }}</p>
        </div>
        <div class="my-3">
            <label>Updated At:</label>
            <p>{{ $post->updated_at }}</p>
        </div>
    </div>

@endsection
