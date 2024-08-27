<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Work;
use App\Models\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Work $work, Chapter $chapter)
    {
        request()->validate([
            'comment'=>['required', 'min:3']
        ]);

        $comment = Comment::create([
           'comment' => request('comment'),
            'author_id'=> $work->author_id,
            'chapter_id'=> $chapter->id,
            'work_id'=> $work->id
        ]);

        return redirect('/works/'.$work->id.'/chapters/'.$chapter->id);
    }

    public function update()
    {
        dd("update");
    }

    public function destroy()
    {
        dd("destroy");
    }

    
}
