<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

// Route::get('/jobs', function () use ($jobsList) {
Route::get('/jobs', function () {
    return view('jobs', [
        'title' => 'Jobs',
        'jobs' => Job::all(),
    ]);
});

Route::get('/jobs/{param_id}', function (string $param_id) {
    if (!is_numeric($param_id)) {
        abort(404);
    }

    $id = (int) $param_id;

    // return view('job');
    // return "Job item id: {$id}";

    // Arr::first(config('jobs.list'), function ($jobItem) use ($id) {
    //     return $job['id'] == $id;
    // });

    $job = Job::find($id);
    $listSize = Job::count();
    // dd($job);

    return view('job', ['job' => $job, 'listSize' => $listSize]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
    // return "About page";
    // return ['foo' => 'bar'];
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});
