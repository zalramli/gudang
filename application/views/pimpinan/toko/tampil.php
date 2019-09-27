<div class="breadcomb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcomb-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="breadcomb-wp">
								<div class="breadcomb-icon">
									<i class="notika-icon notika-windows"></i>
								</div>
								<div class="breadcomb-ctn">
									<h2>Tabel Toko Yang Terdaftar</h2>
									<p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
							<div class="breadcomb-report">
								<button data-toggle="tooltip" data-placement="left" title="Download Report"
									class="btn"><i class="notika-icon notika-sent"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="data-table-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="data-table-list">
					<div class="basic-tb-hd">
						<a href="<?= base_url(); ?>pimpinan/toko/add"
							class="btn btn-success notika-btn-success waves-effect">Daftarkan Toko Baru</a>
					</div>
					<div class="table-responsive">
						<table id="data-table-basic" class="table table-striped">
							<thead>
								<tr>
									<th>Kode</th>
									<th>Nama Toko</th>
									<th>Alamat</th>
									<th>Jenis</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>J001</td>
									<td>LCC Komputer</td>
									<td>Lumajang</td>
									<td>Elektronik</td>
									<td>
										<a href="<?= base_url(); ?>pimpinan/toko/edit"> <i
												class="btn btn-primary fa fa-pencil-square"></i></a>
										<a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i
												class="btn btn-danger fa fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>K002</td>
									<td>CMC Komputer</td>
									<td>Lumajang</td>
									<td>Elektronik</td>
									<td>
										<a href="<?= base_url(); ?>pimpinan/toko/edit"> <i
												class="btn btn-primary fa fa-pencil-square"></i></a>
										<a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i
												class="btn btn-danger fa fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>K003</td>
									<td>Toko Alat Tulis</td>
									<td>Lumajang</td>
									<td>Alat Tulis</td>
									<td>
										<a href="<?= base_url(); ?>pimpinan/toko/edit"> <i
												class="btn btn-primary fa fa-pencil-square"></i></a>
										<a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i
												class="btn btn-danger fa fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>K004</td>
									<td>Toko Property</td>
									<td>Lumajang</td>
									<td>Property</td>
									<td>
										<a href="<?= base_url(); ?>pimpinan/toko/edit"> <i
												class="btn btn-primary fa fa-pencil-square"></i></a>
										<a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i
												class="btn btn-danger fa fa-trash"></i></a>
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Kode</th>
									<th>Nama Toko</th>
									<th>Alamat</th>
									<th>Jenis</th>
									<th>Aksi</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
