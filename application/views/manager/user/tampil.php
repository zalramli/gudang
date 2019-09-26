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
									<h2>Tabel User</h2>
									<p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
							<div class="breadcomb-report">
								<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
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
						<a href="<?= base_url(); ?>pimpinan/user/add" class="btn btn-success notika-btn-success waves-effect">Tambah User Baru</a>
					</div>
					<div class="table-responsive">
						<table id="data-table-basic" class="table table-striped">
							<thead>
								<tr>
									<th>Kode</th>
									<th>Nama</th>
									<th>Username</th>
									<th>Jenis Akses</th>
									<th>Nama Toko</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>U001</td>
									<td>Nama lengkap 1</td>
									<td>Username 1</td>
									<td>Admin</td>
									<td>Nama Toko 1</td>
									<td>
										<a href="<?= base_url(); ?>pimpinan/user/edit"> <i class="btn btn-primary fa fa-pencil-square"></i></a>
										<a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i class="btn btn-danger fa fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>U002</td>
									<td>Nama lengkap 2</td>
									<td>Username 2</td>
									<td>Manager</td>
									<td>Nama Toko 2</td>
									<td>
										<a href="<?= base_url(); ?>pimpinan/user/edit"> <i class="btn btn-primary fa fa-pencil-square"></i></a>
										<a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i class="btn btn-danger fa fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>U003</td>
									<td>Nama lengkap 3</td>
									<td>Username 3</td>
									<td>Kasir</td>
									<td>Nama Toko 3</td>
									<td>
										<a href="<?= base_url(); ?>pimpinan/user/edit"> <i class="btn btn-primary fa fa-pencil-square"></i></a>
										<a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i class="btn btn-danger fa fa-trash"></i></a>
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Kode</th>
									<th>Nama</th>
									<th>Username</th>
									<th>Jenis Akses</th>
									<th>Nama Toko</th>
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