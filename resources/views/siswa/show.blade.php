@extends('layouts.masters')
@section('isi')
<div class="row">
		<center><h1>Data siswa</h1></center>
		<div class="panel panel-primary">
		<div class="panel-heading">Data siswa
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>

	<div class="panel body">
			<div class="form-group">	
				<label class="control-label">Nama</label>
				<input type="text" name="a" value="{{$siswa->nama }}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">orangtua</label>
				<input type="text" name="b" value="{{$siswa->orangtua->nama_ayah}} dan {{$siswa->orangtua->nama_ibu}}"class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">Umur</label>
				<input type="number" name="c" value="{{$siswa->umur }}"class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">Alamat</label>
				<textarea class="form-control" rows="10" name="e" readonly="">{{$siswa->alamat}}</textarea>
			</div>
			
	</div>
</div>
</div>
@endsection