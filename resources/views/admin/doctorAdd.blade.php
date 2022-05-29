@extends('admin.layout.app')

@section('content')

<section class="content">

    <div class="container-fluid">
        <div class="card card-default color-palette-box">
            <div class="card-body">
                <div class="col-12">
                <form action="{{ route('doctorSave')}}" method="POST">
                  @csrf()
                    <div class="form-group row">
                    <label for="doctor_name_surname" class="col-4 col-form-label">Adı Soyadı</label> 
                    <div class="col-8">
                    <input id="doctor_name_surname" name="doctor_name_surname" placeholder="Doktor adı girin" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="doctor_phone" class="col-4 col-form-label">Telefon Numarası</label> 
                    <div class="col-8">
                    <input id="doctor_phone" name="doctor_phone" placeholder="Doktorun telefon numarasını girin" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="doctor_email" class="col-4 col-form-label">Mail Adresi</label> 
                    <div class="col-8">
                    <input id="doctor_email	" name="doctor_email" placeholder="Doktorun mail adresini girin" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Uzmanlık Alanı</label> 
                    <div class="col-8">
                    <select id="select" name="doctor_branch_id" class="custom-select">
                        @foreach($branchs as $branch)
                            <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Ekle</button>
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