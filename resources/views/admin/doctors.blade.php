@extends('admin.layout.app')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Doktor Adı Soyadı</th>
      <th scope="col">Telefon Numarası</th>
      <th scope="col">Mail Adresi</th>
      <th scope="col">Uzmanlık Alanı</th>
      <th scope="col">Hızlı</th>
    </tr>
  </thead>
  <tbody>

  
      @foreach($doctors as $doctor)
    <tr>
      <th scope="row">{{$doctor->id}}</th>
      <td>{{$doctor->doctor_name_surname}}</td>
      <td>{{$doctor->doctor_phone}}</td>
      <td>{{$doctor->doctor_email}} </td>
      <?php $branch = DB::table('branchs')->where('id',$doctor->doctor_branch_id)->first(); ?>
      <td>{{  $branch->branch_name }} </td>
      <td> Detay | Düzenle | 
        <a class="btn btn-danger" href="{{ route('doctorDelete',['id'=>$doctor->id]) }}">Sil</a>
       </td>
    </tr>
      @endforeach
    
  </tbody>
</table>

@endsection