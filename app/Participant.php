<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends BootUserModel
{
    public function events()
    {
        return $this->belongsTo('App\Event');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
