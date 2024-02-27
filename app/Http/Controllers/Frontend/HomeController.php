<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Services\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $homeService;

    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }
    public function home()
    {
        $data = $this->homeService->homeFeed();
        return view('frontend.home', $data);
    }

    public function contact()
    {
        return view('frontend.contact.contact');
    }

    public function search(Request $request)
    {
        $query = $request->input('search');

        // Perform your search logic based on the query parameter
        $jobs = Job::where('tags', 'like', "$query%")
            ->orWhere('location', 'like', "$query%")
            ->orWhere('salary', 'like', "$query%")
            ->get();

        return view('frontend.search', compact('jobs'));
    }
}
