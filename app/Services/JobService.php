<?php

namespace App\Services;

use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobService
{
    public function storeJob($request)
    {
        $loggedInUser = Auth::user();
        $tags = implode(',', $request->tags);
        return Job::create([
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
            'link' => $request->link
        ]);
    }

    public function getAllJob()
    {
        
        if (Auth::user()->role === 'Admin') {
            return Job::all();
        } else {
            $loggedInUser = Auth::user();
            return Job::where('user_id', $loggedInUser->id)->get();
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
            'link' => $request->link
        ];
        $job = Job::where('id', $id)->update($data);
        return $job;
    }



    public function destroyJobInfo($id)
    {
        return Job::findOrFail($id)->delete();
    }
}
