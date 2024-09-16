<?php

use App\Http\Controllers\WorkController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\KudosController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Work;

use App\Http\Controllers\PhotoCommentController;
 



Route::get('/', function (){
    return view('homepage');
});


Route::get('/tags', function () {
    return view('tags.index');
});

Route::view('/dashboard', 'dashboard');


//Kudos

Route::post('/works/{work}/chapters/kudos', [KudosController::class,'store']);



//Comments

//In this case the displaying of the comments is handled in the chapter views directly

Route::post('/works/{work}/chapters/{chapter}/comments', [CommentController::class,'store']);
Route::patch('/works/{work}/chapters/{chapter}/comments/{comment}', [CommentController::class,'update']);
Route::delete('/works/{work}/chapters/{chapter}/comments/{comment}', [CommentController::class,'destroy']);


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

Route::get('/works/create', [WorkController::class,'create'])
    ->middleware('auth');
Route::get('/works/{work}/edit', [WorkController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'work');

Route::get('/works/{work}', [WorkController::class, 'show']);
Route::patch('/works/{work}', [WorkController::class,'update'])
    ->middleware('auth')
    ->can('edit', 'work');

Route::delete('/works/{work}', [WorkController::class,'destroy'])
    ->middleware('auth')
    ->can('edit', 'work');


//Search controller

Route::get('/search', SearchController::class);





//Tags Controller

Route::get('/tags', [TagController::class, 'index']);
Route::post('/tags', [TagController::class,'store']);

Route::get('/tags/create', [TagController::class,'create']);
Route::get('/tags/{tag}/edit', [TagController::class, 'edit']);

Route::get('tags/{tag}', [TagController::class, 'show']);
Route::patch('/tags/{tag}', [TagController::class,'update']);

Route::delete('/tags/{tag}', [TagController::class,'destroy']);


//Auth

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);
