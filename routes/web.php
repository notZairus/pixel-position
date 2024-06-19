<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\SessionController;
use App\Models\Tag;

Route::get('/', function () 
{
    if (!auth()->check()) {
        return redirect('/login');
    }
    
    $featuredJobs = Job::with('employer')->get()->groupBy('featured');

    $tags = Tag::all();

    return view('welcome', ['featuredJobs' => $featuredJobs[1], 'unfeaturedJobs' => $featuredJobs[0], 'tags' => $tags]);
});



//REGISTER
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'create']);


//SESSIONS
Route::get('/login', [SessionController::class, 'index']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'logout']);


//TAGS
Route::get('/tags/{name}', [TagController::class, 'index']);