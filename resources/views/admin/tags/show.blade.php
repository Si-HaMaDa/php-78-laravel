@extends('admin.layouts.main')

@section('title', 'Show Tag!')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Show Tag</h1>
        <a class="btn btn-warning" href="{{ url('admin/tags') }}">
            < back</a>
    </div>
    <div class="container card my-3 p-3">
        <div class="my-3">
            <label>Name:</label>
            <p>{{ $tag->name }}</p>
        </div>
        <div class="my-3">
            <label>Created At:</label>
            <p>{{ $tag->created_at }}</p>
        </div>
        <div class="my-3">
            <label>Updated At:</label>
            <p>{{ $tag->updated_at }}</p>
        </div>
    </div>

@endsection
