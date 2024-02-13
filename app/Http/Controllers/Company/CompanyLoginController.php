<?php

namespace App\Http\Controllers\Company;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CompanyLoginController extends Controller
{
    public function loginpage()
    {
        return view('company.auth.login');
    }
    public function loginpost(Request $request)
    {
         $credetials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt( $credetials)) {
            return redirect('admin/dashboard')->with('success', 'Login Success');
        }

        return back()->with('error', 'Error Email or Password');
    }
}
