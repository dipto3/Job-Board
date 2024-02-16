<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobView;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobDetails($uuid, Request $request)
    {
        $job = Job::where('uuid', $uuid)->first();

        //store ip adress for job view count
        $ipAddress = $request->ip();
        $existIp = JobView::where('job_id', $job->id)->where('ipAddress', $ipAddress)->first();
        //check for store unique ip address
        if (!$existIp) {
            JobView::create([
                'job_id' => $job->id,
                'ipAddress' => $ipAddress
            ]);
        }
        return view('frontend.jobs.description', compact('job'));
    }
}
