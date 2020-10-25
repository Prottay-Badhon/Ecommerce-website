<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();
class addCategoryController extends Controller
{
    public function display(){
      $this->adminAuthCheck();
      return view('admin.addCategoryForm');
    }

    public function upload(Request $request){
      $data = array();
     $data['category_name']=$request->catName;
     $data['description']=$request->description;
     $data['publication_status']=$request->pbStatus;

     $success = DB::table('categories')->insert($data);
     if($success){
       session::put('message','successfuly category added!');
       return redirect()->back();
     }
    }

    public function adminAuthCheck(){
      $admin_id= Session::get('admin_id');
      if($admin_id){
        return view('admin.dashboard');
      }
      else {
         return redirect('/admin')->send();
      }
    }
}
