@extends('layouts.masters')
@section('isi')
<div class="row">
		<center><h1>Data siswa</h1></center>
		<div class="panel panel-primary">
		<div class="panel-heading">Data siswa
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>


		<form action="{{route('siswa.update',$siswa->id)}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token() }}">
				<label class="control-label">Nama </label>
				<input type="text" name="a" class="form-control" value="{{$siswa->nama}}" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Nama orangtua</label>
				<select class="form-control" value="{{$siswa->orangtua_id}}" name="b">
				@foreach($ortu as $data)
				<option value="{{$data->id}}">{{$data->nama_ayah}} dan
						 {{$data->nama_ibu}}</option>
				@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Umur </label>
				<input type="number" name="c" class="form-control" value="{{$siswa->umur}}" required="">
			</div>
		<div class="form-group">
				<label class="control-label">Jk</label><br>
				<input type="radio" name="d"  value="laki-laki">laki-laki<br>
				<input type="radio" name="d"  value="perempuan">perempuan
			</div>
			<div class="form-group">
				<label class="control-label">Alamat</label>
				<textarea class="form-control" rows="10" name="e" value="{{$siswa->alamat}}" required=""></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
		</form>
	</div>
</div>
</div>
@endsection