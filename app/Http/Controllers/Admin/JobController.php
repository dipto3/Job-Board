<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\JobService;
use Illuminate\Http\Request;

class JobController extends Controller
{
    const moduleDirectory = 'admin.jobs.';

    protected $jobService;

    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
    }

    public function index()
    {
        // dd(Auth::user()->id);
        $data = [
            'jobs' => $this->jobService->getAllJob(),
        ];

        return view(self::moduleDirectory.'index', $data);
    }

    public function create()
    {
        return view(self::moduleDirectory.'create');
    }

    public function store(Request $request)
    {
        $job = $this->jobService->storeJob($request);
        if ($job) {
            toastr()->addInfo('', 'Job Created Successfully.');
        } else {
            toastr()->addError('', 'Something went wrong!');
        }

        return redirect()->route('job.index');
    }

    public function details($id)
    {
        $data = [
            'job' => $this->jobService->findJobInfo($id),
        ];

        return view(self::moduleDirectory.'details', $data);
    }

    public function edit($id)
    {
        $data = [
            'job' => $this->jobService->findJobInfo($id),
        ];

        return view(self::moduleDirectory.'edit', $data);
    }

    public function update(Request $request, $id)
    {
        $job = $this->jobService->updateJob($request, $id);
        if ($job) {
            toastr()->addInfo('', 'Job Updated Successfully.');
        } else {
            toastr()->addError('', 'Something went wrong!');
        }

        return redirect()->route('job.index');
    }

    public function status(Request $request)
    {
        $this->jobService->status($request);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $job = $this->jobService->destroyJobInfo($id);
        if ($job) {
            toastr()->addInfo('', 'Job Removed Successfully.');

            return redirect()->route('job.index');
        }
    }
}
