<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
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
        return view('dashboard/admin');
    }
    public function index2()
    {
        $admin = new Admin();
        $admins = $admin->all();
        return view('dashboard.admin', compact('admins'));
    }
    public function create() {
        return view("dashboard.admin");
    }
    public function store(Request $req)
    {
        $req->validate([
            'name'    =>'required',
            'email'   =>'required | email',
            'password'=>'required | min:8 |max:16',
        ]);
        $admin          = new Admin();
        $admin->name    = $req['name'];
        $admin->email   = $req['email'];
        $admin->password = Hash::make ($req['password']);
        $admin->save();
        return redirect('/admin');
    }
    public function destroy($id)
    {
        $admin = new Admin();
        $admin -> destroy($id);
        return redirect('/admin');
    }
    public function edit($id)
    {
        $adminE = new Admin();
        $admin =$adminE -> find($id);
        return view('dashboard.editadmin', compact('admin'));
    }
    public function update(Request $req ,$id)
    {
        $admin = new Admin();
        $admin =$admin -> find($id);
        $admin->name = $req['name'];
        $admin->email = $req['email'];
        if(!empty($req['password'])){

            $admin->password = Hash::make( $req['password']);
        }
        $admin->save();
        return redirect('/admin');
    }

}
