@extends('admin.layout.app')


@section('content')

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            <span class="font-weight-bold">
            <?php $customers= DB::table('customers')->where('id',$detail->id)->first(); ?>   {{ $customers->name_surname }}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Rezervasyon Detay Bilgileri</h4>
                </div>
                <div class="row mt-3">     
                <div class="col-md-12"><label class="labels">Tedavi</label><input type="text" class="form-control"
                 value="<?php $branchs= DB::table('branchs')->where('id',$detail->id)->first(); ?>{{ $branchs->branch_name }}"></div>

                <div class="col-md-12"><label class="labels">İlgili Doktor</label><input type="text" class="form-control" 
                 value="<?php $doctors= DB::table('doctors')->where('id',$detail->id)->first(); ?>{{$doctors->doctor_name_surname}}"></div>
                 
                <div class="col-md-12"><label class="labels">Tarih</label><input type="text" class="form-control" value="{{$detail->reservation_date}}"></div>
                <div class="col-md-12"><label class="labels">Rezervasyon Türü</label><input type="text" class="form-control"
                 value="<?php $reservation_types= DB::table('reservation_types')->where('id',$detail->id)->first(); ?>{{ $reservation_types->name }}"></div>
                <div class="col-md-12"><label class="labels">İşlem Yeri</label><input type="text" class="form-control" value="{{$detail->surgery_location}}"></div>
                </div> 
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <br><br><br>
                <div class="col-md-12"><label class="labels">Ücret</label><input type="text" class="form-control" value="{{$detail->price}}"></div> <br>
                <div class="col-md-12"><label class="labels">Notlar</label><input type="text" class="form-control" value="{{$detail->notes}}"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection

