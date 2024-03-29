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
											<h5 class="m-b-10">Daftar Event Bersihnesia</h5>
											<ul class="breadcrumb-title b-t-default p-t-10">
												<li class="breadcrumb-item">
													<a href="index.html"> <i class="fa fa-home"></i> </a>
												</li>
												<li class="breadcrumb-item">
													<a href="#!">Basic Componenets</a>
												</li>
												<li class="breadcrumb-item">
													<a href="#!">Bootstrap Basic Tables</a>
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
												<h5>Event Bersihnesia</h5>

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
														<div class="col-md-12 text-center">
															<div style="margin-top: 4px" id="message">
																<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
															</div>
														</div>
														<div class="col-sm-2 text-right">
															<?php echo anchor(site_url('event/v_add_event'), '+ Tambah Event', 'class="btn btn-primary"'); ?>
														</div>
														<div class="col-sm"></div>
														<label class="col-sm-1 col-form-label" for="keyEvent">Cari</label>
														<div class="col-sm-3">
															<input class="form-control form-control-round" type="text" id="keyEvent">
														</div>
													</div>
												</form>
											</div>
											<div class="card-block table-border-style">
												<div class="table-responsive" id="tbEvent">
													<table class="table">
														<thead>
															<tr>
																<th>No</th>
																<th>Name Event</th>
																<th>Address</th>
																<!-- <th>Description</th> -->
																<th>Time&Date</th>
																<th>Photo</th>
																<th>Status Event</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<?php
															$no = 1;
															foreach ($event as $e) {
																?>
																<tr>
																	<th><?= $no++ ?></th>
																	<?php $e->id_event ?>
																	<td><?= $e->name_event ?></td>
																	<td><?= $e->address ?></td>
																	<!-- <td><?= $e->description ?></td> -->
																	<td><?= $e->time ?>, <?= $e->date ?></td>
																	<td><img src="<?php echo base_url('./upload/' . $e->photo) ?>" width="100" /></td>
																	<td><?= $e->status_event ?></td>
																	<td style="text-align:center" width="200px">
																		<?php
																			echo anchor(site_url('Admin/delete_event/' . $e->id_event), 'Delete Event', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
																			?>
																	</td>
																</tr>
															<?php

															} ?>
														</tbody>
													</table>
													<hr>

													<nav aria-label="Page navigation example" class="mt-4 d-flex justify-content-center">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">&laquo;</span>
																</a>
															</li>
															<?php  ?>
															<?php for ($i = 1; $i <= $pages; $i++) : ?>
																<li class="page-item <?php if ($i == $active) {
																								echo 'active';
																							} ?>"><a class="page-link" onClick="toPageEvent(<?= $i; ?>)"><?= $i; ?></a></li>
															<?php endfor ?>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">&raquo;</span>
																</a>
															</li>
														</ul>
													</nav>
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