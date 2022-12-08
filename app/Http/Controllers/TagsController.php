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
}
