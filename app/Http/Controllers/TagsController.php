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

    public function edit()
    {
        $tag = Tag::find(request()->id);

        if (!$tag){
            request()->session()->flash('error', 'Tag is not exist!');
            return redirect(url('admin/tags'));
        }

        // $tag = Tag::findOrFail(request()->id);

        return view('admin.tags.edit', compact('tag'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            // 'name' => 'required|max:50|alpha|unique:tags,name,' . $request->id .',id',
            'name' => [
                'required',
                'max:50',
                'alpha',
                \Illuminate\Validation\Rule::unique('tags')->ignore($request->id),
            ]
        ]);

        $tag = Tag::findOrFail($request->id);

        $tag->update($validated);

        request()->session()->flash('success', 'Tag Updates Successfully!');
        return redirect(url('admin/tags'));
    }

    public function delete(Request $request)
    {
        $tag = Tag::findOrFail($request->id);

        $tag->delete();

        request()->session()->flash('success', 'Tag Deleted Successfully!');
        return redirect(url('admin/tags'));
    }
}
