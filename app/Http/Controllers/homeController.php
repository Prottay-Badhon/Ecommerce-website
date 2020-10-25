<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class homeController extends Controller
{
    public function index(){
      $published_product = DB::table('tbl_products')
      ->join('categories','tbl_products.category_id','categories.id')->
      join('tbl_manufacture','tbl_products.manufacture_id','tbl_manufacture.manufacture_id')->where('tbl_products.publication_status',1)->limit(9)->get();
        //return response()->json($result);
      return view('pages.homeContent',compact('published_product'));
    }

    public function showProductByCategory($id){
      $published_product = DB::table('tbl_products')
      ->join('categories','tbl_products.category_id','categories.id')->
      join('tbl_manufacture','tbl_products.manufacture_id','tbl_manufacture.manufacture_id')->where('categories.id',$id)
      ->where('tbl_products.publication_status',1)->limit(9)->get();
        //return response()->json($result);
      return view('pages.productByCategory',compact('published_product'));
    }

    public function productByManufacture($id){
      $brand = DB::table('tbl_products')->join('tbl_manufacture','tbl_products.manufacture_id','tbl_manufacture.manufacture_id')->where('tbl_products.manufacture_id',$id)->where('tbl_products.publication_status',1)->limit(15)->get();
      return view('pages.productByManufacture',compact('brand'));

    }

    public function productDetails($id){
      $product = DB::table('tbl_products')
      ->where('product_id',$id)
      ->where('publication_status',1)->first();
      return view('pages.productDetails',compact('product'));

    }

    public function contactUs(){
      return view('pages.contactUs');
    }

    public function blog(){
      return view('pages.blog');
    }
    public function not_found_404(){
      return view('pages.not_found_404');

    }
}
