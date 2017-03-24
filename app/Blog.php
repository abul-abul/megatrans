<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    protected $fillable = [
        'title_en',
        'title_rus',
        'title_arm',
        'description_en',
        'description_rus',
        'description_arm',
        'video',
        'images'
    ];
}
