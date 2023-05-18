@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Inventory | Toko Tahu Bulat & Sotong Enggal</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="card">
<div class="card-body">
<header>
    <h1>Inventory</h1>
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
	<form action="/inventory/store" method="post" class="form-inline">
		{{csrf_field()}}

  <div class="form-group">
    <label for="nama">Nama Produk</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="nama_produk" required="required">
  </div>
  <br>
    <select class="form-select" aria-label="Default select example" name="kategori_produk">
      <option selected>Kategori Produk</option>
      <option value="Matang">Matang</option>
      <option value="Mentah">Mentah</option>
    </select>
  </br>  
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="deskripsi" required="required">
  </div>

  <label for="harga_produk">Harga Produk</label>
  <div class="input-group mb-3" name="harga_produk">
  <div class="input-group-prepend" name="harga_produk">
    <span class="input-group-text">Rp</span>
  </div>
  <input type="text" class="form-control" aria-label="Amount (to the nearest IDR)" name="harga_produk">
  <div class="input-group-append" name="harga_produk">
    <span class="input-group-text">,00</span>
  </div>
</div>
  <div class="form-group">
    <label for="Stok">Stok</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="stok" required="required">
  </div>
  <br>
  <input type="submit" class="btn btn-success" value="Simpan Data"></button>
</form>
<br>
 
	<table class="table table-bordered">
		<tr>

			<th>Kode Produk</th>
			<th>Nama Produk</th>
			<th>Deskripsi</th>
			<th>Kategori</th>
			<th>Harga Produk</th>
            <th>Stok</th>
			<th>Opsi</th>
		</tr>
    @foreach($gudang as $g)
		<tr>
			<td scope="row">{{ $loop->iteration}}</td>
			<td>{{ $g->nama_produk }}</td>
			<td>{{ $g->deskripsi }}</td>
            <td>{{ $g->kategori_produk }}</td>
            <td>{{ $g->harga_produk }}</td>
			<td>{{ $g->stok }}</td>
			<td>
				<a class="btn btn-warning btn-sm"  href="/inventory/editI/{{ $g->kd_produk }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/inventory/hapus/{{ $g->kd_produk }}">Hapus</a>
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
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
@endsection