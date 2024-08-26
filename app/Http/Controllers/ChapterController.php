<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Chapter;
use App\Models\Work;
use Illuminate\Support\Arr;

class ChapterController extends Controller
{
    public function index(Work $work) {

       
        return view('chapters.index', ['work' => $work]);

        
    }

    public function create(Work $work) {
        
        return view('chapters.create', ['work'=> $work]);
    }




    public function show(Work $work, Chapter $chapter) {
        return view('chapters.show', ['chapter'=> $chapter]);
    }






    public function store(Work $work, Chapter $chapter) {
        request()->validate(
            [
                'title' => ['required', 'min:3'],
                'body' => ['required', 'min:3']
            ]
            );
        
        $chapter = Chapter::create([
            'title' => request('title'),
            'body' => request('body'),
            'work_id' => $work->id
            
        ]);
        
        // return redirect ('/works/'. $chapter['id']);
        return redirect('works/'.$chapter->work_id.'/chapters');
    }

    public function edit(Work $work, Chapter $chapter) {
        return view('chapters.edit', ['chapter' => $chapter]);
    }

    
    public function update(Work $work, Chapter $chapter) {
        request()->validate(
            [
                'title' => ['required', 'min:3'],
                'body' => ['required', 'min:3']
            ]
        );
        
        $chapter ->update(
            [
                'title' => request('title'),
                'body' => request('body')
            ]
        );

        return redirect('/works/'.$chapter->work_id.'/chapters/'.$chapter->id);
    }

    public function destroy(Work $work, Chapter $chapter) {
        $chapter->delete();
        return redirect('/works/'.$chapter->work_id . '/chapters');
    }
}