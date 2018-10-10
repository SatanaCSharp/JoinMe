<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['city', 'place'];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function event()
    {
        return $this->hasOne('App\Address');
    }


    private function getCity($request)
    {
        return [
            'city' => $request->city
        ];
    }

    public function deleteAddress($id)
    {
        if (isset($id)) {
            return self::find($id)->delete();
        }
    }

    public function setCity($request, $user)
    {
        self::create($this->getCity($request))->user()->save($user);
    }

    public function updateCity($request, $user)
    {
        self::updateOrCreate($this->getCity($request))->user()->save($user);
    }

}
