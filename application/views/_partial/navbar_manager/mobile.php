<div class="mobile-menu-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="mobile-menu">
					<nav id="dropdown">
						<ul class="mobile-menu-nav">
							<li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
								<ul class="collapse dropdown-header-top">
									<li><a href="<?= base_url() ?>manager/home">Dashboard</a></li>
								</ul>
							</li>
							<li><a data-toggle="collapse" data-target="#user" href="#">User</a>
								<ul id="user" class="collapse dropdown-header-top">
									<li><a href="<?= base_url() ?>manager/user">Data User</a></li>
								</ul>
							</li>
							<li><a data-toggle="collapse" data-target="#democrou" href="#">Barang</a>
								<ul id="democrou" class="collapse dropdown-header-top">
									<li><a href="<?= base_url('manager/daftar_barang'); ?>">Daftar Barang</a>
									</li>
									<li><a href="<?= base_url('manager/daftar_barang/stock_habis'); ?>">Stock Habis
											<span class="badge badge-light">5</span></a>
									</li>
								</ul>
							</li>
							<li><a data-toggle="collapse" data-target="#laporan" href="#">Laporan</a>
								<ul id="laporan" class="collapse dropdown-header-top">
									<li><a href="<?= base_url() ?>manager/laporan">Lihat Laporan</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
