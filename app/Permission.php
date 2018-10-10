<?php

namespace App;

use Illuminate\Http\Request;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{

    private function getPermission($request)
    {
        return $request->permission;
    }

    public function attachPermissionsToRole(Request $request, Role $setRole)
    {
        foreach ($this->getPermission($request) as $permission) {
            $setRole->attachPermission($permission);
        }
    }


    public function updateRolePermissions($request,$role)
    {
        $this->detachPermission($role);
        $this->attachPermissionsToRole($request,$role);
    }

    private function detachPermission($role)
    {
        $role->perms()->detach();
    }

    public function deleteAllPermissions($role)
    {
        $role->perms()->sync([]);
        $role->forceDelete();
    }

    public function hasRolePermission($rolePermissions)
    {
        $permissions = [];
        foreach ($rolePermissions as $rolePermission) {
            array_push($permissions, $rolePermission->id);
        }
        return $permissions;
    }
}
