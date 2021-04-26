<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortCourse extends Model
{
    //
    protected $table = 'short_courses';
    protected $primaryKey = 'id';
    protected $fillable = ['android_dep', 'microcontroller_robotics', 'journalism'];
}
