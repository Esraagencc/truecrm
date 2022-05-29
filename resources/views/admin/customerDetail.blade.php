@extends('admin.layout.app')


@section('content')

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $detail->name_surname }}</span><span class="text-black-50">{{ $detail->email }}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Hasta Detay Bilgileri</h4>
                </div>
                
                <div class="row mt-3">
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Telefon Numarası</label><input type="text" class="form-control"  value="{{ $detail->phone }}"></div>
                    <div class="col-md-6"><label class="labels">Diğer Telefon</label><input type="text" class="form-control" value="{{ $detail->telephone }}"></div>
                </div>
                    
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Boy</label><input type="text" class="form-control"  value="{{ $detail->height }}"></div>
                    <div class="col-md-6"><label class="labels">Kilo</label><input type="text" class="form-control" value="{{ $detail->weight }}"></div>
                    <div class="col-md-6"><label class="labels">Yaş</label><input type="text" class="form-control" value="{{ $detail->age }}"></div>
                    <div class="col-md-6"><label class="labels">Cinsiyet</label><input type="text" class="form-control" 
                    value="<?php $cinsiyet= DB::table('cinsiyet')->where('id',$detail->id)->first(); ?>{{ $cinsiyet->cinsiyet_name }}"></div>
                  </div>
                  <div class="col-md-12"><label class="labels">Ev Adresi</label><input type="text" class="form-control"  value="{{ $detail->address }} {{ $detail->town }} {{ $detail->city }} {{ $detail->country }}"></div>
                    <div class="col-md-12"><label class="labels">Önceki Ameliyatlar</label><input type="text" class="form-control" value="{{ $detail->before_surgery }}"></div>
                    <div class="col-md-12"><label class="labels">Yan Hastalıklar</label><input type="text" class="form-control" value="{{ $detail->ill }}"></div>
                    <div class="col-md-12"><label class="labels">Notlar</label><input type="text" class="form-control" value="{{ $detail->notes }}"></div>
                    </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <br><br><br>
                <div class="col-md-12"><label class="labels">Hasta Kaynağı</label><input type="text" class="form-control" 
                value="<?php $customer_source= DB::table('customer_source')->where('id',$detail->id)->first(); ?>{{ $customer_source->customerSource }}"></div> <br>
                <div class="col-md-12"><label class="labels">Tedavi</label><input type="text" class="form-control" 
                value="<?php $branchs= DB::table('branchs')->where('id',$detail->id)->first(); ?>{{ $branchs->branch_name }}"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection

