<?php

namespace App\Services;

use App\Models\Job;

class HomeService
{
    public function homeFeed()
    {
        $activeJobs = Job::where('status', 1)
            ->where('deadline', '>=', now()->startOfDay())
            ->get();
        // dd(now()->startOfDay());
        return compact('activeJobs');
    }
}
