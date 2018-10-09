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

    private function getCity($request)
    {
        return [
            'city' => $request->city
        ];
    }

    public function deleteAddress($id)
    {
       return self::find($id)->delete();
    }

    public function setCity($user, $request)
    {
        self::create($this->getCity($request))->user()->save($user);
    }
    public function updateCity($user, $request)
    {
        self::updateOrCreate($this->getCity($request))->user()->save($user);
    }

}
