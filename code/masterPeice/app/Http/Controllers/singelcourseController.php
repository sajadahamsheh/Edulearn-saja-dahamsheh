<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\CourseCat;
use App\Cart ;
class singelcourseController extends Controller
{
    
    
   public function index($id){
       $course =Courses::find($id);
       
       return view ('mainSite/coursedetailes',compact('course'));
   }
   
   

}

