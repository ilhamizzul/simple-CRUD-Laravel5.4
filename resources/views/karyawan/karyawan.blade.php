@extends('layout.app')

@section('body')
<br>
@if(session()->has('message'))
  <h1 class="alert alert-success" style="text-align:center;">{{session()->get('message')}}</h1>
@endif
<a href="karyawan/create" class="btn btn-info">Tambah</a>
<div class="col-lg-8 col-lg-offset-2">
  <center><h1>Tabel karyawan</h1></center>
    <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>No.Pegawai</th>
      <th>Alamat</th>
      <th>opsi</th>
    </tr>
  </thead>
  @foreach($karyawans as $karyawan)
  <tbody>
    <tr>
      <td>{{$karyawan->id}}</td>
      <td>{{$karyawan->nama}}</td>
      <td>{{$karyawan->nopeg}}</td>
      <td>{{$karyawan->alamat}}</td>
      <td>
        <a href="{{'/karyawan/'.$karyawan->id}}" class="btn btn-info col-lg-4">Detail</a>
        <a href="{{'/karyawan/'.$karyawan->id.'/edit/'}}" class="btn btn-success col-lg-4">Edit</a>
        <form action="{{'/karyawan/'.$karyawan->id}}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <button type="submit" class="btn btn-danger col-lg-4">Hapus</button>
        </form>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>

@endsection
