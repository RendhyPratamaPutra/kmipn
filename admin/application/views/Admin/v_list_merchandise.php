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
											<h5 class="m-b-10">List Merchandisae Bersihnesia</h5>
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
							
								<div class="page-body">
									<!-- Basic table card start -->
									<div class="card">
										<div class="card-header">
											<h5>Merchandise Bersihnesia</h5>
											
											<div class="card-header-right">
												<ul class="list-unstyled card-option">
													<li><i class="fa fa-chevron-left"></i></li>
													<li><i class="fa fa-window-maximize full-card"></i></li>
													<li><i class="fa fa-minus minimize-card"></i></li>
													<li><i class="fa fa-refresh reload-card"></i></li>
													<li><i class="fa fa-times close-card"></i></li>
												</ul>
											</div>

										</div>
										<div class="card-block table-border-style">
											<div class="table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th>No</th>
															<th>Name Item</th>
															<th>Reedem Point</th>
                                                            <th>Image</th>
                                                            <th>Time & Date</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$no=1;
														foreach($item_reedem as $item)
														{
														?>
														<tr>
															<th><?= $no++?></th>
															<td><?= $item->name_item?></td>
															<td><?= $item->reedem_point?></td>
															<td><?= $item->time_date?></td>
															<td><img src="<?php echo base_url('./upload/'.$item->photo) ?>"  width="100" /></td>
															<td><?= $item->category?></td>
															<td><button class="btn btn-danger btn-round">Delete</button></td>
														</tr>
														<?php
														
													}?>
													</tbody>
												</table>
											</div>
										</div>
                                    </div>
								</div>
							</div>
						</div>
						<div id="styleSelector">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view("templates/admin_footer") ?>
