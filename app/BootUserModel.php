<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BootUserModel extends Model
{
    public static function boot()
    {
        parent::boot();
        static::creating(function($model) {
            $model->user_id = Auth::id();
        });
    }
}
