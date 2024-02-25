<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;


class UserManageController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'Company')->get();
        return view('admin.users.company.index', compact('users'));
    }
    public function accept_account($encryptedUserId)
    {

        $userId = Crypt::decrypt($encryptedUserId);
        $user = CompanyInfo::findOrFail($userId);

        $user->update(['approval' => $user->approval == 'pending' ? 'approved' : 'pending']);

        return back();
    }

    public function companyDetails($id)
    {
        $company = User::where('role', 'Company')->where('id', $id)->first();
        return view('admin.users.company.details', compact('company'));
    }

    public function candidateList()
    {
        $candidates = User::where('role', 'Candidate')->get();
        return view('admin.users.candidate.index', compact('candidates'));
    }

    public function candidateDetails($id)
    {
        $candidate = User::where('role', 'Candidate')->where('id', $id)->first();
        return view('admin.users.candidate.details', compact('candidate'));
    }

    public function candidateRemove($id)
    {
        $candidate = User::where('role', 'Candidate')->where('id', $id)->first();
        $candidate->delete();
        toastr()->addInfo('', 'Job Removed Successfully.');
        return redirect()->back();
    }
}
