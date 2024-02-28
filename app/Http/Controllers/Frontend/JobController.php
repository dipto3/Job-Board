<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobApply;
use App\Models\JobView;
use App\Services\JobService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    protected $jobService;

    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
    }
    public function jobDetails($uuid, Request $request)
    {
        $data = [
            'job' => $this->jobService->jobDetailsPage($uuid, $request)
        ];
        return view('frontend.jobs.description', $data);
    }


    public function clcik($id, Request $request)
    {
        $job = Job::find($id);
        $ipAddress = $request->ip();
        $existIp = JobApply::where('job_id', $job->id)->where('ipAddress', $ipAddress)->first();
        //check for store unique ip address
        if (!$existIp) {
            JobApply::create([
                'job_id' => $id,
                'ipAddress' => $ipAddress,
                'user_id' => Auth::user()->id
            ]);
        }
        return redirect()->to($job->link);
    }
}
