<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

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

    public function show()
    {
        $tag = Tag::find(request()->id);

        if (!$tag){
            request()->session()->flash('error', 'Tag is not exist!');
            return redirect(url('admin/tags'));
        }

        // $tag = Tag::findOrFail(request()->id);

        return view('admin.tags.show', compact('tag'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50|alpha|unique:tags',
        ]);

        Tag::create($validated);

        request()->session()->flash('success', 'Tag Created Successfully!');
        return redirect(url('admin/tags'));
    }
}
