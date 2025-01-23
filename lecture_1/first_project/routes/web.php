<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(10);
//    $jobs = Job::all();
    return view('jobs.index', [ 'jobs' => $jobs ]);
});

Route::post('jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => 'required',
    ]);


    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('jobs/create', function () {
    return view('jobs.create');
});

Route::get('jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', [ 'job' => $job ]);
});

Route::get('contact', function () {
    return view('contact');
});
