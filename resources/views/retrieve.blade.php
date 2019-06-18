@extends('layout')
@section('title')
Beranda
@endsection
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Pengarang</th>
      <th scope="col" colspan="3">Action</th>
    </tr>   
  </thead>
  <tbody>
    @if($buku->count())
    @foreach($buku as $buku)
    <tr>
        <td>{{$buku->id}}</td>
        <td>{{$buku->judul}}</td>
        <td>{{$buku->penerbit}}</td>
        <td>{{$buku->tahun_terbit}}</td>
        <td>{{$buku->pengarang}}</td>
        <td colspan="3">
          <a class="btn btn-dark" style="color: white !important">View</a>
          <a class="btn btn-primary" href="{{ action('Get@update') }}" role="button">Update</a>
          <form action="{{ action('Get@destroy', $buku->id) }}" method="get" style="display: inline-block;">
                <input class="btn btn-danger" type="submit" value="Delete">
            </form>
        </td>
        <!-- <td></td>
        <td>
            
        </td> -->
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
@endsection