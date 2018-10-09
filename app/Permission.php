<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    public function attachPermissionsToRole(Request $request, Role $role)
    {
        foreach ($request->permission as $permission) {
            $role->attachPermission($permission);
        }
    }

    public function deletePermissions($role)
    {
        $role->perms()->sync([]);
        $role->forceDelete();
    }

    public function deletePermission($role)
    {
        $role->perms()->detach();
    }

}
