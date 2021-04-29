<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;


class mainTopicController extends Controller
{
    
    
   public function index(){
       $topics =Topic::all();

       return view ('mainSite/topics',compact('topics'));
   }
   

}

