<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\CourseCat;
use App\topic;

class HomeController extends Controller
{
   
    public function index()
    {   
        $courses = Courses :: all();
        $cats    = CourseCat ::all();
        $topics   = Topic ::all();
        return view('mainSite.home',compact('courses','cats','topics'));

    }
}
