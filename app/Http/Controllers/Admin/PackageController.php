<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function package()
    {
        $packages = Package::all();
        return view('admin.package.pricing', compact('packages'));
    }

   
}
