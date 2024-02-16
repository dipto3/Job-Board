<?php

namespace App\Http\Controllers\Company;

use App\Models\User;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyAuthController extends Controller
{
    public function registerPage()
    {
        return view('company.auth.register');
    }

    public function registerPost(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Company',
        ]);

        CompanyInfo::create([
            'user_id' => $user->id,
            'contract_number'  => $request->contract_number,
            'webpage' => $request->webpage,
            'approval' => 'pending',
            'package_id' => 1,

        ]);

        return redirect()->back();
    }
}
