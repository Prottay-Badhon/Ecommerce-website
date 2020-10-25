<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
class cartController extends Controller
{
    public function showCart(Request $request ,$id){
    $product =DB::table('tbl_products')->where('product_id',$id)->first();
      $data['qty'] =$request->quantity;
      $data['id'] =$request->productId;
      $data['weight']=0.00;
      $data['price']=$product->product_price;
      $data['name']=$product->product_name;

      $data['options']['image']=$product->product_image;
      Cart::add($data);
      return view('pages.addToCart');
    }

  public function displayCart(){
    return view('pages.addToCart');
  }
  public function deleteCard($deleteId){
    Cart::update($deleteId,0);

    if(Session::get('shippingId')){
      return redirect('/payment');
    }
    else
      return redirect('/display-cart');
  }

  public function updateCart(Request $request){
    $quantity = $request->quantity;
      $cartId = $request->rowId;
      Cart::update($cartId,$quantity);

      if(Session::get('shippingId')){
        return redirect('/payment');
      }
      else
        return redirect('/display-cart');

  }
}
