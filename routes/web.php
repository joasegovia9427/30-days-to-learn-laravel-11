<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'title' => 'Jobs',
        'jobs' => config('jobs.list'),
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    // return view('job');
    // return "Job item id: {$id}";

    // Arr::first(config('jobs.list'), function ($jobItem) use ($id) {
    //     return $job['id'] == $id;
    // });

    $job = Arr::first(config('jobs.list'), fn($job) => $job['id'] == $id);
    $listSize = count(config('jobs.list'));
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
