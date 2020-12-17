@extends('layouts.labout')

@section('content')
	<!-- =======================
	Banner innerpage -->
	<div class="innerpage-banner left bg-overlay-dark-5 py-7 parallax-bg" data-jarallax-video="https://youtu.be/sTYF2rNTn2U">
		<div class="container py-7">
			<div class="row all-text-white pb-7">
				<div class="col-12 col-lg-8">
					<h1 class="innerpage-title">Nous sommes une entreprise spécialisée dans le domaine informatique</h1>
					<h6 class="subtitle mb-4">La digitalisation de notre monde est notre objectif </h6>
				</div>
			</div>
		</div>
		<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path id="wave-one" d=""/></svg>
		<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path id="wave-two" d=""/></svg>
	</div>
	<!-- =======================
	Banner innerpage -->

	<!-- =======================
	About us -->
	<section class="p-0">
		<div class="container h-100">
			<div class="row">
				<div class="col-md-6 align-self-center">
					<div class="text-center text-sm-center text-md-right mb-4">
						<h2 class="text-grad display-1 font-weight-bold mb-0">+5 Ans</h2>
						<span>Que nous sommes implantés dans le système éducatif, professionnel et institutionnel ivoirien.</span>
					</div>
				</div>
				<div class="col-md-6 align-self-center text-center text-sm-center text-md-left">
					<p class="pr-0 pr-lg-5">Shalom Connect est une entreprise spécialisée dans : la conception et la distribution d'appareil informatique , l'installation de caméra de surveillance , la confection de site internet etc...</p>
					<p class="pr-0 pr-lg-5">Nous sommes réputés pour notre professionalisme ainsi que pour la qualité des services que nous proposons.</p>
					<a class="btn btn-outline-light" href="{{url('service')}}">Nos services</a>
				</div>
			</div>
			<!-- row end -->
			<div class="row mt-7">

			</div>
		</div>
	</section>
	<!-- =======================
	About us -->

	<!-- =======================
	why-us -->
	<section class="why-us p-0">
		<div class="container-fluid">
			<div class="row">
				<!--why us left-->
				<div class="col-lg-6 d-none d-lg-block bg-light p-0" style="background:url(assets/images/bg/01.jpg) no-repeat; background-size:cover;">
				</div>
				<!--why us right-->
				<div class="col-lg-6 col-md-12 bg-dark px-4 py-5 p-lg-5 text-white">
					<div class="h-100">
						<div class="title text-left p-0">
							<span class="pre-title">Pourquoi nous faire confiance ?</span>
							<h2 class="text-white">Nous fournissons les meilleurs solutions pour satisfaire tous vos besoins!</h2>
							<p>Les clients le témoignent, les réalisations le montrent, l’expérience le confirme : Shalom Connect est un partenaire compétent, sérieux et fiable pour accompagner professionnels, entreprises et associations dans leur different projet. </p>
						</div>
						<div class="row">
							<div class="col">
								<ul class="list-group list-group-borderless mb-0">
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Professionalisme</li>
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Compétence </li>
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Expérience </li>
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Polyvalence </li>
								</ul>
							</div>
							<div class="col">
								<ul class="list-group list-group-borderless mb-0">
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Sérieux </li>
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Droiture</li>
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Passion</li>
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Solidarité.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row testimonials ">

			</div>
		</div>
	</section>
	<!-- why-us
	=======================  -->

	<!-- =======================
	solutions -->
	<section>
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<!--left-->
				<div class="col-lg-6 col-md-12">
					<div class="title text-left pb-0">
						<span class="pre-title">D'autres raisons de nous choisir</span>
						<h2>La qualité de notre service est <span class="text-primary"> Unique</span></h2>
						<p style="font-size: 19px;">Nous fournissons exclusivement des produits et des services de qualité défiant toute concurrence. <br> Choisir Shalom Connect c'est faire le choix du professionalisme, de la réussite, de la solution la plus adaptée à vos besoins. </p>
						<a class="btn btn-grad mr-3" href="{{url('service')}}">Découvrez nos services!</a>
						<a class="primary-hover text-light-gray" href="{{url('contact')}}">Contactez Nous</a>
					</div>
				</div>
				<!--right-->
				<div class="col-md-6">
					<div class="row mt-4 mt-md-0">
						<div class="col-7 pl-4 pr-2 mb-3">
							<img class="border-radius-3 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s" src="assets/images/service/05.jpeg" alt="">
						</div>
						<div class="col-5 align-self-end pl-2 mb-3">
							<img class="border-radius-3 wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.2s" src="assets/images/service/10.jpg" alt="">
						</div>
						<div class="col-5 offset-1 px-2 mb-3">
							<img class="border-radius-3 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" src="assets/images/service/09.jpg" alt="">
						</div>
						<div class="col-5 px-2 mb-3">
							<img class="border-radius-3 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.6s" src="assets/images/service/06.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- solutions
	=======================  -->

	<!-- =======================
	newsletter -->
	<section class="about-newsletter bg-overlay-dark-8 parallax-bg" style="background:url(assets/images/bg/03.jpeg) center center; background-size:cover; ">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 mx-auto">
					<div class="title title-light text-center">
						<span class="pre-title">Restez connecté </span>
						<h2>Souscrivez à notre newsletter pour recevoir nos offres exclusives.</h2>
					</div>
				</div>
				<div class="col-12 col-md-8 col-lg-5 mx-auto text-center">
					<form>
						<div class="input-group">
							<input class="form-control border-radius-right-0 border-right-0 bg-transparent text-white" type="text" name="search" placeholder="Entrez votre email...">
							<button type="button" class="btn btn-grad border-radius-left-0 mb-0">Souscrivez maintenant!</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
	newsletter -->

@endsection