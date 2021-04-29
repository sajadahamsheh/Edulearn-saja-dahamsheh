<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = "courses";
    
    public function CourseCat()
    {
        return $this->belongsTo(CourseCat::class);
    }
    public function Order()
    {
        return $this->belongsToMany('App\Order');
    }
    
}
