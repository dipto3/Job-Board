<?php

namespace App\Services;

use PHPUnit\Framework\MockObject\Stub\ReturnStub;
use Spatie\Permission\Models\Role;

class RoleService
{
    public function getAllRole()
    {
        return Role::all();
    }

    public function storeRole($request)
    {
        return Role::create([
            'name' => $request->name,
        ]);
    }

    public function destroyRoleInfo($id)
    {
        return Role::findOrFail($id)->delete();
    }
}
