<div class="container">
				<!-- Slider Button (don't edit!)-->
				<div class="row">
					<div class="col-md-12 text-right navicon">
						<a id="nav-toggle" class="nav_slide_button" href="index.html#"><span></span></a>
					</div>
				</div>
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item <?php if($no==1){ echo 'active'; } ?>">
							<img src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>" class="d-block w-100">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</button>
				</div>
				<!-- Learn More Button -->
			</div>