<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    const moduleDirectory = 'admin.role.';

    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function index()
    {
        // dd(Auth::user()->id);
        $data = [
            'roles' => $this->roleService->getAllRole(),
        ];

        return view(self::moduleDirectory . 'index', $data);
    }

    public function create()
    {
        // $data = [
        //     'categories' => $this->roleService->findCategory(),
        // ];
        return view(self::moduleDirectory . 'create');
    }

    public function store(Request $request)
    {
        $role = $this->roleService->storeRole($request);

        toastr()->addInfo('', 'Role Created Successfully.');

        return redirect()->route('role.index');
    }

    public function destroy($id)
    {
        $role = $this->roleService->destroyRoleInfo($id);
        toastr()->addInfo('', 'Role Removed Successfully.');
        return redirect()->route('role.index');
    }
}
