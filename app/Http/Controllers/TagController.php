<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::all();
        return view('tags.index', ['tags' => $tags]);
    }

    public function edit(Tag $tag) {
        return view('tags.edit', ['tag' => $tag] );
    }

    public function show(Tag $tag) {
        return view('tags.show', ['tag' => $tag]);
    }

    public function create() {
        return view('tags.create');
    }

    public function store() {
        request()->validate([
            'name'=>['required']

        ]);

        $tag = Tag::create([
           'name'=>request('name') 
        ]);

        return redirect('/tags/'.$tag['id']);
    }

    public function destroy(Tag $tag) {
        $tag->delete();
        return redirect('/tags');
    }

    public function update(Tag $tag) {
        request()->validate([
            'name'=>['required']

        ]);

        $tag -> update([
           'name'=>request('name') 
        ]);

        return redirect('/tags/'.$tag['id']);
    }
}


// $work->tags()->attach(4)