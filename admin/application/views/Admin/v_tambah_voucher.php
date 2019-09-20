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
															<label class="col-sm-2 col-form-label">Nama Item</label>
															<div class="col-sm-10">
																<input type="text" name="name_item" class="form-control" placeholder="masukkan nama item">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">Upload File</label>
															<div class="col-sm-10">
																<input type="file" name="photo" class="form-control">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">Jumlah Point</label>
															<div class="col-sm-10">
																<input type="number" name="jumlah_point" class="form-control" placeholder="masukkan total point">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">Tanggal dan Waktu</label>
															<div class="col-sm-10 row">
																<div class="col-sm-5">
																	<input type="date" name="date" class="form-control">
																</div>
																<div class="col-sm-5"><input type="time" name="time" class="form-control"></div>
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


							<!-- Warning Section Starts -->
							<!-- Older IE warning message -->
							<!--[if lt IE 9]>
<div class="ie-warning">
	<h1>Warning!!</h1>
	<p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
		to access this website.</p>
	<div class="iew-container">
		<ul class="iew-download">
			<li>
				<a href="http://www.google.com/chrome/">
					<img src="assets/images/browser/chrome.png" alt="Chrome">
					<div>Chrome</div>
				</a>
			</li>
			<li>
				<a href="https://www.mozilla.org/en-US/firefox/new/">
					<img src="assets/images/browser/firefox.png" alt="Firefox">
					<div>Firefox</div>
				</a>
			</li>
			<li>
				<a href="http://www.opera.com">
					<img src="assets/images/browser/opera.png" alt="Opera">
					<div>Opera</div>
				</a>
			</li>
			<li>
				<a href="https://www.apple.com/safari/">
					<img src="assets/images/browser/safari.png" alt="Safari">
					<div>Safari</div>
				</a>
			</li>
			<li>
				<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
					<img src="assets/images/browser/ie.png" alt="">
					<div>IE (9 & above)</div>
				</a>
			</li>
		</ul>
	</div>
	<p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
							<!-- Warning Section Ends -->
							<!-- Required Jquery -->
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
							<script>
								function initAutocomplete() {
									var map = new google.maps.Map(document.getElementById('map'), {
										center: {
											lat: -8.2230043,
											lng: 114.3653102
										},
										zoom: 13,
										mapTypeId: 'roadmap'
									});

									// Membuat Kotak pencarian terhubung dengan tampilan map
									var input = document.getElementById('pac-input');
									var searchBox = new google.maps.places.SearchBox(input);


									var markers = [];
									// Mengaktifkan detail pada suatu tempat ketika pengguna
									// memilih salah satu dari daftar prediksi tempat 
									searchBox.addListener('places_changed', function() {
										var places = searchBox.getPlaces();

										if (places.length == 0) {
											return;
										}

										// menghilangkan marker tempat sebelumnya
										markers.forEach(function(marker) {
											marker.setMap(null);
										});
										markers = [];

										// Untuk setiap tempat, dapatkan icon, nama dan tempat.
										var bounds = new google.maps.LatLngBounds();
										places.forEach(function(place) {
											if (!place.geometry) {
												console.log("Returned place contains no geometry");
												return;
											}
											var icon = {
												url: place.icon,
												size: new google.maps.Size(71, 71),
												origin: new google.maps.Point(0, 0),
												anchor: new google.maps.Point(17, 34),
												scaledSize: new google.maps.Size(25, 25)
											};



											// Membuat Marker untuk setiap tempat
											markers.push(new google.maps.Marker({

												map: map,
												icon: icon,
												title: place.name,
												position: place.geometry.location,
												drag: true

											}));
											var lat = place.geometry.location.lat();
											var lng = place.geometry.location.lng();

											if (place.geometry.viewport) {
												bounds.union(place.geometry.viewport);
												document.getElementById("latlong").value = lat + ',' + lng;
												//document.getElementById('lng').value=lng; 
											} else {
												bounds.extend(place.geometry.location);

											}
										});
										map.fitBounds(bounds);
									});
									google.maps.event.addListener(marker, 'drag', function() {
										// ketika marker di drag, otomatis nilai latitude dan longitude
										//menyesuaikan dengan posisi marker 
										updateMarkerPosition(marker.getPosition());
									});
								}
							</script>
							<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkE6oJvsyX4sRAw0QTt3R_gJClY0NtIFQ&libraries=places&callback=initAutocomplete" async defer></script>
</body>

</html>