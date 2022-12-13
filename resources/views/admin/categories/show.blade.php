@extends('admin.layouts.main')

@section('title', 'Show Category!')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Show Category</h1>
        <a class="btn btn-warning" href="{{ route('admin.categories.index') }}">
            < back</a>
    </div>
    <div class="container card my-3 p-3">
        <div class="my-3">
            <label>Name:</label>
            <p>{{ $category->name }}</p>
        </div>
        <div class="my-3">
            <label>Created At:</label>
            <p>{{ $category->created_at }}</p>
        </div>
        <div class="my-3">
            <label>Updated At:</label>
            <p>{{ $category->updated_at }}</p>
        </div>
    </div>

@endsection
