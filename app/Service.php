<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';

    protected $fillable = [
        'images',
        'images_icon',
        'title_en',
        'title_arm',
        'title_rus',
        'description_en',
        'description_arm',
        'description_rus',
        'video'
    ];
}
