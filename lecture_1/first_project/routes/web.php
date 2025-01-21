<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('jobs', function () {
    $jobs = Job::with('employer')->paginate(10);
//    $jobs = Job::all();
    return view('jobs', [ 'jobs' => $jobs ]);
});

Route::get('jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', [ 'job' => $job ]);
});

Route::get('contact', function () {
    return view('contact');
});
