<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    // use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = [];

    // protected $guarded = [];

    // public static function all(): array
    // {
    //     return [
    //         [
    //             'id' => 1,
    //             'title' => 'Software Engineer',
    //             'description' => 'We are looking for a software engineer with 3 years of experience in Laravel and Vue.js',
    //             'location' => 'Remote',
    //             'salary' => '$100,000 - $120,000',
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Tester Engineer',
    //             'description' => 'We are looking for a tester engineer with Selenium and PHPUnit',
    //             'location' => 'Remote',
    //             'salary' => '$150,000 - $180,000',
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Project Manager',
    //             'description' => 'We are looking for a project manager with 3 years of experience in Laravel and Vue.js',
    //             'location' => 'Remote',
    //             'salary' => '$300,000 - $350,000',
    //         ],
    //     ];
    // }

    // public static function find(int $id): array
    // {
    //     $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

    //     if (!$job) {
    //         abort(404);
    //     }

    //     return $job;
    // }

    // public static function count(): int
    // {
    //     return count(static::all());
    // }
}
