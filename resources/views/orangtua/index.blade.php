@extends('layouts.masters')
@section('isi')
<div class=-"row">
		<center><h1>Data orangtua</h1></center>
		<div class="panel panel-primary">
		<div class ="panel-heading">Data orangtua
		<div class="panel-title pull-right"><a href="/orangtua/create"> Tambah Data </a></div></div>
		
		<div class="panel-body"></div>
		<table class="table">
				<thead>
			<tr>
				<th>Nama ayah</th>
				<th>Nama ibu</th>
				<th>Umur ayah</th>
				<th>Umur ibu</th>
				<th>Alamat</th>
				<th>Nama anak</th>
				<th colspan="3">Action</th>
			</tr>
			</thead>
			<tbody>
					@foreach($ortu as $data)
					<tr>
						<td>{{$data->nama_ayah}}</td>
						<td>{{$data->nama_ibu}}</td>
						<td>{{$data->umur_ayah}}</td>
						<td>{{$data->umur_ibu}}</td>
						<td>{{$data->alamat}}</td>
						<td>
						@foreach($data->siswa as $a)
							<li>{{$a->nama}}</li>
						@endforeach
						</td>
			
					<td>
						<a class="btn btn-warning" href="/orangtua/{{$data->id}}/edit">Edit</a> </td>
						<td>
						<td>
						<a class="btn btn-info" href="/orangtua/{{$data->id}}
						">Show</a> </td>
						<td>
						<form action="{{route('orangtua.destroy',$data->id)}}" method="post">
							
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" >
							<input type="submit" class="btn btn-danger" value="delete">
							{{csrf_field()}}
						</form>
					</td>

					</tr>
					@endforeach
			</tbody>

		

		
		</div>
</div>


@endsection