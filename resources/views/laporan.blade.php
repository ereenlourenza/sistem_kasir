@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Laporan | Toko Tahu Bulat & Sotong Enggal</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<!--<script src="https://cdn.tailwindcss.com"></script>-->
</head>
<body>
<div class="container">
<div class="card">
<div class="card-body">
<header>
    <h1>Laporan</h1>
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
				<form class="d-flex" role="search">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>

    </header>
	
	<br/>
	<br/>
	<div class="form-group">
					
	</div>
 
	<table class="table table-bordered">
		<tr>

			<th>#</th>
			<th>Tanggal Transaksi</th>
			<th>Jumlah Terjual</th>
		</tr>
		@foreach($laporan as $l)
		<tr>
			<td scope="row">{{ $loop->iteration}}</td>
            <td>{{ $l->tanggal_transaksi}}</td>
			<td>{{ $l->jumlah_beli}}</td>
			<td>
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