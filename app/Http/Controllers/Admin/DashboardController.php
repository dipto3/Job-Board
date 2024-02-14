<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::where('role','company');
        return view('admin.dashboard', compact('users'));
    }
    public function accept_account($id)
    {
        $user = CompanyInfo::find($id);
        $user->approval='active';
        $user->save();

        return redirect()->back();

    }
    public function reject_account($id)
    {
        $userpost = CompanyInfo::find($id);
        $userpost->approval='rejected';
        $userpost->save();

        return redirect()->back();

    }
}
