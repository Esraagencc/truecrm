@extends('admin.layout.app')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Klinik Adı</th>
      <th scope="col">Yetkili Adı</th>
      <th scope="col">Klinik Telefonu</th>
      <th scope="col">Mail Adresi</th>
      <th scope="col">Şifre</th>
      <th scope="col">Adres</th>
      <th scope="col">Hızlı</th>
    </tr>
  </thead>
  <tbody>

  
      @foreach($clinics as $clinic)
    <tr>
      <th scope="row">{{$clinic->id}}</th>
      <td>{{$clinic->clinic_name}}</td>
      <td>{{$clinic->owner_name}}</td>
      <td>{{$clinic->phone}} </td>
      <td>{{$clinic->email}} </td>
      <td>{{$clinic->password}}</td>
      <td>{{$clinic->address}}</td>
      <td>Düzenle butonu gelecek</td>
    </tr>
      @endforeach
    
  </tbody>
</table>
@endsection