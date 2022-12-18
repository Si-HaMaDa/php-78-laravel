@extends('admin.layouts.main')

@section('title', 'Add Post!')

@section('content')


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Add Post</h1>
        <a class="btn btn-warning" href="{{ route('admin.posts.index') }}">
            < back</a>
    </div>
    <div class="container card my-3 p-3">
        <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-floating my-3">
                <input class="form-control" id="title" name="title" type="text" value="{{ old('title') }}"
                    placeholder="Title">
                <label for="title">title</label>
                @error('title')
                    <div class="alert alert-danger my-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating my-3">
                <textarea class="form-control" id="content" name="content" placeholder="content">{{ old('content') }}</textarea>
                <label for="content">content</label>
                @error('content')
                    <div class="alert alert-danger my-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating my-3">
                <input class="form-control" id="image" name="image" type="file" placeholder="image" />
                <label for="image">image</label>
                @error('image')
                    <div class="alert alert-danger my-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating my-3">
                <select class="form-control" id="user_id" name="user_id">
                    <option value="">Select User</option>

                    @foreach ($users as $key => $value)
                        <option value="{{ $key }}" @selected(old('user_id') == $key)>{{ $value }}</option>
                    @endforeach

                </select>
                <label for="user_id">User</label>
                @error('user_id')
                    <div class="alert alert-danger my-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating my-3">
                <select class="form-control" id="cat_id" name="cat_id">
                    <option value="">Select Category</option>

                    @foreach ($categories as $key => $value)
                        <option value="{{ $key }}" @selected(old('cat_id') == $key)>{{ $value }}</option>
                    @endforeach

                </select>
                <label for="cat_id">Category</label>
                @error('cat_id')
                    <div class="alert alert-danger my-1">{{ $message }}</div>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Save</button>
        </form>
    </div>

@endsection
