<div class="mobile-menu-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="mobile-menu">
					<nav id="dropdown">
						<ul class="mobile-menu-nav">
							<li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
								<ul class="collapse dropdown-header-top">
									<li><a href="<?= base_url() ?>gudang/home">Dashboard</a></li>
								</ul>
							</li>
							<li><a data-toggle="collapse" data-target="#democrou" href="#">Data Barang</a>
								<ul id="democrou" class="collapse dropdown-header-top">
									<li><a href="<?= base_url() ?>gudang/barang_toko">Daftar Barang</a></li>
									<li><a href="<?= base_url() ?>gudang/barang_toko/barang_baru">Barang Baru <span
												class="badge badge-light">10</span></a></li>
									<li><a href="<?= base_url() ?>gudang/barang_toko/stock_habis">Stock Habis <span
												class="badge badge-light">5</span></a></li>
								</ul>
							</li>
							<li><a data-toggle="collapse" data-target="#setting" href="#">Settings</a>
								<ul id="setting" class="collapse dropdown-header-top">
									<li><a href="<?= base_url() ?>gudang/settings">Setting Account</a></li>
								</ul>
							</li>

						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
