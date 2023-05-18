@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Karyawan | Toko Tahu Bulat & Sotong Enggal</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="card">
<div class="card-body">
<header>
    <h1>Karyawan</h1>
	<nav class="navbar navbar-expand-md navbar-light bg-info shadow-sm">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/home">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="/transaksi">Transaksi</a></li>
							<li><a class="dropdown-item" href="/laporan">Laporan</a></li>
							<li><a class="dropdown-item" href="/inventory">Inventory</a></li>
							<li><a class="dropdown-item" href="/karyawan">Karyawan</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

    </header>

	<br/>
	<br/>
	<div class="form-group">
					
	</div>
	<form action="/karyawan/store" method="post" class="form-inline">
		{{ csrf_field() }}
		
		<div class="form-group">
			<label for="nama">Nama</label>	
			<input type="text" class="form-control" id="formGroupExampleInput"name="nama_karyawan" required="required">
		</div>
		<div class="form-group">
			<label for="telepon">Telepon</label>	
			<input type="text" class="form-control" id="formGroupExampleInput" name="tlpn_karyawan" required="required">
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>	
			<input type="text" class="form-control" id="formGroupExampleInput" name="alamat" required="required">
		</div>
		<br>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>

	
	
	<br>
	<table class="table table-bordered">
		<tr>
			<th>Kode</th>
			<th>Nama Lengkap</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		
		@foreach($karyawan as $k)
		<tr>
			<td scope="row">{{ $loop->iteration}}</td>
			<td>{{ $k->nama_karyawan }}</td>
			<td>0{{ $k->tlpn_karyawan }}</td>
			<td>{{ $k->alamat }}</td>
			<td>
				<a class="btn btn-warning btn-sm" href="/karyawan/edit/{{ $k->kd_karyawan }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/karyawan/hapus/{{ $k->kd_karyawan }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>Toko Enggal Tahu Bulat & Sotong 2018 - 2023</p>
	</footer>
</div>
</div>
</div>
</body>
</html>
@endsection