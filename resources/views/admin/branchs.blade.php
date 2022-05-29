@extends('admin.layout.app')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Branş Adı</th>
      <th scope="col">Hızlı</th>
    </tr>
  </thead>
  <tbody>

  @foreach($branchs as $branch)
    <tr>
      <th scope="row">{{$branch->id}}</th>
      <td>{{$branch->branch_name }}</td>
      <td> Detay | Düzenle | 
        <a class="btn btn-danger" href="{{ route('branchDelete',['id'=>$branch->id]) }}">Sil</a>
       </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection