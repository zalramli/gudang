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
									<h2>Edit Barang Global</h2>
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
<!-- Breadcomb area End-->
<!-- Form Element area Start-->
<div class="form-element-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="form-element-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Nama Barang</label>
							<div class="form-group">
								<div class="nk-int-st">
									<input type="text" class="form-control" placeholder="Masukan nama barang"
										value="Asus X453 MA">
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Kategori Jenis</label>
							<div class="form-group">
								<select class="selectpicker" data-live-search="true">
									<option>Elektronik</option>
									<option>Property</option>
									<option>Alat Tulis</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Kategori Barang</label>
							<div class="form-group">
								<select class="selectpicker" data-live-search="true">
									<option>Laptop</option>
									<option>Smartphone</option>
									<option>Aksesoris</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Merk Barang (otomatis load dari kategori barang)</label>
							<div class="form-group">
								<select class="selectpicker" data-live-search="true">
									<option>Asus</option>
									<option>Lenovo</option>
									<option>Acer</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Harga Beli</label>
							<div class="form-group">
								<div class="nk-int-st">
									<input type="text" class="form-control" placeholder="Masukan harga beli barang"
										value="3.500.000">
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Harga Jual</label>
							<div class="form-group">
								<div class="nk-int-st">
									<input type="text" class="form-control" placeholder="Masukan harga jual barang"
										value="4.000.000">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Satuan Barang</label>
							<div class="form-group">
								<select class="selectpicker" data-live-search="true">
									<option>Pcs</option>
									<option>Lusin</option>
									<option>Biji</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Gambar</label>
							<div class="form-group">
								<div class="nk-int-st">
									<input type="file" class="form-control" placeholder="Masukan gambar barang">
								</div>
							</div>
						</div>
					</div>

					<!-- <button type="submit" name="simpan" class="btn btn-primary">Simpan</button> -->
					<a href="<?= base_url(); ?>admin/barang_global" class="btn btn-primary">Update</a>
					<a href="<?= base_url(); ?>admin/barang_global" class="btn btn-danger">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>
