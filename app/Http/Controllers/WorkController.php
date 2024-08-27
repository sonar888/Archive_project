<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    public function index() {
        $works = Work::with('chapters')->latest()->paginate(100); 
        return view('works.index', ['works' => $works]);
    }

    public function create() {
        return view('works.create');
    }

    public function show(Work $work) {
        return view('works.show', ['work' => $work]);
    }

    public function store(Work $work) {
        request()->validate(
            [
                'title' => ['required', 'min:3'],
                'body' => ['required', 'min:3']
            ]
            );
        
        $work = Work::create([
            'title' => request('title'),
            'body' => request('body'),
            'author' => 1,
            'chapters' => 1
        ]);
        
        return redirect ('/works/'. $work['id']);
    }

    public function edit(Work $work) {
        return view('works.edit', ['work' => $work]);
    }

    
    public function update(Work $work) {
        request()->validate(
            [
                'title' => ['required', 'min:3'],
                'body' => ['required', 'min:3']
            ]
        );
        
        $work ->update(
            [
                'title' => request('title'),
                'body' => request('body')
            ]
        );

        return redirect('/works/'.$work['id']);
    }

    public function destroy(Work $work) {
        $work->delete();
        return redirect('/works');
    }

   

    
}
