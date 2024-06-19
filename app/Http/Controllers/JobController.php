<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Job;

class JobController extends Controller
{
    function index_create() {
        return view('jobs.create');
    }

    function create (Request $request) 
    {
        $jobInstance = $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
            'schedule' => ['required', Rule::in(['Full Time', 'Part Time'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable']
        ]);

        $jobInstance['featured'] = $request['featured'] == 'on' ? true : false;
        
        $tags = explode(', ', $jobInstance['tags']);
        unset($jobInstance['tags']);

        $job = Auth::user()->employer->jobs()->create($jobInstance);

        foreach($tags as $tag) {
            $job->addTag($tag);
        }

        return redirect('/');
    }

    function index_edit () {
        return view('jobs.edit', ['user' => Auth::user()]);
    }

    function edit (Job $job) {
        return view('jobs.edit-job', ['job' => $job]);
    }

    function update (Job $job, Request $request) 
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
            'schedule' => ['required', Rule::in(['Full Time', 'Part Time'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable']
        ]);

        $job->title = $request['title'];
        $job->salary = $request['salary'];
        $job->schedule = $request['schedule'];
        $job->url = $request['url'];
        $job->save();

        return redirect('/');
    }

}
