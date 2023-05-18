@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Data Pegawai</title>
</head>
<body>
 
<header>
    <h1>Selamat Datang Di Aplikasi Kasir Toko Tahu Bulat & Sotong Enggal</h1>
	<nav class="navbar navbar-expand-lg bg-body-tertiary bg-yellow">
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
      </form>
    </div>
  </div>
</nav>

    </header>
 
	@foreach($transaksi as $l)
	<form action="/laporan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kd_transaksi" value="{{ $l->kd_transaksi }}"> <br/>
		<div class="form-group">
			<label for="tanggal_transaksi">Tanggal Transaksi</label>	
			<input type="date" class="form-control" name="tanggal_transaksi" required="required" value="{{ $l->tanggal_transaksi }}">
		</div>
		<div class="form-group">
			<label for="produk_terjual">Produk Terjual</label>	
			<input type="text" class="form-control" name="produk_terjual" required="required" value="{{ $l->produk_terjual }}">
		</div>
		<div class="form-group">
			<label for="kode_admin">Kode Admin</label>	
			<input type="text" class="form-control" name="kd_admin" required="required" value="{{ $l->kd_admin }}">
		</div>
		<div class="form-group">
			<label for="kode_produk">Kode Produk</label>	
			<input type="text" class="form-control" name="kd_produk" required="required" value="{{ $l->kd_produk }}">
		</div>
		<div class="form-group">
			<label for="kode_karyawan">Kode Karyawan</label>	
			<input type="text" class="form-control" name="kd_karyawan" required="required" value="{{ $l->kd_karyawan }}">
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
</body>
</html>
@endsection