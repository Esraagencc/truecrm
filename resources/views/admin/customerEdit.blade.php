@extends('admin.layout.app')

@section('content')

<section class="content">
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
    <div class="container-fluid">
        <div class="card card-default color-palette-box">
            <div class="card-body">
                <div class="col-12">
                <form action="{{ route('customerEditSave',['id'=> $edit->id])}}" method="POST">
                @csrf()
                <div class="form-group row">
                            <label for="source" class="col-4 col-form-label">Hasta Kaynağı</label> 
                            <div class="col-8">
                            <select id="source" name="source" class="custom-select">
                            @foreach($customer_source as $customerr_source)
                              <option @if($edit->source == $customerr_source->id) selected @endif value="{{ $customerr_source->id }}">{{ $customerr_source->customerSource }}</option>
                             @endforeach
                            </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="branch_id" class="col-4 col-form-label">İlgi Duyulan Tedavi</label> 
                            <div class="col-8">
                            <select id="branch_id" name="branch_id" class="custom-select">
                            @foreach($branchs as $branch)
                            <option @if($edit->branch_id == $branch->id) selected @endif value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                            @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_surname" class="col-4 col-form-label">Ad Soyad</label> 
                            <div class="col-8">
                            <input id="name_surname" name="name_surname" value="{{ $edit->name_surname }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-4 col-form-label">Telefon</label> 
                            <div class="col-8">
                            <input id="phone" name="phone" value="{{ $edit->phone }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telephone" class="col-4 col-form-label">Telefon2</label> 
                            <div class="col-8">
                            <input id="telephone" name="telephone" value="{{ $edit->telephone }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">Mail Adresi</label> 
                            <div class="col-8">
                            <input id="email" name="email" value="{{ $edit->email }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="height" class="col-4 col-form-label">Boy</label> 
                            <div class="col-8">
                            <input id="height" name="height" value="{{ $edit->height }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="weight" class="col-4 col-form-label">Kilo</label> 
                            <div class="col-8">
                            <input id="weight" name="weight" value="{{ $edit->weight }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-4 col-form-label">Cinsiyet</label> 
                            <div class="col-8">
                            <select id="gender" name="gender" class="custom-select">
                            @foreach($cinsiyet as $ciinsiyet)
                            <option @if($edit->gender == $ciinsiyet->id) selected @endif value="{{ $ciinsiyet->id }}">{{ $ciinsiyet->cinsiyet_name }}</option>
                            @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-4 col-form-label">Yaş</label> 
                            <div class="col-8">
                            <input id="age" name="age" value="{{ $edit->age }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-4 col-form-label">Ülke</label> 
                            <div class="col-8">
                            <input id="country" name="country" value="{{ $edit->country }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-4 col-form-label">İl</label> 
                            <div class="col-8">
                            <input id="city" name="city" value="{{ $edit->city }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-4 col-form-label">İlçe</label> 
                            <div class="col-8">
                            <input id="town" name="town" value="{{ $edit->town }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="town" class="col-4 col-form-label">Adres</label> 
                            <div class="col-8">
                            <input id="address" name="address" value="{{ $edit->address }}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="before_surgery" class="col-4 col-form-label">Önceki Ameliyatlar</label> 
                            <div class="col-8">
                            <textarea id="before_surgery" name="before_surgery" cols="40" rows="4" class="form-control" >{{ $edit->before_surgery }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ill" class="col-4 col-form-label">Yan Hastalıklar</label> 
                            <div class="col-8">
                            <textarea id="ill" name="ill" cols="40" rows="4" class="form-control">{{ $edit->ill }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="notes" class="col-4 col-form-label">Notlar</label> 
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
</section>
@endsection