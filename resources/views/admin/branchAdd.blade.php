@extends('admin.layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card card-default color-palette-box">
            <div class="card-body">
                <div class="col-12">
                <form action="{{ route('branchSave')}}" method="POST">
                    @csrf()
                    <div class="form-group row">
                        <label for="branch_name" class="col-4 col-form-label">Branş Adı</label> 
                        <div class="col-8">
                            <input id="branch_name" name="branch_name" type="text" class="form-control">
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
</section>

<div class="alert alert-success" role="alert">
    {{ Session::get('durum')  }}
</div>

@endsection