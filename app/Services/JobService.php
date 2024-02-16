<?php

namespace App\Services;

use App\Models\Job;
use App\Models\JobView;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class JobService
{
    public function storeJob($request)
    {
        $loggedInUser = Auth::user();

        $jobLimit = $loggedInUser->companyInfo->package->limit;

        // Check if user's job post limit over
        if ($loggedInUser->jobs->count() >= $jobLimit) {
            return false; // Job posting limit over
        }
        $tags = implode(',', $request->tags);

        return Job::create([
            'title' => $request->title,
            'uuid' => Str::uuid()->toString(),
            'user_id' => $loggedInUser->id,
            'tags' => $tags,
            'location' => $request->location,
            'published' => $request->published,
            'deadline' => $request->deadline,
            'salary' => $request->salary,
            'employment_type' => $request->employment_type,
            'experience' => $request->experience,
            'gender' => $request->gender,
            'description' => $request->description,
            'status' => $request->status,
            'link' => $request->link,
        ]);
    }

    public function getAllJob()
    {
        //If role admin then show all jobs
        if (Auth::user()->role === 'Admin') {
            $jobs = Job::orderBy('id', 'DESC')->get();
            //Specific job's view count
            foreach ($jobs as $job) {
                $job->totalViews = JobView::where('job_id', $job->id)->count();
            }

            return $jobs;
        } else {
            //If role not admin then show loggedInUser jobs
            $loggedInUser = Auth::user();
            $jobs = Job::where('user_id', $loggedInUser->id)->orderBy('id', 'DESC')->get();

            //Specific job's view count
            foreach ($jobs as $job) {
                $job->totalViews = JobView::where('job_id', $job->id)->count();
            }
            return $jobs;
        }
    }

    public function findJobInfo($id)
    {
        return Job::findOrFail($id);
    }

    public function updateJob($request, $id)
    {
        $loggedInUser = Auth::user();
        $tags = implode(',', $request->tags);
        $data = [
            'title' => $request->title,
            'user_id' => $loggedInUser->id,
            'tags' => $tags,
            'location' => $request->location,
            'published' => $request->published,
            'deadline' => $request->deadline,
            'salary' => $request->salary,
            'employment_type' => $request->employment_type,
            'experience' => $request->experience,
            'gender' => $request->gender,
            'description' => $request->description,
            'status' => $request->status,
            'link' => $request->link,
        ];
        $job = Job::where('id', $id)->update($data);

        return $job;
    }

    public function status($request)
    {
        $job = Job::where('id', $request->id)->update([
            'status' => $request->status,
        ]);

        return $job;
    }

    public function destroyJobInfo($id)
    {
        return Job::findOrFail($id)->delete();
    }
}
