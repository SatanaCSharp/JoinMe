<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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


    public function getPathStoredImage($image)
    {
        return ['image' => Storage::disk('local')->putFile('images', $image)];
    }

    public function setProfileImage(self $image, $imagePath,$user)
    {
        return $image->create($imagePath)->associate($user)->save();
    }

    public function setTypeAvatar(self $image)
    {
        $imageType = ImageType::find(ImageType::AVATAR);
        return $image->imageType()->associate($imageType)->save();
    }
}
