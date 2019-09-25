<div class="main-menu-area mg-tb-40">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
					<li><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
					</li>
					<li class="active"><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i>
							Data Barang</a>
					</li>
				</ul>
				<div class="tab-content custom-menu-content">
					<div id="Home" class="tab-pane in notika-tab-menu-bg animated flipInX">
						<ul class="notika-main-menu-dropdown">
							<li><a href="<?= base_url() ?>gudang/home">Dashboard</a>
							</li>
						</ul>
					</div>
					<div id="Interface" class="tab-pane active notika-tab-menu-bg animated flipInX">
						<ul class="notika-main-menu-dropdown">
							<li><a href="<?= base_url() ?>gudang/barang_toko">Daftar Barang</a>
							</li>
							<li><a href="<?= base_url() ?>gudang/barang_toko/barang_baru">Barang Baru <span
										class="badge badge-light">10</span></a>
							</li>
							<li><a href="<?= base_url() ?>gudang/barang_toko/stock_habis">Stok Habis <span
										class="badge badge-light">5</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
