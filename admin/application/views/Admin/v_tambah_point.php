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
											<h5 class="m-b-10">Tambah Event</h5>
											<p class="text-muted m-b-10"></p>
											<ul class="breadcrumb-title b-t-default p-t-10">
												<li class="breadcrumb-item">
													<a href="index.html"> <i class="fa fa-home"></i> </a>
												</li>
												<li class="breadcrumb-item">
													<a href="#!">Event</a>
												</li>
												<li class="breadcrumb-item">
													<a href="#!">Tambah Event</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- Page-header end -->

									<!-- Page body start -->
									<div class="page-body">
										<div class="row">
											<div class="col-sm-12">
												<!-- Basic Form Inputs card start -->
												<div class="card">
													<div class="card-header">
														<h5>Isi Form Di Bawah</h5>
														<div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

														<div class="card-header-right">
															<i class="icofont icofont-spinner-alt-5"></i>
														</div>

													</div>
													<div class="card-block">
														<h4 class="sub-title">Form Event</h4>
														<?php echo form_open_multipart(); ?>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">ID PERSONAL</label>
															<div class="col-sm-10">
																<input type="number" name="id_personal" class="form-control" placeholder="Masukkan Id Personal">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">ID EVENT</label>
															<div class="col-sm-10">
															<input type="number" name="id_event" class="form-control" placeholder="Masukkan Id Event">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">Sampah Plastik</label>
															<div class="col-sm-9">
																<input type="number" name="sampah_plastik" class="form-control" placeholder="masukkan total point">
															</div>
															<div class="col-sm">
																<input type="number" name="" class="form-control" readonly>
															</div>
														</div>
                                                        <div class="form-group row">
															<label class="col-sm-2 col-form-label">Sampah Logam</label>
															<div class="col-sm-9">
																<input type="number" name="sampah_logam" class="form-control" placeholder="masukkan total point">
															</div>
															<div class="col-sm">
																<input type="number" name="" class="form-control" readonly>
															</div>
                                                        </div>
                                                        <div class="form-group row">
															<label class="col-sm-2 col-form-label">Sampah Lainnya</label>
															<div class="col-sm-9">
																<input type="number" name="sampah_lain" class="form-control" placeholder="masukkan total point">
															</div>
															<div class="col-sm">
																<input type="number" name="" class="form-control" readonly>
															</div>
														</div>
														<div class="sub-title"></div>
														<div class="form-group row justify-content-end">
															<button class="btn btn-success btn-round">Buat Event</button>
														</div>
														<?php echo form_close(); ?>
													</div>
												</div>
												<!-- Input Grid card end -->
												<!-- Input Validation card start -->
											</div>
										</div>
									</div>
								</div>
							</div>


			
							<!-- Warning Section Ends -->
                            <!-- Required Jquery -->
                            <script>

function totalBayar(){
    
    var jumlah= parseInt(document.getElementById("jumlah").value);
    var harga= parseInt(document.getElementById("harga").value);


    console.log(jumlah);
    console.log(harga);

    var total = document.getElementById("total_harga");
    total.placeholder = jumlah*harga+"";
    total.value=jumlah*harga;
}

</script>
							<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/jquery/jquery.min.js"></script>
							<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/jquery-ui/jquery-ui.min.js"></script>
							<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/popper.js/popper.min.js"></script>
							<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/bootstrap/js/bootstrap.min.js"></script>
							<!-- jquery slimscroll js -->
							<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
							<!-- modernizr js -->
							<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/modernizr/modernizr.js"></script>
							<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/modernizr/css-scrollbars.js"></script>

							<!-- Custom js -->
							<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/script.js"></script>
							<script src="<?php echo base_url(''); ?>vendor/assets/js/pcoded.min.js"></script>
							<script src="<?php echo base_url(''); ?>vendor/assets/js/vartical-demo.js"></script>
							<script src="<?php echo base_url(''); ?>vendor/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
							
</body>

</html>