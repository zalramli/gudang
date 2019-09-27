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
									<h2>Input Pengeluaran</h2>
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
							<label for="">Supplier</label>
							<div class="form-group">
								<select class="selectpicker" data-live-search="true">
									<option>PT Cemerlang</option>
									<option>Hitech</option>
									<option>Batam</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="">Total Pengeluaran</label>
							<div class="form-group">
								<div class="nk-int-st">
									<input type="text" class="form-control" placeholder="Masukan nama merk barang">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<label for="">Deskripsi</label>
							<div class="form-group">
								<div class="nk-int-st">
									<textarea class="form-control auto-size" rows="2"
										placeholder="Start pressing Enter to see growing..."></textarea>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
								<label>Tanggal</label>
								<div class="input-group date nk-int-st">
									<span class="input-group-addon"></span>
									<input type="text" class="form-control" autoComplete="off" name="tgl_mulai"
										placeholder="09/28/2019" required=""
										oninvalid="this.setCustomValidity('Tanggal Wajib Diisi')"
										oninput="setCustomValidity('')">
								</div>
							</div>
						</div>
					</div>

					<!-- <button type="submit" name="simpan" class="btn btn-primary">Simpan</button> -->
					<a href="<?= base_url(); ?>manager/pengeluaran" class="btn btn-primary">Simpan</a>
					<a onclick="window.history.back();" class="btn btn-danger">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>
