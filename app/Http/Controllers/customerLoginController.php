<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class customerLoginController extends Controller
{
    public function login(Request $request){
      $email = $request->customerEmail;
      $password =md5($request->customerPassword);
      $verifyed = DB::table('tbl_customer')->where('customer_email',$email)->where('customer_password',$password)->first();
      if($verifyed){
        Session::put('logged_in',$verifyed->customer_id);
        return redirect('/checkout');
      }
      else{
        Session::put('errorMessage','incorrect email or password!');
        return redirect('/loginPage');
      }

    }

    public function showLoginPage(){
      return view('pages.login');
    }
}
