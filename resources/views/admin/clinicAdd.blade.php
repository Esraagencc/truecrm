@extends('admin.layout.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card card-default color-palette-box">
            <div class="card-body">
                <div class="col-12">
                <form action="{{ route('clinicSave')}}" method="POST">
                    @csrf()
                    <div class="form-group row">
                        <label for="clinic_name" class="col-4 col-form-label">Klinik Adı</label> 
                        <div class="col-8">
                        <input id="clinic_name" name="clinic_name" placeholder="Klinik adı girin" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="owner_name" class="col-4 col-form-label">Yetkili Adı</label> 
                        <div class="col-8">
                        <input id="owner_name" name="owner_name" placeholder="Yetkili adı girin" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-4 col-form-label">Klinik Telefonu</label> 
                        <div class="col-8">
                        <input id="phone" name="phone" placeholder="Klinik telefonu girin" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Mail Adresi</label> 
                        <div class="col-8">
                        <input id="email" name="email" placeholder="Mail adresi girin" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-4 col-form-label">Şifre</label> 
                        <div class="col-8">
                        <input id="password" name="password" placeholder="Şifrenizi girin" type="password" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-4 col-form-label">Adres</label> 
                        <div class="col-8">
                        <textarea id="address" name="address" cols="40" rows="3" class="form-control"></textarea>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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