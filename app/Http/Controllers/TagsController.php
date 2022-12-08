<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
        // return view('admin.tags.index')->with([
        //     'allTags' => $tags
        // ]);
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store()
    {
        // dd(request()->all());

        $tag = new Tag();

        $tag->name = request()->name;

        $tag->save();

        return redirect(url('admin/tags'));
    }
}
