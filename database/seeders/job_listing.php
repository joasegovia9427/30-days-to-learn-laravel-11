<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class job_listing extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobsToCreate = Job::all();




        foreach ($jobsToCreate as $job) {
            $job->save();
        }
    }
}
