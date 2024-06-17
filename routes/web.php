<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Tag;

Route::get('/', function () 
{
    $featuredJobs = Job::with('employer')->where('featured', 1)->get();
    $unfeaturedJobs = Job::with('employer')->where('featured', 0)->get();
    $tags = Tag::all();

    return view('welcome', ['featuredJobs' => $featuredJobs, 'unfeaturedJobs' => $unfeaturedJobs, 'tags' => $tags]);
});
