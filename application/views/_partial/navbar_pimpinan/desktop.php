<div class="main-menu-area mg-tb-40">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
					<li><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
					</li>
					<li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i>
							Toko</a>
					</li>
					<li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> User</a>
					</li>
					<li><a data-toggle="tab" href="#Forms2"><i class="notika-icon notika-form"></i> Barang</a>
					</li>
					<li><a data-toggle="tab" href="#Forms3"><i class="notika-icon notika-form"></i> Laporan</a>
					</li>
				</ul>
				<div class="tab-content custom-menu-content">
					<div id="Home" class="tab-pane in notika-tab-menu-bg animated flipInX">
						<ul class="notika-main-menu-dropdown">
							<li><a href="<?= base_url('pimpinan/home'); ?>">Dashboard</a>
							</li>
						</ul>
					</div>
					<div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
						<ul class="notika-main-menu-dropdown">
							<li><a href="<?= base_url('pimpinan/toko'); ?>">Data Toko</a>
							</li>
						</ul>
					</div>
					<div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
						<ul class="notika-main-menu-dropdown">
							<li><a href="<?= base_url('pimpinan/user'); ?>">Data User</a>
							</li>
						</ul>
					</div>
					<div id="Forms2" class="tab-pane notika-tab-menu-bg animated flipInX">
						<ul class="notika-main-menu-dropdown">
							<li><a href="<?= base_url('pimpinan/daftar_barang'); ?>">Daftar Barang</a>
							</li>
							<li><a href="<?= base_url('pimpinan/daftar_barang/stock_habis'); ?>">Stock Habis <span
										class="badge badge-light">5</span></a>
							</li>
						</ul>
					</div>
					<div id="Forms3" class="tab-pane notika-tab-menu-bg animated flipInX">
						<ul class="notika-main-menu-dropdown">
							<li><a href="<?= base_url('pimpinan/laporan'); ?>">Lihat Laporan</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
