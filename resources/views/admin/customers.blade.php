@extends('admin.layout.app')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cinsiyet</th>
      <th scope="col">Hasta Adı Soyadı</th>
      <th scope="col">Telefon</th>
      <th scope="col">Mail Adresi</th>
      <th scope="col">İlgi Duyulan Tedavi</th>
      <th scope="col">Hasta Kaynağı</th>
      <th scope="col">Hızlı</th>
    </tr>
  </thead>
  <tbody>

  
      @foreach($customers as $customer)
    <tr>
      <th scope="row">{{$customer->id}}</th> 

      <?php $cinsiyet = DB::table('cinsiyet')->where('id',$customer->gender)->first(); ?>
      <td>{{$cinsiyet->cinsiyet_name}} </td> 

      <td>{{$customer->name_surname}}</td>
      <td>{{$customer->phone}}</td>
      <td>{{$customer->email}}</td>

      <?php $branchs = DB::table('branchs')->where('id',$customer->branch_id)->first(); ?>
      <td>{{$branchs->branch_name	}} </td> 

      <?php $customer_source = DB::table('customer_source')->where('id',$customer->source)->first(); ?>
      <td>{{$customer_source->customerSource}} </td>
      <td>
         <a class="btn btn-warning" href="{{ route('customerDetail',['id'=>$customer->id]) }}">Detay</a> 
         <a class="btn btn-success" href="{{ route('customerEdit',['id'=>$customer->id]) }}">Düzenle</a>
         <a class="btn btn-danger" href="{{ route('customerDelete',['id'=>$customer->id]) }}">Sil</a>
       </td>
    </tr>
      @endforeach
    
  </tbody>
</table>
@endsection