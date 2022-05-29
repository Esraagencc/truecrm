<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reservations(){
      $customers = DB::table('customers')->get();
      $branchs = DB::table('branchs')->get();
      $doctors = DB::table('doctors')->get();
      $reservations=DB::table('reservations')->get();
      $reservation_types=DB::table('reservation_types')->get();
        return view('admin.reservations',[
          'customers'=>$customers,
          'branchs'=>$branchs,
          'doctors'=>$doctors,
          'reservations'=>$reservations,
          'reservation_types'=>$reservation_types
        ]);
     }
     public function reservationAdd(){
      $customers = DB::table('customers')->get();
      $branchs = DB::table('branchs')->get();
      $doctors = DB::table('doctors')->get();
      $reservation_types=DB::table('reservation_types')->get();
        return view('admin.reservationAdd', [
        "customers" => $customers,
        "branchs" => $branchs,
        "doctors" => $doctors,
        'reservation_types'=>$reservation_types
      ]);
     }
     public function reservationSave(Request $request){
      $validated = $request->validate([
         'customer_id' => 'required',
         'branch_id' => 'required',
         'reservation_date' => 'required',
         'doctor_id' => 'required',
         'reservation_type_id' => 'required',
         'surgery_location' => 'required'
     ]);
     $ekle = DB::table('reservations')->insert([
      'customer_id' => $request->get('customer_id'),
      'branch_id' => $request->get('branch_id'),
      'doctor_id' => $request->get('doctor_id'),
      'reservation_date' => $request->get('reservation_date'),
      'reservation_type_id' => $request->get('reservation_type_id'),
      'surgery_location' => $request->get('surgery_location'),
      'price' => $request->get('price'),
      'notes' => $request->get('notes'),
      'clinic_id' => 1

     ]);
    return redirect()->back()->with(["durum"=>"bölüm başarıyla eklendi."]);
   }
   public function reservationDelete($id){
    $delete = DB::table('reservations')->where('id',$id)->delete();
    return redirect()->back()->with(["durum"=>"bölüm başarıyla silindi."]);
 }
   public function reservationDetail($id){
   $customers = DB::table('customers')->get();
   $reservation_types=DB::table('reservation_types')->get();
   $branchs = DB::table('branchs')->get();
   $doctors = DB::table('doctors')->get();
   $detail = DB::table('reservations')->where('id',$id)->first(); 
   return view('admin.reservationDetail',[
      'detail' => $detail,
      "doctors" => $doctors,
      "branchs" => $branchs,
      'customers'=>$customers,
      'reservation_types'=>$reservation_types
  ]);
  }
    public function reservationEdit($id){
      $edit = DB::table('reservations')->where('id',$id)->first();
      $customers = DB::table('customers')->get();
      $reservation_types=DB::table('reservation_types')->get();
      $doctors = DB::table('doctors')->get();
      $branchs = DB::table('branchs')->get();
      $customer_source = DB::table('customer_source')->get();
      $cinsiyet = DB::table('cinsiyet')->get();
      return view('admin.reservationEdit',[
            'edit' => $edit,
            'customers'=>$customers,
            'reservation_types'=>$reservation_types,
            "doctors" => $doctors,
            "customer_source" => $customer_source,
            "cinsiyet" => $cinsiyet,
            "branchs" => $branchs
      ]);
  }
  public function reservationEditSave($id,Request $request){
        
    $update = DB::table('reservations')->where('id',$id)->update([
      'customer_id' => $request->get('customer_id'),
      'branch_id' => $request->get('branch_id'),
      'doctor_id' => $request->get('doctor_id'),
      'reservation_date' => $request->get('reservation_date'),
      'reservation_type_id' => $request->get('reservation_type_id'),
      'surgery_location' => $request->get('surgery_location'),
      'price' => $request->get('price'),
      'notes' => $request->get('notes'),
      'clinic_id' => 1
    ]);
    return redirect()->back()->with(["durum"=>"bölüm başarıyla güncellendi."]);
 }

}

