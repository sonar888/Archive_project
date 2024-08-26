<?php

use App\Http\Controllers\WorkController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ChapterController;
use Illuminate\Support\Facades\Route;
use App\Models\Work;

use App\Http\Controllers\PhotoCommentController;
 



Route::get('/', function (){
    return view('homepage');
});


Route::get('/tags', function () {
    return view('tags.index');
});


//Chapters

Route::get('/works/{work}/chapters', [ChapterController::class,'index']);

Route::post('/works/{work}/chapters', [ChapterController::class,'store']);

Route::get('/works/{work}/chapters/create', [ChapterController::class,'create']);
Route::get('/works/{work}/chapters/{chapter}/edit', [ChapterController::class, 'edit']);

Route::get('/works/{work}/chapters/{chapter}', [ChapterController::class, 'show']);
Route::patch('/works/{work}/chapters/{chapter}', [ChapterController::class,'update']);

Route::delete('/works/{work}/chapters/{chapter}', [ChapterController::class,'destroy']);

//Works controller

Route::get('/works', [WorkController::class, 'index']);
Route::post('/works', [WorkController::class,'store']);

Route::get('/works/create', [WorkController::class,'create']);
Route::get('/works/{work}/edit', [WorkController::class, 'edit']);

Route::get('/works/{work}', [WorkController::class, 'show']);
Route::patch('/works/{work}', [WorkController::class,'update']);

Route::delete('/works/{work}', [WorkController::class,'destroy']);







//Tags Controller

Route::get('/tags', [TagController::class, 'index']);
Route::post('/tags', [TagController::class,'store']);

Route::get('/tags/create', [TagController::class,'create']);
Route::get('/tags/{tag}/edit', [TagController::class, 'edit']);

Route::get('tags/{tag}', [TagController::class, 'show']);
Route::patch('/tags/{tag}', [TagController::class,'update']);

Route::delete('/tags/{tag}', [TagController::class,'destroy']);
