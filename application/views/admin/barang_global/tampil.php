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
									<h2>DATA BARANG GLOBAL</h2>
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
						<a href="<?= base_url(); ?>admin/barang_global/add"
							class="btn btn-success notika-btn-success waves-effect">Tambah
							Data</a>
					</div>
					<div class="table-responsive">
						<table id="data-table-basic" class="table table-striped">
							<thead>
								<tr>
									<th>Kode</th>
									<th>Gambar</th>
									<th>Merk</th>
									<th>Nama Barang</th>
									<th>Harga Beli</th>
									<th>Harga Jual</th>
									<th>Satuan</th>
									<th>Kategori</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>B001</td>
									<td><img src="../assets/template/img/dialog/like.png" alt=""></td>
									<td>Asus</td>
									<td>Asus X453 MA</td>
									<td>3.500.000</td>
									<td>4.000.000</td>
									<td>Pcs</td>
									<td>Laptop</td>
									<td>
										<a href="<?= base_url(); ?>admin/merk_barang/edit"> <i
												class="btn btn-primary fa fa-pencil-square"></i></a>
										<a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i
												class="btn btn-danger fa fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>B002</td>
									<td><img src="../assets/template/img/dialog/like.png" alt=""></td>
									<td>Vivo</td>
									<td>Vivo v15 Pro</td>
									<td>2.500.000</td>
									<td>3.000.000</td>
									<td>Pcs</td>
									<td>Smartphone</td>
									<td>
										<a href=""> <i class="btn btn-primary fa fa-pencil-square"></i></a>
										<a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i
												class="btn btn-danger fa fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>B003</td>
									<td><img src="../assets/template/img/dialog/like.png" alt=""></td>
									<td>Logitech</td>
									<td>Keyboard logitech 435</td>
									<td>450.000</td>
									<td>600.000</td>
									<td>Pcs</td>
									<td>Aksesoris</td>
									<td>
										<a href=""> <i class="btn btn-primary fa fa-pencil-square"></i></a>
										<a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i
												class="btn btn-danger fa fa-trash"></i></a>
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Kode</th>
									<th>Gambar</th>
									<th>Merk</th>
									<th>Nama Barang</th>
									<th>Harga Beli</th>
									<th>Harga Jual</th>
									<th>Satuan</th>
									<th>Kategori</th>
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
