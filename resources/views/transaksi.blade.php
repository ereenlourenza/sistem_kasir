@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Transaksi | Toko Tahu Bulat & Sotong Enggal</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="card">
<div class="card-body">
<header>
    <h1>Transaksi</h1>
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

	<div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card">
				<form action="/transaksi/store" method="post" class="form-inline">
					{{ csrf_field() }}
                    Tanggal <input type="date" class="form-control" name="tanggal_transaksi" required="required">
					Kode Produk<input type="text" class="form-control" name="kd_produk" required="required"> <br/>
					Harga Produk <input type="text" class="form-control" name="harga_produk" required="required"></text> <br/>
					Jumlah <input type="text" class="form-control" name="jumlah_beli" required="required"> <br/>
                    <div class="input-group col-sm-10">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" class="form-control" name="harga_total" required="required" readonly value=0>
                    </div>	    
					<input type="submit" class="btn btn-primary float-right" value="Simpan Data">
				</form>
            </div>
        </div>
		
        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-header">
                    Pembayaran
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Total Harga</label>

                            <div class="input-group col-sm-10">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" class="form-control" name="harga_total">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jumlah Bayar</label>

                            <div class="input-group col-sm-10">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" class="form-control" name="pay-total" placeholder="0" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="date" value="{{ date('d F Y') }}" disabled>
                            </div>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary float-right">Bayar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

	<table class="table table-bordered">
		<tr>
			<th>Kode Transaksi</th>
            <th>Tanggal Transaksi</th>
			<th>Kode Produk</th>
			<th>Harga Produk</th>
			<th>Jumlah</th>
			<th>Harga Total</th>
			<th>Opsi</th>
		</tr>
		@foreach($detail_transaksi as $dt)
		<tr>
			<td scope="row">{{ $loop->iteration}}</td>
            <td>{{ $dt->tanggal_transaksi}}</td>
			<td>{{ $dt->kd_produk }}</td>
			<td>{{ $dt->harga_produk}}</td>
            <td>{{ $dt->jumlah_beli }}</td>
            <td>{{ $dt->harga_total += $dt->harga_produk * $dt->jumlah_beli}}</td>	
			<td>	
				<a class="btn btn-danger btn-sm" href="/transaksi/hapus/{{ $dt->kd_detail_transaksi }}">Hapus</a>
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
