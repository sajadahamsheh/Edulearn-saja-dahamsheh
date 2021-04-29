<?php

namespace App\Http\Controllers;

use Auth;
use App\Test;
use App\TestAnswer;
use App\order_courses;
use App\Courses;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StoreResultsRequest;
use App\Http\Requests\UpdateResultsRequest;

class ResultsController extends Controller
{
   

    /**
     * Display a listing of Result.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vars=Order ::where('user_id', Auth::id())->get();
        $saja=array();
        foreach ($vars as $var){
            $orders = order_courses::where('order_id',$var->id)->get();    
            array_push($saja,$orders);
            
        }

        // dd($saja);
        
        $courses = Courses::all();
        // $products = $products::where('order_id' , $id) -> get() ;

        $results = Test::all()->load('user');
        if (!Auth::user()) {
            $results = $results->where('user_id', '=', Auth::id())->get();
           
        }
        
        return view('results.index', compact('results','saja','courses','vars'));
    }

    /**
     * Display Result.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::find($id);

        if ($test) {
            $results = TestAnswer::where('test_id', $id)
                ->with('question')
                ->with('question.options')
                ->get()
            ;
        }

        return view('results.show', compact('test', 'results'));
    }
}
