@extends('layouts.masters')
@section('isi')
		@foreach ($ortu as $key ) 
		Nama Ayah :{{ $key->nama_ayah}} 
		Nama ibu :{{$key->nama_ibu}} 
		Umur ayah :{{$key->umur_ayah}}
		Umur ibu :{{$key->umur_ibu}}
		@foreach ($key->siswa as $data) 
			 <li> {{$data->nama}} </li>
		@endforeach
		<hr>
	@endforeach
@endsection