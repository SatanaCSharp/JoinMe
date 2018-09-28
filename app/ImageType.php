<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageType extends Model
{
    const AVATAR = 1;
    const EVENT = 2;

    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
