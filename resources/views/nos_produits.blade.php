@extends('layouts.lproduit')

@section('content')
	<!-- =======================
	Banner innerpage -->
	<div class="innerpage-banner center bg-overlay-dark-7 py-7" style="background:url(assets/images/bg/04.jpg) no-repeat; background-size:cover; background-position: center center;">
		<div class="container">
			<div class="row all-text-white">
				<div class="col-md-12 align-self-center">
					<h1 class="innerpage-title">Nos Produits</h1>
					<h6 class="subtitle"></h6>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active"><a href="{{url('/')}}"><i class="ti-home"></i> Home</a></li>
							<li class="breadcrumb-item">Nos produits</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- =======================
	Banner innerpage -->

	<!-- =======================
	Portfolio -->
	<section class="portfolio pb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-12 p-0">
					<div class="nav justify-content-center">
						<ul class="nav-tabs nav-tabs-style-2 text-center px-2 p-md-0 m-0 mb-4">
							<li class="nav-filter active" data-filter="*">Tout</li>
							<li class="nav-filter" data-filter=".ordi">All in one et Laptop</li>
							<li class="nav-filter" data-filter=".tablette">Tablette</li>
							<li class="nav-filter" data-filter=".sécurité">Caméra de surveillance</li>
						</ul>
					</div>
					<div class="portfolio-wrap grid items-4 items-padding">
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item ordi">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/01.jpg" alt="">
								</div>
								<div class="portfolio-card-footer" style="margin-top: 56px;">
									<a class="full-screen" href="assets/images/portfolio/01.jpg" data-fancybox="portfolio" data-caption="Samline"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Produit Samline</a></h6>
									<p>Matériel informatique</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item tablette">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header" style="margin-top: -38px;">
									<img src="assets/images/portfolio/02.jpg" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/02.jpg" data-fancybox="portfolio" data-caption="Tablette Samline"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Tablette Samline</a></h6>
									<p>Matériel informatique</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item ordi">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/03.jpg" alt="">
								</div>
								<div class="portfolio-card-footer"  style="margin-top: 31px;">
									<a class="full-screen" href="assets/images/portfolio/03.jpg" data-fancybox="portfolio" data-caption="Samline All in one"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Samline All in one</a></h6>
									<p>Matériel informatique</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item ordi">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/04.jpg" alt="">
								</div>
								<div class="portfolio-card-footer"  style="margin-top: 74px;">
									<a class="full-screen" href="assets/images/portfolio/04.jpg" data-fancybox="portfolio" data-caption="Laptop Samline"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Laptop Samline</a></h6>
									<p>Matériel informatique</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item ordi">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/05.jpg" alt="">
								</div>
								<div class="portfolio-card-footer" style="margin-top: 26px;">
									<a class="full-screen" href="assets/images/portfolio/05.jpg" data-fancybox="portfolio" data-caption="Samline All in one"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Samline All in one</a></h6>
									<p>Matériel informatique</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item sécurité">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header" style="margin-top: -89px;">
									<img src="assets/images/portfolio/06.jpg" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/06.jpg" data-fancybox="portfolio" data-caption="Caméra de surveillance"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Caméra de surveillance </a></h6>
									<p>Sécurité</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item tablette">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/07.jpg" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/07.jpg" data-fancybox="portfolio" data-caption="Écran interactif"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Écran interactif</a></h6>
									<p>E-learning , salle de conférence</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item ordi">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/08.jpg" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/08.jpg" data-fancybox="portfolio" data-caption="Samline laptop"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Samline laptop</a></h6>
									<p>Matériel informatique</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item ordi">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/09.jpg" alt="">
								</div>
								<div class="portfolio-card-footer" style="margin-top: 111px;">
									<a class="full-screen" href="assets/images/portfolio/09.jpg" data-fancybox="portfolio" data-caption="Samline Laptop"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Samline Laptop</a></h6>
									<p>Matériel informatique</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item sécurité">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/10.jpg" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/10.jpg" data-fancybox="portfolio" data-caption="Caméra de surveillance"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Caméra de surveillance</a></h6>
									<p>Sécurité</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item ordi">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/11.jpg" alt="">
								</div>
								<div class="portfolio-card-footer" style="margin-top: 62px;">
									<a class="full-screen" href="assets/images/portfolio/11.jpg" data-fancybox="portfolio" data-caption="Samline All in one"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Samline All in one</a></h6>
									<p>Matériel informatique</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item tablette">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/12.jpg" alt="" style="margin-top: -15px;">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/12.jpg" data-fancybox="portfolio" data-caption="Samline Board"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Samline Board</a></h6>
									<p>Écran interactif , E-learning , Salle de conférence...</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item ordi">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header"  style="margin-top: 78px;">
									<img src="assets/images/portfolio/15.jpg" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/15.jpg" data-fancybox="portfolio" data-caption="Samline All in one"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Samline All in one</a></h6>
									<p>Matériel informatique</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item tablette">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/17.jpg" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/17.jpg" data-fancybox="portfolio" data-caption="Tablette Samline"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Tablette Samline</a></h6>
									<p>Matériel informatique</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item tablette">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/16.jpg" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/16.jpg" data-fancybox="portfolio" data-caption="Tablette Samline"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Tablette Samline</a></h6>
									<p>Matériel informatique</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item sécurité">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header"  style="margin-top: -16px;">
									<img src="assets/images/portfolio/18.jpg" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/18.jpg" data-fancybox="portfolio" data-caption="Caméra de suiveillance"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Caméra de surveillance</a></h6>
									<p>Sécurité</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item sécurité">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header"  style=";">
									<img src="assets/images/portfolio/21.jpg" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/21.jpg" data-fancybox="portfolio" data-caption="Caméra de surveillance"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Caméra de surveillance</a></h6>
									<p>Sécurité</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item tablette">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/20.jpg" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/20.jpg" data-fancybox="portfolio" data-caption="Tablette Samline"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Tablette Samline</a></h6>
									<p>Matériel informatique</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item sécurité">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/19.jpg" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/19.jpg" data-fancybox="portfolio" data-caption="Caméra de surveillance"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Caméra de surveillance</a></h6>
									<p>Sécurité</p>
								</div>
							</div>
						</div>
						<!-- portfolio-card -->
						<div class="portfolio-card isotope-item sécurité">
							<div class="portfolio-card-body">
								<div class="portfolio-card-header">
									<img src="assets/images/portfolio/22.jpg" alt="">
								</div>
								<div class="portfolio-card-footer">
									<a class="full-screen" href="assets/images/portfolio/22.jpg" data-fancybox="portfolio" data-caption="Caméra de surveillance"><i class="ti-fullscreen"></i></a>
									<h6 class="info-title"><a href="#" title="">Caméra de surveillance</a></h6>
									<p>Sécurité</p>
								</div>
							</div>
						</div>
					</div>
					<!-- portfolio wrap -->
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
	Portfolio -->

	<!-- =======================
	call to action-->
	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-9 text-center text-md-left align-self-center">
					<h4 class="m-0">Ce ne sont que quelques uns des produits que nous proposons</h4>
				</div>
				<div class="col-md-3 text-center text-md-right mt-3 mt-md-0 align-self-center ">
					<a class="btn btn-outline-light mb-0" href="{{url('contact')}}">Contactez Nous</a>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
	call to action-->


@endsection	


	