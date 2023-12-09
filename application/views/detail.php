<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Website Title -->
	<title><?= $judul; ?></title>
	<!-- Bootstrap -->
	<link href="<?= base_url('assets/front/'); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font-Awesome -->
	<link href="<?= base_url('assets/front/'); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Lightbox -->
	<link href="<?= base_url('assets/front/'); ?>assets/lightbox/css/lightbox.css" rel="stylesheet">
	<!-- Text Rotator-->
	<link href="<?= base_url('assets/front/'); ?>assets/textrotator/simpletextrotator.css" rel="stylesheet">
	<!-- FlexSlider -->
	<link href="<?= base_url('assets/front/'); ?>assets/flexslider/flexslider.css" rel="stylesheet">
	<!-- Theme Style -->
	<link href="<?= base_url('assets/front/'); ?>css/style.css" rel="stylesheet">
	<!-- Animations -->
	<link href="<?= base_url('assets/front/'); ?>css/animate.css" rel="stylesheet">
	<!-- Custom Favicon -->
	<link href="<?= base_url('assets/front/'); ?>img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="assets/html5shiv/html5shiv.js"></script>
    <script src="assets/respond/respond.min.js"></script>
    <![endif]-->
</head>

<body id="top">

	<!-- ==========================
        HEADER SECTION 
        =========================== -->
	<header id="home">
		<!-- creative menu -->
		<div class="container-fluid">
			<div class="row">
				<div class="menu-wrap">
					<nav class="menu d-flex justify-content-end">
						<!-- Menu Links -->
						<div class="icon-list">
							<a href="<?= base_url() ?>"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
							<?php foreach ($kategori as $kate){ ?>
							<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><i
									class="fa fa-fw fa-globe"></i><span>
									<?= $kate['nama_kategori'] ?></span>
							</a>
							<?php } ?>
							<a href="<?= base_url('auth') ?>" class="btn btn-secondary px-4">Login</a>
						</div>
				</div>
				</nav>
			</div>
			<button class="menu-button" id="open-button"></button><!-- menu button -->
		</div>
		<!--/row-->
		<!--/container-->

	</header>

	<!-- ==========================
        SERVICE SECTION 
        =========================== -->
	<section class="features text-center section-padding" id="service">
		<div class="container">
			<!-- Headline -->
			<div class="row">
				<div class="col-md-12">
					<h1 class="arrow">WELCOME TO YAULYA LAND</h1>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="row">

					<div class="col-lg-12 mb-4">
		
						<img class="card-img-top mb-3" src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>"
							width="200" height="200" />
						<div class="card-body bg-light text-center px-4">
							<h3 class="mb-3"><?= $konten->judul; ?></h3>
							<div class="d-flex justify-content-center mb-4">
								<small class="mx-3"><i class="fa fa-user text-danger"></i> <?= $konten->nama ?></small>
								<small class="mx-3"><i class="fa fa-folder text-danger"></i>
									<?= $konten->nama_kategori ?></small>
							</div>
							<p><?= $konten->keterangan; ?></p>
							<br>
							<a href="<?= $konten->youtube ?>" target="_blank">Link Youtube</a>
						</div>
		
					</div>
				</div>
			</div>


	</section>
	<!-- Start Footer Section -->
	<section class="intro text-center section-padding bg-secondary" id="about">
		<div class="container">
			<!-- WELCOME TEXT -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 wp1">
					<h1 class="arrow">A little <span>about</span> me</h1><!-- Headline -->
					<!-- about / welcome text -->
					<p class="text-white">Halo perkenalkan Nama Saya Ulya Amelia Putri biasa di panggil Ulya, Saya Lahir
						di Karanganyar
						pada tanggal 18 juni 2007, Saya sekarang Berusia 16 Tahun, Saya duduk di bangku Kelas XI Jurusan
						Rekayasa Perangkat Lunak di SMK NEGERI 2 KARANGANYAR.</p>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer-section">
		<div class="container relative">
			<div class="row">
				<div class="col-lg-8">
					<div class="subscription-form">
						<form action="#" class="row g-3">
							<div class="col-auto">
								<input type="text" class="form-control" placeholder="Enter your name"
									fdprocessedid="vr84r9">
							</div>
							<div class="col-auto">
								<input type="email" class="form-control" placeholder="Enter your email"
									fdprocessedid="twty1sm">
							</div>
							<div class="col-auto">
								<button class="btn btn-danger" fdprocessedid="umsybs">
									<span class="fa fa-paper-plane"></span>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-5 col-md-6 footer-contact">
					<p>
					</p>
					<div class="social-links mt-3">
						<ul class="list-unstyled custom-social">
							<li><a href="" class="social-btn"><i class="fa fa-facebook"></i></a></li>
							<br>
							<li><a href="https://www.instagram.com/xlyml__/" class="social-btn"><i
										class="fa fa-instagram"></i></a></li><br>
						</ul>
					</div>
					<strong>Phone:</strong> 0858 0138 9795<br>
					<strong>Email:</strong> ulyaamelia123@gmail.com<br>
					<p></p>
				</div>

				<div class="col-lg-4 col-md-6 footer-links">
					<h4>Kategori</h4>
					<ul>
						<?php foreach ($kategori as $kate){ ?>
						<li><i class="bx bx-chevron-right"></i> <a
								href="<?= base_url('home/kategori/'. $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
						</li>
						<?php } ?>
					</ul>
				</div>

				<div class="col-lg-3 col-md-6 footer-links">
					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<div class="pl-3">
									<h4 class="footer-logo">Alamat</h4>
									<p><?= $konfig->alamat; ?></p>
								</div>
								<div class="pl-3">
									<h4 class="footer-logo">Email</h4>
									<p><?= $konfig->email; ?></p>
								</div>
								<div class="pl-3">
									<h4 class="footer-logo">Phone</h4>
									<p><?= $konfig->no_wa; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
		</div>
	</footer>
	<!-- Footer End -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>All Rights Reserved. &copy; 2015 <a
							href="http://www.themewagon.com"><?= $konfig->judul_website; ?></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- ==========================
        FOOTER SECTION END
        =========================== -->


	<!-- jQuery -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
	</script>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<!-- SmoothScroll -->
<script type="text/javascript" src="<?= base_url('assets/front/'); ?>assets/smoothscroll/smoothscroll.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/front/'); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?= base_url('assets/front/'); ?>js/waypoints.min.js"></script>
<!-- classie.js -->
<script src="<?= base_url('assets/front/'); ?>js/classie.js"></script>
<!-- FlexSlider -->
<script src="<?= base_url('assets/front/'); ?>assets/flexslider/jquery.flexslider.js"></script>
<!-- Modernizr -->
<script src="<?= base_url('assets/front/'); ?>js/modernizr.js"></script>
<!-- Text Rotator -->
<script src="<?= base_url('assets/front/'); ?>assets/textrotator/jquery.simple-text-rotator.js"></script>
<!-- Lightbox.js -->
<script src="<?= base_url('assets/front/'); ?>assets/lightbox/js/lightbox.min.js"></script>
<!-- Google Maps -->
<script type="text/javascript"
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeKBBPJTG3v5w3cNPAgM6ZsJiPyL1mP_o&amp;sensor=false"></script>
<!-- Theme JavaScript Core -->
<script src="<?= base_url('assets/front/'); ?>js/main.js"></script>
<script src="<?= base_url('assets/front/'); ?>js/script.js"></script>

<!-- GOOGLE MAPS DATA -->
<script type="text/javascript">
	// When the window has finished loading create our google map below
	google.maps.event.addDomListener(window, 'load', init);

	function init() {
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 15,

			scrollwheel: false,

			// The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(40.68961985411178, -74.01618003845215), // New York 

			// How you would like to style the map. 
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{
				featureType: 'water',
				stylers: [{
					color: '#F2F2F2'
				}, {
					visibility: 'on'
				}]
			}, {
				featureType: 'landscape',
				stylers: [{
					color: '#FFFFFF'
				}]
			}, {
				featureType: 'road',
				stylers: [{
					saturation: -100
				}, {
					lightness: 45
				}]
			}, {
				featureType: 'road.highway',
				stylers: [{
					visibility: 'simplified'
				}]
			}, {
				featureType: 'road.arterial',
				elementType: 'labels.icon',
				stylers: [{
					visibility: 'off'
				}]
			}, {
				featureType: 'administrative',
				elementType: 'labels.text.fill',
				stylers: [{
					color: '#ADADAD'
				}]
			}, {
				featureType: 'transit',
				stylers: [{
					visibility: 'off'
				}]
			}, {
				featureType: 'poi',
				stylers: [{
					visibility: 'off'
				}]
			}]
		};

		// Get the HTML DOM element that will contain your map 
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('googlemaps');

		// Create the Google Map using out element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);
	}

</script>

<!-- TEXT ROTATOR SETTINGS -->
<script type="text/javascript">
	$(".rotate").textrotator({
		animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
		separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
		speed: 2000 // How many milliseconds until the next word show.
	});

</script>

</body>

</html>
