<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['city','place'];

    public function user(){
        return $this->hasMany('App\User');
    }

}
