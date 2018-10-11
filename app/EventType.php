<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    protected $fillable = ['type'];

    public function event()
    {
        return $this->hasOne('App\Event');
    }



}
