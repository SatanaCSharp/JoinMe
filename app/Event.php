<?php

namespace App;


class Event extends BootUserModel
{
    protected $fillable = ['name', 'description', 'date', 'time'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function eventType()
    {
        return $this->belongsTo('App\EventType');
    }


}
