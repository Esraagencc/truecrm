<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctors(){
        $branchs = DB::table('branchs')->get();
        $doctors = DB::table('doctors')->get();
        return view('admin.doctors',[
           'doctors'=> $doctors,
           'branchs'=> $branchs
        ]);
     }
     public function doctorAdd(){
        $branchs = DB::table('branchs')->get();
        return view('admin.doctorAdd',[
           "branchs" => $branchs
        ]);
     }
     public function doctorSave(Request $request){
      $validated = $request->validate([
         'doctor_name_surname' => 'required',
         'doctor_phone' => 'required',
         'doctor_branch_id' => 'required'
     ]);

      $ekle = DB::table('doctors')->insert([
         'doctor_name_surname' => $request->get('doctor_name_surname'),
         'doctor_phone' => $request->get('doctor_phone'),
         'doctor_email' => $request->get('doctor_email'),
         'doctor_branch_id' => $request->get('doctor_branch_id'),
         'clinic_id' => 1 
     ]);
     return redirect()->back()->with(["durum"=>"bölüm başarıyla eklendi."]);
   }
   public function doctorDelete($id){
      $delete = DB::table('doctors')->where('id',$id)->delete();
      return redirect()->back()->with(["durum"=>"bölüm başarıyla silindi."]);
}
}
