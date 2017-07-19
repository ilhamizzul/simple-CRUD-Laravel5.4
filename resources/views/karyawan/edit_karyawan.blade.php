@extends('layout.app')

@section('body')
<br>
<div class="col-lg-8 col-lg-offset-2">
    @include('karyawan.partials.errors')
<form class="form-horizontal" action="/karyawan/{{$item->id}}" method="post">
	{{csrf_field()}}
  {{method_field('PUT')}}
  <fieldset>
    <legend>
    	Edit Karyawan {{$item->id}}
    	<a href="/karyawan" class="btn btn-info pull-right">Kembali</a>
    </legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nama</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nama" value="{{$item->nama}}" placeholder="Nama">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">No. Pegawai</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nopeg" value="{{$item->nopeg}}" placeholder="Nomor Pegawai">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Alamat</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat">{{$item->alamat}}</textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
@endsection