<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends BootUserModel
{
    protected $fillable = ['event_id','is_participated'];
    public function events()
    {
        return $this->belongsTo('App\Event','event_id');
    }
    public function users()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
