<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("templates/admin_header") ?>
</head>

<body>
	<div class="fixed-button">
		<a href="https://codedthemes.com/item/gradient-able-admin-template" target="_blank" class="btn btn-md btn-primary">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
		</a>
	</div>
		<!-- Pre-loader start -->
	<div class="theme-loader">
		<div class="loader-track">
			<div class="loader-bar"></div>
		</div>
	</div>
	<!-- Pre-loader end -->
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

		<?php $this->load->view("templates/admin_navbar") ?>
			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
				<?php $this->load->view("templates/admin_sidebar") ?>
					<div class="pcoded-content">
						<div class="pcoded-inner-content">
							<!-- Main-body start -->
							<div class="main-body">
								<div class="page-wrapper">
									<!-- Page-header start -->
									<div class="page-header card">
										<div class="card-block">
											<h5 class="m-b-10">Daftar Personal Bersihnesia</h5>
											<ul class="breadcrumb-title b-t-default p-t-10">
												<li class="breadcrumb-item">
													<a href="index.html"> <i class="fa fa-home"></i> </a>
												</li>
												<li class="breadcrumb-item"><a href="#!">Basic Componenets</a>
														</li>
														<li class="breadcrumb-item"><a href="#!">Bootstrap Basic Tables</a>
														</li>
											</ul>
										</div>
									</div>
									<!-- Page-header end -->
									
								<!-- Page-body start -->
								<div class="page-body">
									<!-- Basic table card start -->
									<div class="card">
										<div class="card-header">
											<h5>Personal Member Bersihnesia</h5>
											
											<div class="card-header-right">
												<ul class="list-unstyled card-option">
													<li><i class="fa fa-chevron-left"></i></li>
													<li><i class="fa fa-window-maximize full-card"></i></li>
													<li><i class="fa fa-minus minimize-card"></i></li>
													<li><i class="fa fa-refresh reload-card"></i></li>
													<li><i class="fa fa-times close-card"></i></li>
												</ul>
											</div>				
											
											<form action="" class="mt-2">
												<div class="form-group row justify-content-end">
													<div class="col-sm-2 text-right">
														<?php echo anchor(site_url('personal/create'), '+ Tambah Personal', 'class="btn btn-primary"'); ?>
													</div>
													<div class="col-sm"></div>
													<label class="col-sm-1 col-form-label" for="keyword">Cari</label>
													<div class="col-sm-3">
														<input class="form-control form-control-round" type="text" id="keyword">
														<P>
														
														</P>
													</div>
												</div>			
											</form>
										</div>
										<div class="card-block table-border-style">
											<div class="table-responsive" id="id_tables">
												<table class="table">
													<thead>
														<tr>
															<th>No</th>
															<th>NAME</th>
															<th>ADDRESS</th>
															<th>CONTACT PERSON</th>
															<th>EMAIL</th>
															<th>POINT</th>
															<th>ACTION</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$no=1;
														foreach ($personal as $users) : ?>
														<tr>
															<th><?= $no++?></th>
															<td><?php echo $users->name ?></td>
															<td><?php echo $users->address ?></td>
															<td><?php echo $users->contact_person ?></td>
															<td><?php echo $users->email ?></td>
															<td><?php echo $users->point ?></td>
															<td style="text-align:center" width="200px">
																<?php 
																echo anchor(site_url('users/read/'.$users->id_personal),'Read'); 
																echo ' | '; 
																echo anchor(site_url('users/update/'.$users->id_personal),'Update'); 
																echo ' | '; 
																echo anchor(site_url('users/delete/'.$users->id_personal),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
																?>
															</td>
														</tr>
														<?php endforeach ?>
													</tbody>
												</table>
												<hr>

										
											</div>
										</div>
									</div>
									<!-- Basic table card end -->
									<!-- Inverse table card start -->
									
									<!-- Background Utilities table end -->
								</div>
								<!-- Page-body end -->
							</div>
						</div>
						<!-- Main-body end -->

						<div id="styleSelector">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view("templates/admin_footer") ?>
