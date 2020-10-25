<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class categoryController extends Controller
{
  public function allCategory(){
    $this->adminAuthCheck();
    $result = DB::table('categories')->get();
  //  return response()->json($result);
    return view('admin.allCategory',compact('result'));
  }

  public function editCategory($id){
    $this->adminAuthCheck();
    $result = DB::table('categories')->where('id',$id)->first();

    return view('admin.editCategory',compact('result'));
  }

  public function deleteCategory($id){
    $this->adminAuthCheck();
    $result = DB::table('categories')->where('id',$id)->delete();
    return redirect()->back();
  }

  public function updateCategory(Request $request,$id){
   $this->adminAuthCheck();
   $data=array();
   $data['category_name']=$request->catName;
   $data['description']=$request->description;
   $data['publication_status']=$request->pbStatus;
   $editCate=DB::table('categories')->where('id',$id)->update($data);
   if($editCate){
     $notification = array(
       'message' =>'successfully updated' ,
       'alert-type'=>'success'
     );
     return Redirect()->route('allCategory')->with($notification);
   }
  return redirect()->back();
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
