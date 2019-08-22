<nav class="pcoded-navbar">
						<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
						<div class="pcoded-inner-navbar main-menu">
							
							<div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Menu Utama  </div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="active">
									<a href="<?= base_url('Admin'); ?>">
										<span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
										<span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('Admin/request'); ?>">
										<span class="pcoded-micon"><i class="ti-email"></i><b>FC</b></span>
										<span class="pcoded-mtext" data-i18n="nav.form-components.main">Request</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="ti-notepad"></i></span>
										<span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Event</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu">
										<li class=" ">
											<a href="<?= base_url('Admin/list_event'); ?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Daftar Event</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="<?= base_url('Admin/tambah_event'); ?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Tambah Event</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>

									</ul>
								</li>
							</ul>
							<div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Pengguna &amp; Komunitas</div>
							<ul class="pcoded-item pcoded-left-item">
								<li>
									<a href="<?= base_url('Admin/personal_list'); ?>">
										<span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
										<span class="pcoded-mtext" data-i18n="nav.form-components.main">Pengguna</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('Admin/community_list'); ?>">
										<span class="pcoded-micon"><i class="ti-map-alt"></i><b>FC</b></span>
										<span class="pcoded-mtext" data-i18n="nav.form-components.main">Komunitas</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
							</ul>

							<div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Lainnya</div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="ti-wallet"></i></span>
										<span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Poin</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu">
										<li>
											<a href="accordion.html">
												<span class="pcoded-micon"><i class="ti-"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Masukan Poin</span>
												<span class="pcoded-mcaret"></span>
											</a>
											</li>
											
											<li>    
											<a href="accordion.html">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tukar Poin</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>        
								</li>
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="ti-info-alt"></i></span>
										<span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Informasi</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu">
										<li class=" ">
										<a href="<?= base_url('Admin/list_item'); ?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Daftar Barang</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
						
										<li class=" ">
											<a href="<?= base_url('Admin/tambah_event'); ?>">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Voucher &amp; Promo </span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">    
											<a href="accordion.html">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tentang Kami</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>
								</li>
								<!-- <li>
									<a href="chart.html">
										<span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
										<span class="pcoded-mtext" data-i18n="nav.form-components.main">Chart</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li> -->
								<li>
									<a href="map-google.html">
										<span class="pcoded-micon"><i class="ti-map-alt"></i><b>FC</b></span>
										<span class="pcoded-mtext" data-i18n="nav.form-components.main">Maps</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
							</ul>

							
						</div>
					</nav>