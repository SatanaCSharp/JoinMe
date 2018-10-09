<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone_number', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function address()
    {
        return $this->belongsTo('App\Address');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function events()
    {
        return $this->hasMany('App\Event');
    }


    public static function encryptPassword($password)
    {
        return Hash::make($password);
    }

    public static function getUserData($request)
    {
        return [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => self::encryptPassword($request->password)
        ];
    }

    public function getCity($request)
    {
        return [
            'city' => $request->city
        ];
    }

    public function getRoleIds($request)
    {
        return [
            'roles' => $request->roles
        ];
    }

    public function setRole($roles, $user)
    {
        foreach ($roles as $role) {
            $user->roles()->attach($role);
        }
    }

    public function setCity($user, $city)
    {
        Address::create($city)->user()->save($user);
    }

    private function getUpdatedUserData($request, $user)
    {
        return [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => $user->password
        ];
    }

    public function updateUser($request, $user)
    {
        $user->update($this->getUpdatedUserData($request, $user));
    }

    public function updateCity($city, $user)
    {
        Address::updateOrCreate($city)->user()->save($user);
    }

    private function unsetRoles($user)
    {
        $user->roles()->detach();
    }

    public function updateRoles($roles, $user)
    {
        $this->unsetRoles($user);
        $user->setRole($roles, $user);
    }


}
