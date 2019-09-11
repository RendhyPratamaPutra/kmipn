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
															<label class="col-sm-2 col-form-label">ID</label>
															<div class="col-sm-5">
																<input type="number" name="id_personal" class="form-control" placeholder="Masukkan Id Personal">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">NAMA</label>
															<div class="col-sm-5">
																<input type="number" name="nama_personal" class="form-control" placeholder="Masukkan Id Personal">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">ID EVENT</label>
															<div class="col-sm-5">
															<input type="number" name="id_event" class="form-control" placeholder="Masukkan Id Event">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">Sampah Plastik</label>
															<div class="col-sm-2">
																<input type="number" name="sampah_plastik" id="sampah_plastik" class="form-control" onchange="return totalpointplastik()" required placeholder="masukkan total point">
															</div>
															<div class="col-sm-1">
																<input type="text" id="point_plastik" name="point_plastik" class="form-control" readonly> <i></i>
															</div>
														</div>
                                                        <div class="form-group row">
															<label class="col-sm-2 col-form-label">Sampah Logam</label>
                                                            <div class="col-sm-2">
																<input type="number" name="sampah_logam" id="sampah_logam" class="form-control" onchange="return totalpointlogam()" required placeholder="masukkan total point">
															</div>
															<div class="col-sm-1">
																<input type="text" id="point_logam" name="point_logam" class="form-control" readonly> <i></i>
															</div>
                                                        </div>
                                                        <div class="form-group row">
															<label class="col-sm-2 col-form-label">Sampah Lainnya</label>
                                                            <div class="col-sm-2">
																<input type="number" name="sampah_lain" id="sampah_lain" class="form-control" onchange="return totalpointlainnya()" required placeholder="masukkan total point">
															</div>
															<div class="col-sm-1">
																<input type="text" id="point_lain" name="point_lain" class="form-control" readonly> <i></i>
															</div>
                                                        </div>
                                                        <div class="form-group row">
															<label class="col-sm-2 col-form-label"> Total Point</label>
                                                            <div class="col-sm-2">
																<input type="number" name="total_poin" id="total_poin" class="form-control" onchange="return totalpointlainnya()" required placeholder="masukkan total point">
															</div>
														</div>
														<div class="sub-title"></div>
														<div class="form-group row justify-content-end">
															<div class="col-sm-1">
																<a class="btn btn-danger btn-round" href="">Decline</a>
															</div>
															<div class="col-sm-1 mr-4">
																<button class="btn btn-success btn-round">Confirm</button>																
															</div>
															
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

function totalpointplastik(){
    
    var jumlah= parseInt(document.getElementById("sampah_plastik").value);
   


    console.log(jumlah);
    

    var total = document.getElementById("point_plastik");
   total.placeholder = jumlah*50+"";
    total.value=jumlah*50;
}

</script>
                            <script>

function totalpointlogam(){
    
    var jumlah= parseInt(document.getElementById("sampah_logam").value);
   


    console.log(jumlah);
    

    var total = document.getElementById("point_logam");
   total.placeholder = jumlah*100+"";
    total.value=jumlah*100;
}

</script>
                            <script>

function totalpointlainnya(){
    
    var jumlah= parseInt(document.getElementById("sampah_lain").value);
   


    console.log(jumlah);
    

    var total = document.getElementById("point_lain");
   total.placeholder = jumlah*25+"";
    total.value=jumlah*25;
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