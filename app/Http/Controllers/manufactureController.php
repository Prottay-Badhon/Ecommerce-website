<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();
class manufactureController extends Controller
{
    public function showManufacture(){
      $this->adminAuthCheck();

      $result = DB::table('tbl_manufacture')->get();
      return view('admin.allManufacture',compact('result'));
    }

    public function addManufacture(){
      $this->adminAuthCheck();

      return view('admin.addManufacture');
    }

    public function uploadManufacture(Request $request){
      $this->adminAuthCheck();

      $data =array();
      $data['manufacture_name']=$request->manufactureName;
      $data['manufacture_description']=$request->manufactureDescription;
      $data['publication_status']=$request->pbStatus;

      if(
         $data['manufacture_name']!=null AND $data['manufacture_description']!=null AND $data['publication_status']!=null
       ){
        $manufacture = DB::table('tbl_manufacture')->insert($data);
        if($manufacture){
          session::put('message','successfuly manufacture added!');
          return redirect()->back();

        }
      }
      else
      session::put('error','please fill up all field!');
      return redirect()->back();
    }

    public function deleteManufacture($id){
      $this->adminAuthCheck();

      $deleteManu=DB::table('tbl_manufacture')
      ->where('manufacture_id',$id)->delete();
      if($deleteManu){
        return redirect()->back();
      }
    }
    public function editManufacture($id){
      $this->adminAuthCheck();

        $result = DB::table('tbl_manufacture')->where('manufacture_id',$id)->first();
        return view('admin.editManufacture',compact('result'));

    }


      public function updateManufacture(Request $request,$id){
        $this->adminAuthCheck();

       $data=array();
       $data['manufacture_name']=$request->manufactureName;
       $data['manufacture_description']=$request->manufactureDescription;
       $data['publication_status']=$request->pbStatus;
       $editManu=DB::table('tbl_manufacture')->where('manufacture_id',$id)->update($data);
       if($editManu){
         return Redirect()->route('allManufacture');
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
    //public function shobwbyBrand($id){
    //  $findBrand =DB::table('tbl_products')->where('manufacture_id',$id)->get();
      //return view('pages.homeContent',compact('findBrand'));
     //}

}
