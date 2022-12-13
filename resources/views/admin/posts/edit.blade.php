@extends('admin.layouts.main')

@section('title', 'Edit Posts!')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Edit Posts</h1>
        <a class="btn btn-warning" href="{{ route('admin.posts.index') }}">
            < back</a>
    </div>
    <div class="container card my-3 p-3">
        <form method="POST" action="{{ route('admin.posts.update', $post->id) }}">
            @csrf
            @method('put')
            <div class="form-floating my-3">
                <input class="form-control" id="title" name="title" type="text"
                    value="{{ old('title', $post->title) }}" placeholder="Title">
                <label for="title">title</label>
                @error('title')
                    <div class="alert alert-danger my-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating my-3">
                <textarea class="form-control" id="content" name="content" type="text" placeholder="content">{{ old('content', $post->content) }}</textarea>
                <label for="content">content</label>
                @error('content')
                    <div class="alert alert-danger my-1">{{ $message }}</div>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button>
        </form>
    </div>

@endsection
