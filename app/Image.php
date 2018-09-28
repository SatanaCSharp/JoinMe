<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends BootUserModel
{
    protected $fillable = ['image'];


    public function imageType()
    {
        return $this->belongsTo('App\ImageType');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function saveImageTypeAvatar(self $model, $image)
    {
        $imageType = ImageType::find(ImageType::AVATAR);
        return $model->create($image)->imageType()->save($imageType);
    }
}
