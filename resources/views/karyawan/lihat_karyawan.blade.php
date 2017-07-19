@extends('layout.app')

@section('body')
<br>
	<div class="col-lg-8 col-lg-offset-2">
		<div class="well bs-component">
            <form class="form-horizontal">
              	<fieldset>
              	  	<legend>
              	  		Data Karyawan {{$item->id}} 
              	  		<a href="/karyawan" class="btn btn-info pull-right">Kembali</a>
              	  	</legend>
              	  	<div class="form-group">
              	  	  	<label for="inputEmail" class="col-lg-2 control-label">Nama</label>
              	  	  	<div class="col-lg-10">
              	  	  	  	<input type="text" class="form-control" disabled="" value="{{$item->nama}}">
              	  	  	</div>
              	  	</div>
              	  	<div class="form-group">
              	  	  	<label for="inputEmail" class="col-lg-2 control-label">Nomor Pegawai</label>
              	  	  	<div class="col-lg-10">
              	  	  	  	<input type="text" class="form-control" disabled="" value="{{$item->nopeg}}">
              	  	  	</div>
              	  	</div>
              	  	<div class="form-group">
              	  	  	<label for="textArea" class="col-lg-2 control-label">Alamat</label>
              	  	  	<div class="col-lg-10">
              	  	  	  	<textarea class="form-control" rows="3" disabled="">{{$item->alamat}}</textarea>	
              	  	  	</div>
              	  	</div>
              	</fieldset>
            </form>
        </div>
    </div>
@endsection