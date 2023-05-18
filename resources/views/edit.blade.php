@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Data Pegawai</title>
</head>
<body>
<div class="container">
<div class="card">
<div class="card-body">
<header>
    <h1>Selamat Datang Di Aplikasi Kasir Toko Tahu Bulat & Sotong Enggal</h1>
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
 
	@foreach($karyawan as $k)
  <form action="/karyawan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kd_karyawan" value="{{ $k->kd_karyawan }}"> <br/>
		<div class="form-group">
			<label for="nama_lengkap">Nama Lengkap</label>	
			<input type="text" class="form-control" name="nama_karyawan" required="required" value="{{ $k->nama_karyawan }}">
		</div>
		<div class="form-group">
			<label for="tlpn_karyawan">Telepon</label>	
			<input type="text" class="form-control" name="tlpn_karyawan" required="required" value="0{{ $k->tlpn_karyawan }}">
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>	
			<input type="text" class="form-control" name="alamat" required="required" value="{{ $k->alamat }}">
		</div>
		<br>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
	@endforeach
		
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