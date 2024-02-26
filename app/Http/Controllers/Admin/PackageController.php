<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Services\PackageService;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    const moduleDirectory = 'admin.package.';

    protected $packageService;

    public function __construct(PackageService $packageService)
    {
        $this->packageService = $packageService;
    }

    public function package()
    {
        $data = [
            'packages' => $this->packageService->activePackage()
        ];
        return view(self::moduleDirectory . 'pricing', $data);
    }

    public function index()
    {
        $loggedInUser = Auth::user();
        if (is_null($loggedInUser) || !$loggedInUser->can('index-package')) {
            abort(403, 'Unauthorized Access!');
        }
        $data = [
            'packages' => $this->packageService->allPackage()
        ];
        return view(self::moduleDirectory . 'index', $data);
    }

    public function create()
    {
        $loggedInUser = Auth::user();
        if (is_null($loggedInUser) || !$loggedInUser->can('create-package')) {
            abort(403, 'Unauthorized Access!');
        }
        return view(self::moduleDirectory . 'create');
    }

    public function store(Request $request)
    {
        $package = $this->packageService->storePackage($request);
        toastr()->addInfo('', 'Package Created Successfully.');
        return redirect()->route('package.index');
    }
}
