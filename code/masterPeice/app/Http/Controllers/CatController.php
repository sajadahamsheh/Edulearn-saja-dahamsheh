<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\CourseCat;
use Illuminate\Support\Facades\Hash;

class CatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cats = CourseCat :: all();
        return view('dashboard.cat',compact('cats'));
    }
   
    public function store(Request $req)
    {
        $req->validate([
            'cat_name'    =>'required',
            'cat_img'   =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
        if (!empty(request()->cat_img)){
            $imageName = time().'.'.request()->cat_img->getClientOriginalExtension();
            request()->cat_img->move(public_path('images'), $imageName);
        }
        else {
            $imageName= 'default.png';
        }
        $cat          = new CourseCat();
        $cat->cat_name    = $req['cat_name'];
        $cat->cat_img     = $imageName;
        $cat->save();
        return redirect('/cat');
    }
    public function edit($id){
        $cats=Coursecat::find($id);
        return view('dashboard.editCat',compact('cats')) ;
    }
    public function Update(Request $req ,$id){

        if (!empty(request()->cat_img)){
            $imageName = time().'.'.request()->cat_img->getClientOriginalExtension();
            request()->cat_img->move(public_path('images'), $imageName);
        }else {
            $catImg=CourseCat::find($id);
            $imageName=$catImg->cat_img;
        }
        $cat=new CourseCat();
        $cat=$cat->find($id);
        $cat ->cat_name=$req['cat_name'];
        $cat ->cat_img=$imageName;
        $cat ->save();
        return redirect ('/cat');

    }
    public function destroy($id){
        $cat= CourseCat::destroy($id);
        return redirect('/cat');

    }
    

}
