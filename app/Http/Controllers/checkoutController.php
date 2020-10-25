<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class checkoutController extends Controller
{
  public function showLoginPage(){
    if( Session::get("logged_in") ){
      return redirect("/checkout");
    }
    else
    return view('pages.login');
  }
    public function showCheckoutPage(){
      if(Session::get("shippingId")){
        return redirect('/payment');
      }
      else
      return view('pages.checkout');
    }
    
    public function showRegister(){
      return view('pages.registration');
    }
    public function register(Request $request){
      $data =array();
      $data['customer_name']=$request->customerName;
      $data['customer_email']=$request->customerEmail;
      $data['customer_password']=md5($request->customerPassword);
      $data['customer_phone']=$request->customerPhone;

      $customer_id = DB::table('tbl_customer')->insertGetId($data);
      Session::put('customerId',$customer_id);
      Session::put('customerEmail',$request->customerEmail);
      Session::put('customerName',$request->customerName);
      return redirect('/loginPage');

    }
}
