<div class="main-menu-area mg-tb-40">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
					<li><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
					</li>
					<li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Jenis Toko</a>
					</li>
					<li><a data-toggle="tab" href="#Distributor"><i class="notika-icon notika-form"></i> Distributor</a>
					</li>
					<li class=""><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i>
							Data Barang</a>
					</li>
				</ul>
				<div class="tab-content custom-menu-content">
					<div id="Home" class="tab-pane in notika-tab-menu-bg animated flipInX">
						<ul class="notika-main-menu-dropdown">
							<li><a href="<?= base_url() ?>admin/home">Dashboard</a>
							</li>
						</ul>
					</div>
					<div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
						<ul class="notika-main-menu-dropdown">
							<li><a href="<?= base_url() ?>admin/barang_global">Barang</a>
							</li>
							<li><a href="<?= base_url() ?>admin/merk_barang">Merk</a>
							</li>
							<li><a href="<?= base_url() ?>admin/kategori_barang">Kategori</a>
							</li>
							<li><a href="<?= base_url() ?>admin/satuan_barang">Satuan</a>
							</li>
						</ul>
					</div>
					<div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
						<ul class="notika-main-menu-dropdown">
							<li><a href="<?= base_url() ?>admin/jenis_toko">Jenis Toko</a>
							</li>
						</ul>
					</div>
					<div id="Distributor" class="tab-pane notika-tab-menu-bg animated flipInX">
						<ul class="notika-main-menu-dropdown">
							<li><a href="<?= base_url() ?>admin/distributor">Data Distributor</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
