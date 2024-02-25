<?php

namespace App\Services;

use PHPUnit\Framework\MockObject\Stub\ReturnStub;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleService
{
    public function allPermission()
    {
        return Permission::all();
    }
    public function getAllRole()
    {
        return Role::all();
    }

    public function storeRole($request)
    {

        $role = Role::create([
            'name' => $request->name,
        ]);
        $permissions = $request->input('permissions');

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        return $role;
    }

    public function destroyRoleInfo($id)
    {
        return Role::findOrFail($id)->delete();
    }
    public function rolePermission($id)
    {
        return Role::with('permissions')->findOrFail($id);
    }
}
