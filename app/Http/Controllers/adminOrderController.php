<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class adminOrderController extends Controller
{
  public function manageOrder(){
    $result = DB::table('tbl_order')
    ->join('tbl_customer','tbl_order.customer_id','tbl_customer.customer_id')
    ->select('tbl_order.*','tbl_customer.customer_name')
    ->get();
    return view('admin.manageOrder',compact('result'));
  }
  public function viewOrder($order_id){
    $result = DB::table('tbl_order')
 ->join('tbl_customer','tbl_order.customer_id','tbl_customer.customer_id')
 ->join('tbl_order_details','tbl_order.order_id','tbl_order_details.order_id')

 ->join('tbl_shipping','tbl_order.shipping_id','tbl_shipping.shipping_id')
->select('tbl_order.*','tbl_order_details.*','tbl_customer.*','tbl_shipping.*')
->where('tbl_order_details.order_id',$order_id)
->get();
  return view('admin.viewOrder',compact('result'));


}
}
