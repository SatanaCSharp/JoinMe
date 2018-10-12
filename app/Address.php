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
        return $this->hasOne('App\Event');
    }

    private function getAddress($request)
    {
        return [
            'city' => $request->city,
            'place' => $request->place
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
        self::create($this->getAddress($request))->user()->save($user);
    }

    public function updateCity($request, $user)
    {
        self::updateOrCreate($this->getAddress($request))->user()->save($user);
    }

    public function setAddress($request)
    {
        return self::create($this->getAddress($request));
    }

    public function updateAddress($request, $id)
    {
        return self::find($id)->update($this->getAddress($request));
    }
}
