<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customers(){
        $branchs = DB::table('branchs')->get();
        $customer_source = DB::table('customer_source')->get();
        $customers = DB::table('customers')->get();
        $cinsiyet = DB::table('cinsiyet')->get();
        return view('admin.customers',[
            "branchs" => $branchs,
            "customer_source" => $customer_source,
            "cinsiyet" => $cinsiyet,
            "customers" => $customers
        ]);
     }
     public function customerAdd(){
        $branchs = DB::table('branchs')->get();
        $customer_source = DB::table('customer_source')->get();
        $cinsiyet = DB::table('cinsiyet')->get();
        return view('admin.customerAdd',[
           "customer_source" => $customer_source,
           "cinsiyet" => $cinsiyet,
           "branchs" => $branchs
        ]);
     }
     public function customerSave(Request $request){
        $validated = $request->validate([
            'name_surname' => 'required',
            'phone' => 'required',
            'source' => 'required'
        ]);

        $ekle = DB::table('customers')->insert([
            'clinic_id' => $request->get('clinic_id'),
            'source' => $request->get('source'),
            'branch_id' => $request->get('branch_id'),
            'name_surname' => $request->get('name_surname'),
            'branch_id' => $request->get('branch_id'),
            'phone' => $request->get('phone'),
            'telephone' => $request->get('telephone'),
            'email' => $request->get('email'),
            'height' => $request->get('height'),
            'weight' => $request->get('weight'),
            'gender' => $request->get('gender'),
            'age' => $request->get('age'),
            'country' => $request->get('country'),
            'city' => $request->get('city'),
            'town' => $request->get('town'),
            'address' => $request->get('address'),
            'before_surgery' => $request->get('before_surgery'),
            'ill' => $request->get('ill'),
            'notes' => $request->get('notes'),
            'clinic_id' => 1 
        ]);
        return redirect()->back()->with(["durum"=>"bölüm başarıyla eklendi."]);
    }

    public function customerDelete($id){
       $delete = DB::table('customers')->where('id',$id)->delete();
       return redirect()->back()->with(["durum"=>"bölüm başarıyla silindi."]);
    }
    public function customerDetail($id){
        $detail = DB::table('customers')->where('id',$id)->first();
        $customer_source = DB::table('customer_source')->where('id',$id)->first();
        $cinsiyet = DB::table('cinsiyet')->get();
        $branchs = DB::table('branchs')->get();
        return view('admin.customerDetail',[
            'detail' => $detail,
            "branchs" => $branchs,
            "cinsiyet" => $cinsiyet,
            "customer_source" => $customer_source
        ]);
     }
     public function customerEdit($id){
        $edit = DB::table('customers')->where('id',$id)->first();
        $branchs = DB::table('branchs')->get();
        $customer_source = DB::table('customer_source')->get();
        $cinsiyet = DB::table('cinsiyet')->get();
        return view('admin.customerEdit',[
            'edit' => $edit,
            "customer_source" => $customer_source,
            "cinsiyet" => $cinsiyet,
            "branchs" => $branchs
        ]);
     }
     public function customerEditSave($id,Request $request){
        
        $update = DB::table('customers')->where('id',$id)->update([
            'clinic_id' => $request->get('clinic_id'),
            'source' => $request->get('source'),
            'branch_id' => $request->get('branch_id'),
            'name_surname' => $request->get('name_surname'),
            'branch_id' => $request->get('branch_id'),
            'phone' => $request->get('phone'),
            'telephone' => $request->get('telephone'),
            'email' => $request->get('email'),
            'height' => $request->get('height'),
            'weight' => $request->get('weight'),
            'gender' => $request->get('gender'),
            'age' => $request->get('age'),
            'country' => $request->get('country'),
            'city' => $request->get('city'),
            'town' => $request->get('town'),
            'address' => $request->get('address'),
            'before_surgery' => $request->get('before_surgery'),
            'ill' => $request->get('ill'),
            'notes' => $request->get('notes'),
            'clinic_id' => 1 
        ]);
        return redirect()->back()->with(["durum"=>"bölüm başarıyla güncellendi."]);
     }
}
