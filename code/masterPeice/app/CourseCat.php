<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCat extends Model
{
    protected $table = "course_category";
    public function Courses()
    {
        return $this->hasMany(Courses::class) ;
    }
}
