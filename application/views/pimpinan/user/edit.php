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
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Nama Toko</label>
							<div class="form-group">
								<div class="nk-int-st">
									<input type="text" class="form-control" placeholder="" value="Toko Sumber Elektronik">
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Jenis Toko</label>
							<div class="form-group">
								<div class="nk-int-st">
									<div class="bootstrap-select fm-cmp-mg">
										<select class="selectpicker">
											<option>Elektronik</option>
											<option>Property</option>
											<option>Alat Tulis</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label for="">Alamat</label>
							<div class="form-group">
								<div class="nk-int-st">
									<input type="text" class="form-control" placeholder="" value="Lumajang">
								</div>
							</div>
						</div>
					</div>
					<!-- <button type="submit" name="simpan" class="btn btn-primary">Simpan</button> -->
					<a href="<?= base_url(); ?>pimpinan/toko" class="btn btn-primary">Update</a>
					<a onclick="window.history.back();" class="btn btn-danger">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>