@extends('admin.layout.app')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Müşteri Adı Soyadı</th>
      <th scope="col">Tedavi</th>
      <th scope="col">İlgili Doktor</th>
      <th scope="col">Tarih</th>
      <th scope="col">Rezarvasyon Türü</th>
      <th scope="col">İşlem Yeri</th>
      <th scope="col">Ücret</th>
      <th scope="col">Notlar</th>
      <th scope="col">Hızlı</th>

    </tr>
  </thead>
  <tbody>

  
      @foreach($reservations as $reservation)
    <tr>
      <th scope="row">{{$reservation->id}}</th>
      <?php $customer = DB::table('customers')->where('id',$reservation->customer_id)->first(); ?>
      <td>{{  $customer->name_surname}} </td>

      <?php $branch = DB::table('branchs')->where('id',$reservation->branch_id)->first(); ?>
      <td>{{  $branch->branch_name }} </td>

      <?php $doctor = DB::table('doctors')->where('id',$reservation->doctor_id)->first(); ?>
      <td>{{  $doctor->doctor_name_surname }} </td>

      <td>{{$reservation->reservation_date}}</td>

      <?php $reservation_type = DB::table('reservation_types')->where('id',$reservation->reservation_type_id)->first(); ?>
      <td>{{  $reservation_type->name}} </td>

      <td>{{$reservation->surgery_location}}</td>
      <td>{{$reservation->price}} </td>
      <td>{{ $reservation->notes }} </td>
      <td> 
        <a class="btn btn-warning" href="{{ route('reservationDetail',['id'=>$reservation->id]) }}">Detay</a>
        <a class="btn btn-success" href="{{ route('reservationEdit',['id'=>$reservation->id]) }}">Düzenle</a> 
        <a class="btn btn-danger" href="{{ route('reservationDelete',['id'=>$reservation->id]) }}">Sil</a>
       </td>
    </tr>
      @endforeach
    
  </tbody>
</table>
@endsection