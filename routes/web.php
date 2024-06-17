<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    $featuredJobs = Job::with('employer')->where('featured', 1)->get();
    $unfeaturedJobs = Job::with('employer')->where('featured', 0)->get();


    return view('welcome', ['featuredJobs' => $featuredJobs, 'unfeaturedJobs' => $unfeaturedJobs]);
});
