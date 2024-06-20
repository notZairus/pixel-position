<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\SessionController;
use App\Models\Tag;
use GuzzleHttp\Middleware;

Route::get('/', function () 
{
    if (!auth()->check()) {
        return redirect('/login');
    }
    
    $featuredJobs = Job::with('employer')->where(['featured' => true])->get();
    $unfeaturedJobs = Job::with('employer')->where(['featured' => false])->get();

    $tags = Tag::all();

    //return redirect('/login');

    return view('welcome', ['featuredJobs' => $featuredJobs, 'unfeaturedJobs' => $unfeaturedJobs, 'tags' => $tags]);
});

//JOBS
Route::middleware('auth')->group(function () {
    Route::get('/create', [JobController::class, 'index_create']);
    Route::get('/edit', [JobController::class, 'index_edit']);
    Route::post('/create', [JobController::class, 'create']);

    Route::get('/edit/{job}', [JobController::class, 'edit'])
    ->can('update', 'job');

    Route::patch('/edit/{job}', [JobController::class, 'update'])
    ->can('update', 'job');

    Route::delete('/delete/{job}', [JobController::class, 'delete'])
    ->can('update', 'job');
});

//REGISTER
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'create']);


//SESSIONS
Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'logout'])->middleware('auth');


//TAGS
Route::get('/tags/{name}', [TagController::class, 'index'])->middleware('auth');