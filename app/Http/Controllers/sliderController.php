<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class sliderController extends Controller
{
    public function addSlider(){
      return view('admin.addSlider');
    }

    public function allSlider(){
      $slider = DB::table('tbl_slider')->get();
      return view('admin.allSlider',compact('slider'));
    }

    public function saveSlider(Request $request){
        $data =array();
        $data['publication_status']=$request->pbStatus;
        $ext=str_random(5);
      $image=$request->file('sliderImage');
      $orginalExt =strtolower($image->getClientOriginalExtension());
      $path="sliderImage/";
      $imageName =$ext.'.'.$orginalExt;
      $success =$image->move($path,$imageName);

      $imgUrl=$path.$imageName;
      $data['slider_image']=$imgUrl;
      $inserImage=DB::table('tbl_slider')->insert($data);
      if($inserImage){
        return redirect()->back();
      }

    }
    public function unactive($id){
      $unactive = DB::table('tbl_slider')->where('slider_id',$id)->update(['publication_status'=>0]);
      if($unactive){
        return redirect()->back();
      }
    }
    public function active($id){
      $active = DB::table('tbl_slider')->where('slider_id',$id)->update(['publication_status'=>1]);
      if($active){
        return redirect()->back();
      }
    }
    public function deleteSlider($id){
      $delete = DB::table('tbl_slider')->where('slider_id',$id)->delete();
      if($delete){
        return redirect()->back();
      }
    }
}
