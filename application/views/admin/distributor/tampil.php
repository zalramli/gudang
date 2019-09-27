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
									<h2>DATA DISTRIBUTOR</h2>
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
						<a href="<?= base_url(); ?>admin/distributor/add"
							class="btn btn-success notika-btn-success waves-effect">Tambah
							Data</a>
					</div>
					<div class="table-responsive">
						<table id="data-table-basic" class="table table-striped">
							<thead>
								<tr>
									<th>Kode</th>
									<th>Nama Distributor</th>
									<th>No Hp</th>
									<th>Alamat</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>D001</td>
									<td>PT Cemerlang Jaya</td>
									<td>082223342</td>
									<td>Jember</td>
									<td>
										<a href="<?= base_url(); ?>admin/distributor/edit"> <i
												class="btn btn-primary fa fa-pencil-square"></i></a>
										<a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i
												class="btn btn-danger fa fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>D002</td>
									<td>Hitech</td>
									<td>0822423342</td>
									<td>Surabaya</td>
									<td>
										<a href=""> <i class="btn btn-primary fa fa-pencil-square"></i></a>
										<a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i
												class="btn btn-danger fa fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>D003</td>
									<td>Batam</td>
									<td>082223342</td>
									<td>Batam</td>
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
									<th>Nama Kategori</th>
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
