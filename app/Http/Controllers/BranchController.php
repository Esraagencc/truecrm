<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function branchs(){
      $branchs = DB::table('branchs')->get();
      return view('admin.branchs',[
      'branchs'=>$branchs
      ]);
      
     }
     public function branchAdd(){
        return view('admin.branchAdd');
     }
     public function branchSave(Request $request){
      $ekle = DB::table('branchs')->insert([
         'branch_name' => $request->get('branch_name'),
         'clinic_id' => 1 
     ]);
     return redirect()->back()->with(["durum"=>"bölüm başarıyla eklendi."]);
   }
   public function branchDelete($id){
      $delete = DB::table('branchs')->where('id',$id)->delete();
      return redirect()->back()->with(["durum"=>"bölüm başarıyla silindi."]);
   }
}
