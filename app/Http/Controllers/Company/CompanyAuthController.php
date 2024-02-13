<?php

namespace App\Http\Controllers\Company;

use App\Models\User;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompanyAuthController extends Controller
{
    public function registerPage()
    {
        return view('company.auth.register');
    }

    public function registerpost(Request $request)
    {


        $user = DB::table('users')->insert([
        'name'     => $request->name,
        'email'     => $request->email,
        'password' => $request->password,
        ]);

        $com = DB::table('company_infos')->insert([
        'name'     => $request->name,
        'email'     => $request->email,
        'password' => $request->password,
        'contract_number '=> $request->contract_number,
        'webpage'     => $request->webpage,
        ]);

        if($user && $com)
        {
            return back()->with('success', 'Register successfully');
        }
        else
        {
            return back()->with('fail', 'Worng');
        }

    }

}
