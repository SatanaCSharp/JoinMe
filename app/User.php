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

    public function participants()
    {
        return $this->hasMany('App\Participant');
    }

    private function getUserData($request)
    {
        return [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
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

    public function setUser($request)
    {
        return self::create($this->getUserData($request));
    }

}
