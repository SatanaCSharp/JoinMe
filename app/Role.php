<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;
use Illuminate\Http\Request;

class Role extends EntrustRole
{
    protected $fillable = ['name', 'display_name', 'description'];


    private function getRoleData($request)
    {
        return [
            'name' => $request->input('name'),
            'display_name' => $request->input('display_name'),
            'description' => $request->input('description')
        ];
    }

    public function updateRole($request, $role)
    {
        $role->update($this->getRoleData($request));
    }

    public function deleteRole($role)
    {
        $role->delete();
    }

    private function getRolesOfUser($request)
    {
        return [
            'roles' => $request->roles
        ];
    }

    private function setRolesToUser($request, $user)
    {
        foreach ($this->getRolesOfUser($request) as $role) {
            $user->roles()->attach($role);
        }
    }

    private function detachRolesOfUser($user)
    {
        $user->roles()->detach();
    }

    public function updateRolesOfUser($request, $user)
    {
        $this->detachRolesOfUser($user);
        $this->setRolesToUser($request, $user);
    }


}
