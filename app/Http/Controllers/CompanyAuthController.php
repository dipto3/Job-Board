<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\CompanyInfo;
use App\Models\User;

class CompanyAuthController extends Controller
{
    public function registerPage()
    {
        return view('company.auth.register');
    }

    public function registerpost(Request $request)
    {
        $com = new CompanyInfo();

        $com->name = $request->name;
        $com->email = $request->email;
        $com->password = $request->password;
        $com->contract_number = $request->contract_number;
        $com-> webpage = $request-> webpage;

        $com->save();

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();



        return back()->with('success', 'Register successfully');


    }




}
