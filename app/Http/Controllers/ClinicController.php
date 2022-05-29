<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function clinics(){
      $clinics = DB::table('clinics')->get();
        return view('admin.clinics',[
       'clinics'=>$clinics
        ]);
     }
     public function clinicAdd(){
        return view('admin.clinicAdd');
     }
     public function clinicSave(Request $request){
      $validated = $request->validate([
         'clinic_name' => 'required',
         'email' => 'required',
         'password' => 'required',
         'phone' => 'required'
     ]);

      $ekle = DB::table('clinics')->insert([
         'clinic_name' => $request->get('clinic_name'),
         'owner_name' => $request->get('owner_name'),
         'phone' => $request->get('phone'),
         'email' => $request->get('email'),
         'password' => $request->get('password'),
         'address' => $request->get('address'),
     ]);
     return redirect()->back()->with(["durum"=>"bölüm başarıyla eklendi."]);
   }
}
