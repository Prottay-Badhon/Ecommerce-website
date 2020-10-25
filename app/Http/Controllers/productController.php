<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class productController extends Controller
{
    public function showProduct(){
      $this->adminAuthCheck();

    $result = DB::table('tbl_products')
    ->join('categories','tbl_products.category_id','categories.id')->
    join('tbl_manufacture','tbl_products.manufacture_id','tbl_manufacture.manufacture_id')->select('tbl_products.*','categories.category_name','tbl_manufacture.manufacture_name')->get();
      //return response()->json($result);
     return view('admin.allProduct',compact('result'));
    }
    public function addProduct(){
      $this->adminAuthCheck();

      return view('admin.addProduct');
    }

    public function saveProduct(Request $request){
      $this->adminAuthCheck();
      $data =array();
      $data['product_name']=$request->productName;
      $data['category_id']=$request->categoryId;
      $data['manufacture_id']=$request->manufactureId;
      $data['product_short_description']=$request->shortDescription;
      $data['product_long_description']=$request->longDescription;
      $data['product_price']=$request->price;
      $data['product_size']=$request->productSize;
      $data['product_color']=$request->color;

      $data['publication_status']=$request->pbStatus;

      $image = $request->file('productImage');
      if($image){
        $imageName= str_random(10);
        $ext =strtolower($image->getClientOriginalExtension());
        $imgFullName=$imageName.'.'.$ext;
        $uploadPath = "image/";
        $imgUrl = $uploadPath.$imgFullName;
        $success =$image->move($uploadPath,$imgFullName);
        $data['Product_image']=$imgUrl;
        $insertProduct = DB::table('tbl_products')->insert($data);
          return redirect()->back();
      }
        else {
          $insertProduct = DB::table('tbl_products')->insert($data);
          return redirect()->back();

        }
    }


    public function unactive($id){
      $this->adminAuthCheck();
      $unactive = DB::table('tbl_products')->where('product_id',$id)->update(['publication_status'=>0]);
      if($unactive){
        return redirect()->back();
      }
    }
    public function active($id){
      $this->adminAuthCheck();
      $active = DB::table('tbl_products')->where('product_id',$id)->update(['publication_status'=>1]);
      if($active){
        return redirect()->back();
      }
    }
    public function deleteProduct($id){
      $this->adminAuthCheck();
      $delete = DB::table('tbl_products')->where('product_id',$id)->delete();
      if($delete){
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
