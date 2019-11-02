@extends('layouts.main')
@section('content')

<div class="container">

@if($errors->any())
@foreach($errors->all() as $error)

<div class="alert alert-danger" role="alert">
	{{ $error }}
</div>
@endforeach
@endif

	<h1> Form Mahasiswa </h1>

	<form class="text-center border border-light p-5" action="{{ route('update', $mahasiswa->id) }}" method="post">

		{{ csrf_field() }}

		<p class="h4 mb-4">Ubah Data Mahasiswa</p>

	    <input type="text" id="nim" name="nim" class="form-control mb-4" placeholder="Masukkan NIM" value="{{ $mahasiswa->nim }}">

	    <input type="text" id="nama" name="nama" class="form-control mb-4" placeholder="Masukkan Nama" value="{{ $mahasiswa->nama }}">

	    <input type="text" id="jurusan" name="jurusan" class="form-control mb-4" placeholder="Masukkan Jurusan" value="{{ $mahasiswa->jurusan }}">

	    <input type="text" id="jurusan" name="notelp" class="form-control mb-4" placeholder="Masukkan No. Telp" value="{{ $mahasiswa->telepon }}">

	    <button class="btn btn-info my-4 btn-block" type="submit">Ubah Data</button>


	</form>

</div>

@endsection
