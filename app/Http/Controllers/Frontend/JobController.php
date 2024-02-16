<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobDetails($uuid)
    {
        $job = Job::where('uuid', $uuid)->first();
        return view('frontend.jobs.description', compact('job'));
    }
}
