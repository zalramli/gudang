<div class="breadcomb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcomb-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="breadcomb-wp">
								<div class="breadcomb-icon">
									<i class="notika-icon notika-form"></i>
								</div>
								<div class="breadcomb-ctn">
									<h2>Edit Data User</h2>
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
<!-- Breadcomb area End-->

<!-- Form Element area Start-->
<div class="form-element-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-element-list">

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label for="">Nama Lengkap</label>
							<div class="form-group">
								<div class="nk-int-st">
									<input type="text" class="form-control" placeholder="Nama Lengkap" value="Nama Lengkap 1">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Jenis Akses</label>
							<div class="form-group">
								<div class="nk-int-st">
									<div class="bootstrap-select fm-cmp-mg">
										<select class="selectpicker">
											<option value="">Pilih Jenis</option>
											<option selected>Gudang</option>
											<option>Kasir</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Username</label>
							<div class="form-group">
								<div class="nk-int-st">
									<input type="text" class="form-control" placeholder="Username" value="Username 1">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Password</label>
							<div class="form-group">
								<div class="nk-int-st">
									<input type="password" class="form-control" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Konfirmasi Password</label>
							<div class="form-group">
								<div class="nk-int-st">
									<input type="password" class="form-control" placeholder="Konfirmasi Password">
								</div>
							</div>
						</div>
					</div>

					<!-- <button type="submit" name="simpan" class="btn btn-primary">Simpan</button> -->
					<a href="<?= base_url(); ?>manager/user" class="btn btn-primary">Update</a>
					<a onclick="window.history.back();" class="btn btn-danger">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>