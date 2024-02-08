<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Companyuser;

class CompanyAuthController extends Controller
{
    public function registerPage()
    {
        return view('company.auth.register');
    }

    public function registerpost(Request $request)
    {
        $user = new Companyuser();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return back()->with('success', 'Register successfully');


    }




}
