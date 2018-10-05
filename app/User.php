<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
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

    public static function getUserData($request)
    {
        return [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => $request->password
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

    public function getImage($request)
    {
        return [
            'image' => $request->image
        ];
    }

    public function setRole($roles, $user)
    {
        foreach ($roles as $role) {
            $user->attachRole($role);
        }
    }

    public function storeImage($image)
    {
        //TODO: store image to local Storage and return path;
    }

    public function setImage($image)
    {
        //TODO: store image to local Storage and return path;
    }
}
