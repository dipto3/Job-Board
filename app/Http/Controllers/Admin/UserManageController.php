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
        return view('admin.users.company', compact('users'));
    }
    public function accept_account($encryptedUserId)
    {

        $userId = Crypt::decrypt($encryptedUserId);
        $user = CompanyInfo::findOrFail($userId);

        $user->update(['approval' => $user->approval == 'pending' ? 'approved' : 'pending']);

        return back();
    }

    public function candidateList()
    {
        $candidates = User::where('role', 'Candidate')->get();
        return view('admin.users.candidate', compact('candidates'));
    }
}
