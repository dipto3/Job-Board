<?php

namespace App\Services;

use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobService
{
    public function storeJob($request)
    {
        $loggedInUser = Auth::user();
        return Job::create([
            'title' => $request->title,
            'user_id' => $loggedInUser->id,
            'tags' => $request->tags,
            'location' => $request->location,
            'published' => $request->published,
            'deadline'=> $request->deadline,
            'salary'=> $request->salary,
            'employment_type'=> $request->employment_type,
            'experience'=> $request->experience,
            'gender'=> $request->gender,
            'description'=> $request->description,
            'status'=> $request->status,
            'link'=> $request->link
        ]);
    }

    public function getAllJob()
    {
        return Job::all();
    }

    // public function updateMethod($request, $method)
    // {
    //     return $method->update([
    //         'name' => $request->name,
    //         'status' => $request->status
    //     ]);
    // }

    

    public function destroyJobInfo($id)
    {
        return Job::findOrFail($id)->delete();
    }
}
