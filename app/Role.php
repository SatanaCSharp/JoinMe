<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;
use Illuminate\Http\Request;

class Role extends EntrustRole
{
    protected $fillable = ['name', 'display_name', 'description'];


    public static function getRoleData($request)
    {
        return [
            'name' => $request->input('name'),
            'display_name' => $request->input('display_name'),
            'description' => $request->input('description')
        ];
    }

    public function attachPermissionsToRole(Request $request, Role $role)
    {
        foreach ($request->input('permission') as $permission) {
            $role->attachPermission($permission);
        }
    }

    public function updateRole($request, $role)
    {
        $role->update(Role::getRoleData($request));
    }

    public function deletePermission($role)
    {
        $role->perms()->detach();
    }

    public function deleteRole($role)
    {
        $role->delete();
    }

    public function deletePermissions($role)
    {
        $role->perms()->sync([]);
        $role->forceDelete();
    }
}
