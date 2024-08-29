<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Work;
use App\Models\Kudos;

class KudosController extends Controller
{
    public function store(Work $work)
    {
      $work ->update(
        [
            'kudos' => $work->kudos+1,
        ]
    );
    
    return redirect('/works/'.$work->id. '/chapters/'.$work->chapter_id);
      

      
    }




}






// {

// Kudo::find($work->id)
//   $work ->update(
//     [
//         'kudos' => Kudo::find($work->id),
//     ]
// );

// return redirect('/works/'.$work->id. '/chapters/'.$work->chapter_id);
  

  
// }