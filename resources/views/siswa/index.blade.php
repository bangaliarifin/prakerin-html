@extends('layouts.masters')
@section('isi')
<div class=-"row">
		<center><h1>Data siswa</h1></center>
		<div class="panel panel-primary">
		<div class ="panel-heading">Data siswa
		<div class="panel-title pull-right"><a href="/siswa/create"> Tambah Data </a></div></div>
		
		<div class="panel-body"></div>
		<table class="table">
				<thead>
			<tr>
				<th>Nama</th>
				<th>Nama Orangtua</th>
				<th>Umur </th>
				<th>Alamat</th>
				<th colspan="3">Action</th>
			</tr>
			</thead>
			<tbody>
					@foreach($siswa as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->orangtua->nama_ayah}} dan
						 {{$data->orangtua->nama_ibu}}</td>
						<td>{{$data->umur}}</td>
						<td>{{$data->alamat}}</td>
			
					<td>
						<a class="btn btn-warning" href="/siswa/{{$data->id}}/edit">Edit</a> </td>
						<td>
						<td>
						<a class="btn btn-info" href="/siswa/{{$data->id}}
						">Show</a> </td>
						<td>
						<form action="{{route('siswa.destroy',$data->id)}}" method="post">
							
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