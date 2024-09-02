<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Work;

class SearchController extends Controller
{
    public function __invoke(){
        

        // $works=Work::orderBy('created-at', 'DESC');

        // if (request()->has('search')) {
        //     $works = $works->where('content', 'like', '%'.request()->get('search', '').'%');
        // }
        $works = Work::with('chapters')
        ->where('title', 'LIKE', '%'.request('q').'%' )
        ->orWhere('summary', 'LIKE', '%'.request('q').'%' )
        ->get();

        return view('search.results', ['works'=>$works]);

       

    }
}


// https://www.youtube.com/watch?v=R58XZ8pAXoE