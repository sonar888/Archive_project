<?php

use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;
use App\Models\Work;


Route::get('/', function (){
    return view('homepage');
});

// Route::get('/works', function () {
//     return view('works.index');
// });

Route::get('/tags', function () {
    return view('tags.index');
});

//Works controller

// Route::get('/works/{work}', [WorkController::class, 'show']);

// Route::get('/works', [WorkController::class, 'index']);
// Route::post('/works', [WorkController::class, 'store']);

// Route::get('/works/{work}/edit', [WorkController::class, 'edit']);

// Route::get('/works/create', [WorkController::class, 'create']);








// Route::patch('/works/{work}', [WorkController::class, 'update']);
// Route::delete('/works/{work}', [WorkController::class, 'destroy']);

Route::get('/works', [WorkController::class, 'index']);
Route::post('/works', [WorkController::class,'store']);

Route::get('/works/create', [WorkController::class,'create']);
Route::get('/works/{work}/edit', [WorkController::class, 'edit']);

Route::get('/works/{work}', [WorkController::class, 'show']);
Route::patch('/works/{work}', [WorkController::class,'update']);

Route::delete('/works/{work}', [WorkController::class,'destroy']);
