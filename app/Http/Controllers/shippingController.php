<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class shippingController extends Controller
{
    public function insertShipping(Request $request){
      $data['shipping_email']=$request->shippingEmail;
      $data['shipping_name']=$request->shippingName;
      $data['shipping_address']=$request->shippingAddress;
      $data['shipping_number']=$request->shippingNumber;
      $data['shipping_city']=$request->shippingCity;

      $shippingId = DB::table('tbl_shipping')->insertGetId($data);
      Session::put('shippingId',$shippingId);
      return redirect('/payment');
    }
}
