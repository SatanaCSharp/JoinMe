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

    public static function deleteAddress($id)
    {
       return self::find($id)->delete();
    }
}
