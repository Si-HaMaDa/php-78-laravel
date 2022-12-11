@extends('admin.layouts.main')

@section('title', 'Tags!')


@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tags</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="btn btn-sm btn-outline-primary" href="{{ url('admin/tags/create') }}">
                <span class="align-text-bottom" data-feather="plus"></span>
                Add
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>{{ $tag->created_at }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ url('admin/tags/'. $tag->id .'/show') }}">Show</a>
                            <a class="btn btn-sm btn-warning" href="{{ url('admin/tags/'. $tag->id .'/edit') }}">Edit</a>
                            <form style="display: inline" action="{{ url('admin/tags/'. $tag->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger" href="">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
