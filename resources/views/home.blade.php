@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		
	<div class="col-sm-3">
			<div class="card text-center mb-3">
				<a href="/transaksi" style="text-decoration: none; color: inherit">	
					<div class="card-body">
						<h5 class="card-title">TRANSAKSI</h5><br>
						<div style="width: 10rem; height: 10rem; margin-left: auto; margin-right: auto">
							<img src="https://cdn.icon-icons.com/icons2/3184/PNG/512/transaction_icon_194111.png" class="card-img-top" alt="karyawan">
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="card text-center mb-3">
				<a href="/laporan" style="text-decoration: none; color: inherit">	
					<div class="card-body">
						<h5 class="card-title">LAPORAN</h5><br>
						<div style="width: 10rem; height: 10rem; margin-left: auto; margin-right: auto">
							<img src="https://www.pngmart.com/files/8/Report-PNG-Photos.png" class="card-img-top" alt="karyawan">
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="col-sm-3 mb-3 mb-sm-0" >
			<div class="card text-center mb-3">
				<a href="/inventory" style="text-decoration: none; color: inherit">
					<div class="card-body">
						<h5 class="card-title">INVENTORY</h5><br>
						<div style="width: 10rem; height: 10rem; margin-left: auto; margin-right: auto">
							<img src="https://th.bing.com/th/id/OIP.0bRTUYJgRDNMpTSAc_90fgHaHa?pid=ImgDet&rs=1" class="card-img-top" alt="inventory">
						</div>
					</div>
				</a>
			</div>
		</div>
		
		<div class="col-sm-3">
			<div class="card text-center mb-3">
				<a href="/karyawan" style="text-decoration: none; color: inherit">	
					<div class="card-body">
						<h5 class="card-title">KARYAWAN</h5><br>
						<div style="width: 10rem; height: 10rem; margin-left: auto; margin-right: auto">
							<img src="https://cdn.kibrispdr.org/data/637/icon-karyawan-png-31.png" class="card-img-top" alt="karyawan">
						</div>
					</div>
				</a>
			</div>
		</div>

	</div>
</div>
@endsection

