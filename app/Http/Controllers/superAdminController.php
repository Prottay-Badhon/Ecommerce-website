<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class superAdminController extends Controller
{
    public function logout(){
      session::put('adminName',null);
      session::put('email',null);
      session::put('admin_id',null);
      return redirect('/admin');
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
