@extends('admin.layout.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card card-default color-palette-box">
            <div class="card-body">
                <div class="col-12">
                <form action="{{ route('reservationEditSave',['id'=> $edit->id])}}" method="POST">
                    @csrf()
                        <div class="form-group row">
                            <label for="customer_id" class="col-4 col-form-label">Müşteri Seçin</label> 
                            <div class="col-8">
                            <select id="customer_id" name="customer_id" class="custom-select">
                            @foreach($customers as $customer)
                                <option @if($edit->customer_id == $customer->id) selected @endif value="{{ $customer->id }}">{{ $customer->name_surname }}</option>
                             @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="branch_id" class="col-4 col-form-label">Tedaviyi Seçin</label> 
                            <div class="col-8">
                            <select id="branch_id" name="branch_id" class="custom-select">
                            @foreach($branchs as $branch)
                            <option @if($edit->branch_id == $branch->id) selected @endif value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                            @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="doctor_id" class="col-4 col-form-label">Doktor Seçin</label> 
                            <div class="col-8">
                            <select id="doctor_id" name="doctor_id" class="custom-select">
                            @foreach($doctors as $doctor)
                                <option @if($edit->doctor_id == $doctor->id) selected @endif value="{{ $doctor->id }}">{{ $doctor->doctor_name_surname }}</option>
                            @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="reservation_date" class="col-4 col-form-label">Tarih Seçin</label> 
                            <div class="col-8">
                            <input id="reservation_date" value="{{ $edit->reservation_date }}" name="reservation_date" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="reservation_type_id" class="col-4 col-form-label">Rezervasyon Türü</label> 
                            <div class="col-8">
                            <select id="reservation_type_id" name="reservation_type_id" class="custom-select">
                            @foreach($reservation_types as $reservation_type)
                                <option @if($edit->reservation_type_id == $reservation_type->id) selected @endif value="{{ $reservation_type->id }}">{{ $reservation_type->name }}</option>
                            @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="surgery_location" class="col-4 col-form-label">İşlem Yeri</label> 
                            <div class="col-8">
                            <input id="surgery_location" value="{{ $edit->surgery_location }}" name="surgery_location" placeholder="İşlem yerini seçin" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-4 col-form-label">Ücret</label> 
                            <div class="col-8">
                            <input id="price" name="price" value="{{ $edit->price }}" placeholder="Tutar girin" type="text" class="form-control">
                            </div>
                        </div> 
                            <div class="form-group row">
                                <label for="notlar" class="col-4 col-form-label">Notlar</label> 
                                <div class="col-8">
                                <textarea id="notes" name="notes" cols="40" rows="4" class="form-control">{{ $edit->notes }}</textarea>
                                </div>
                            </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Güncelle</button>
                            </div>
                        </div>
                        </form>
                </div>
           </div>
        </div>
    </div>
    @if(Session::has('durum'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('durum')  }}
        </div>
    @endif

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
</section>
@endsection