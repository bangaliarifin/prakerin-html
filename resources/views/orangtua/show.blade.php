@extends('layouts.masters')
@section('isi')
<div class="row">
		<center><h1>Data orangtua</h1></center>
		<div class="panel panel-primary">
		<div class="panel-heading">Data orangtua
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>

	<div class="panel body">
			<div class="form-group">	
				<label class="control-label">Nama ayah</label>
				<input type="text" name="a" value="{{$ortu->nama_ayah }}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">Nama ibu</label>
				<input type="text" name="b" value="{{$ortu->nama_ibu }}"class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">Umur ayah</label>
				<input type="number" name="c" value="{{$ortu->umur_ayah }}"class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">Umur ibu</label>
				<input type="number" name="d" value="{{$ortu->umur_ibu }}"class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">Alamat</label>
				<textarea class="form-control" rows="10" name="e" readonly="">{{$ortu->alamat}}</textarea>
			</div>
			
	</div>
</div>
</div>
@endsection