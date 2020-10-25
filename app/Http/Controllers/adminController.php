<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
session_start();
use DB;
class adminController extends Controller
{
    public function index(){
      return view('admin.adminLogin');
    }
    public function verify(Request $request){
     $admin_email = $request->email;
     $admin_password = md5($request->password);
     $result = DB::table('tbl_admin')
              ->where('tbl_admin.email',$admin_email)
              ->where('tbl_admin.password',$admin_password)
              ->first();
              if($result){
                session::put('adminName',$result->name);
                session::put('email',$result->email);
                session::put('admin_id',$result->id);

                return view('admin.dashboard');
              }
              else{
                session::put('message','your email or password is invalid');
                return redirect('/admin');
              }
    }

 
}
