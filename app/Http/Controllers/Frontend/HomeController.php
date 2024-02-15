<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Job;

class HomeController extends Controller
{
    public function home()
    {
        $activeJobs = Job::where('status', 1)
        ->where('deadline', '>=', now()->startOfDay())
        ->get();
        // dd(now()->startOfDay());
        return view('frontend.home', compact('activeJobs'));
    }

    public function contact()
    {
        return view('frontend.contact.contact');
    }
}
