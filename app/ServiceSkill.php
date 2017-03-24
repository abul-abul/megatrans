<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceSkill extends Model
{
    protected $table = 'service_skill';

    protected $fillable = ['skill_en','skill_arm','skill_rus','service_id'];
}
