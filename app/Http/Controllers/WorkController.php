<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Fandom;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Chapter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function store() {
        // request()->validate(
        //     [
        //         'title' => ['required', 'min:3'],
        //         'body' => ['required', 'min:3']
        //     ]
        //     );
        
        // $work = Work::create([
        //     'title' => request('title'),
        //     'body' => request('body'),
        //     'author' => 1,
        //     'chapters' => 1
        // ]);
        
        // return redirect ('/works/'. $work['id']);

        // dd(request());

        //Authenticate the user

        //Validate the request

        request()->validate([
            "rating"=>['required'],
            "warnings"=> ['required'],
            "relationships-selection" => ['array', 'distinct:ignore_case'],
            "fandoms-selection" => ['required', 'array', 'distinct:ignore_case'],
            "characters-selection" => ['required', 'array', 'distinct:ignore_case'],


            "work_title" => ['required', 'string', 'min:1', 'max:255', 'ascii'],
            "summary"=> ['required', 'string', 'min:10', 'max:1250', 'ascii'],
            "start-notes" => ['string', 'min:10', 'max:5000', 'ascii'],
            "end-notes" => ['string', 'min:10', 'max:5000', 'ascii'],

            "work"=>['required', 'min:10', 'max:500000' ]

           
            //tags
          
            

            
        ]);

        dd(request());

        

        //Create the work

        $work = Work::create([
            'title'=>request('work_title'),
            'summary'=>'this is a summary for testing', //
            
            
            'chapter_count'=>1,
            'author_id'=> Auth::user()->id,
            'kudos'=>0,

            'end-notes'=>"my end notes go here",
            'start-notes'=>"request('start-notes')",
        ]);

        

        //Create the tags

            //archive warnings

           

            //if none ot the archive warnings are selected then error, else add the warnings to the work

            

            //rating

            $rating=request('rating');

            switch ($rating) {

            case "not-rated":
                $work->rating()->attach(Rating::find(1));
                break;

            case "general-audiences":
                $work->rating()->attach(Rating::find(2));
                break;

            case "teen-and-up":
                $work->rating()->attach(Rating::find(3));
                break;

            case "mature":
                $work->rating()->attach(Rating::find(4));
                break;

            case "explicit":
                $work->rating()->attach(Rating::find(5));
                break;

            default:
                echo "an error occured please try again later";
            }

            //Categories
            $categories = DB::table('categories')
                ->select('id')
                ->where('name', request('categories'))
                ->get();

        
            foreach($categories as $category) {
                $work->categories()->attach($category);
            }

            //Fandoms

            $fandoms = DB::table('fandoms')
                ->select('id')
                ->where('name', request('fandoms'))
                ->get();

        
            foreach($fandoms as $fandom) {
                $work->fandoms()->attach($fandom);
            }

            //Relationships

            $relationships = DB::table('relationships')
                ->select('id')
                ->where('name', request('relationships'))
                ->get();

        
            foreach($relationships as $relationship) {
                $work->relationships()->attach($relationship);
            }

            //CHaracters

            $characters = DB::table('characters')
                ->select('id')
                ->where('name', request('characters'))
                ->get();

        
            foreach($characters as $character) {
                $work->characters()->attach($character);
            }

            //=> check the database for the item name and select the id of the item, then attach the item to the work


        //Create the chapter

        $chapter = Chapter::create([
            'title'=>'Chapter 1',
            'body' => "this is a chapter body",
            'work_id' => $work->id
            
        ]);

        return redirect('works/'.$chapter->work_id.'/chapters');
        
        


       

       

            

        

        
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
