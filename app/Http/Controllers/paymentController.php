<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
class paymentController extends Controller
{
    public function payment(){
      return view('pages.payment');
    }

    public function insertPayment(Request $request){
      $paymentMethod = $request->paymentType;
      $pdata = array();
      $pdata['payment_method']=$paymentMethod;
      $pdata['payment_status']='pending';


      $paymentId = DB::table('tbl_payment')->insertGetId($pdata);

      //order table
      $odata =array();
      $odata['customer_id']= Session::get('logged_in');
      $odata['shipping_id']= Session::get('shippingId');
      $odata['payment_id']=$paymentId;
      $odata['order_total']=Cart::total();
      $odata['order_status']='pending';
      $orderId =DB::table('tbl_order')->insertGetId($odata);

      //order_details_table
      $contents = Cart::content();
      foreach ($contents as $row) {
        $orderData = array();
        $orderData['order_id']=  $orderId;
        $orderData['product_id']= $row->id;
        $orderData['product_name']= $row->name;
        $orderData['product_price']= $row->price;
        $orderData['product_sales_quantity']= $row->qty;
        $order_details_id = DB::table('tbl_order_details')->insertGetId($orderData);

      }
      if($paymentMethod =='handcash'){
          Session::put('handcashMessage','Thank you sir! We will contact with you very soon');
          Cart::destroy();
          Session::put('shippingId',null);
          return redirect()->back();

      }

      else if($paymentMethod =='bkash' OR $paymentMethod =='rocket' OR $paymentMethod =='nexuspay'){
          Session::put('notavailable','This payment method is not available now! Because API is not free');
          
          return redirect()->back();

      }
    }
}
