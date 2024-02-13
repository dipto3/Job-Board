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

    public function registerpost(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        CompanyInfo::create([
            'user_id' => $user->id,
            'contract_number'  => $request->contract_number,
            'webpage' => $request->webpage,
            'approval' => 'pending',
        ]);

        return redirect()->back();
        
    }
}
