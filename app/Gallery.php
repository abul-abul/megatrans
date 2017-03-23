<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    protected $fillable = ['images','alt','title_en','title_arm','title_rus','description_en','description_arm','description_rus','alt','role'];
}
