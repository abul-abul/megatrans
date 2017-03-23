<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';

    protected $fillable = ['images','alt','title_en','title_arm','title_rus','description_en','description_arm','description_rus','alt','text_en','text_arm','text_rus'];
}
