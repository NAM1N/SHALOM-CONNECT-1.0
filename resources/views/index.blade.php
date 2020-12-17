@extends('layouts.lindex')

@section('content')
	<!-- =======================
	Main Banner -->
	<section class="p-0">
		<div class="swiper-container height-700-responsive swiper-arrow-hover swiper-slider-fade">
			<div class="swiper-wrapper">
				<!-- slide 1-->
				<div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/05.jpg); background-position: center center; background-size: cover;">
					<div class="container h-100">
						<div class="row d-flex h-100">
							<div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
								<h2 class="animated fadeInUp dealy-500 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Bienvenue.</h2>
								<h3 class="animated fadeInUp dealy-1000 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Shalom Connect </h3>
								<div class="animated fadeInUp mt-3 dealy-1500"><a href="{{url('service')}}" class="btn btn-grad">Découvrez nos services!</a></div>
							</div>
						</div>
					</div>
				</div>
				<!-- slide 2-->
				<div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/03.jpg); background-position: center center; background-size: cover;">
					<div class="container h-100">
						<div class="row d-flex h-100">
							<div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
							    <h3 class="animated fadeInUp dealy-500 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Vente et installation</h3>
								<h2 class="animated fadeInUp dealy-1000 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Ecran interactif</h2>
							</div>
						</div>
					</div>
				</div>
				<!-- slide 3-->
				<div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/12.jpg); background-position: center center; background-size: cover;">
					<div class="container h-100">
						<div class="row d-flex h-100">
							<div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
							    <h3 class="animated fadeInUp dealy-500 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Conception et vente</h3>
								<h2 class="animated fadeInUp dealy-1000 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Samline <br> All in one</h2>
							</div>
						</div>
					</div>
				</div>
				<!-- slide 4-->
				<div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/04.jpg); background-position: center center; background-size: cover;">
					<div class="container h-100">
						<div class="row d-flex h-100">
							<div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
							    <h3 class="animated fadeInUp dealy-500 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Vente et installation</h3>
								<h2 class="animated fadeInUp dealy-1000 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Caméra de surveillance</h2>
							</div>
						</div>
					</div>
				</div>
				<!-- slide 5-->
				<div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/07.jpg); background-position: center center; background-size: cover;">
					<div class="container h-100">
						<div class="row d-flex h-100">
							<div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
							    <h3 class="animated fadeInUp dealy-500 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Installation</h3>
								<h2 class="animated fadeInUp dealy-1000 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Solution tracking</h2>
							</div>
						</div>
					</div>
				</div>
				<!-- slide 6-->
				<div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/06.jpeg); background-position: center center; background-size: cover;">
					<div class="container h-100">
						<div class="row d-flex h-100">
							<div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
							    <h3 class="animated fadeInUp dealy-500 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Création et hébergement</h3>
								<h2 class="animated fadeInUp dealy-1000 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Site Internet</h2>
							</div>
						</div>
					</div>
				</div>
				<!-- slide 7-->
				<div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/08.jpg); background-position: center center; background-size: cover;">
					<div class="container h-100">
						<div class="row d-flex h-100">
							<div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
							    <h3 class="animated fadeInUp dealy-500 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Installation</h3>
								<h2 class="animated fadeInUp dealy-1000 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Salle multimédia</h2>
							</div>
						</div>
					</div>
				</div>
				<!-- slide 8-->
				<div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/09.jpeg); background-position: center center; background-size: cover;">
					<div class="container h-100">
						<div class="row d-flex h-100">
							<div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
							    <h3 class="animated fadeInUp dealy-500 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Installation</h3>
								<h2 class="animated fadeInUp dealy-1000 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Solution <br> E-learning</h2>
							</div>
						</div>
					</div>
				</div>
				<!-- slide 9-->
				<div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/11.jpg); background-position: center center; background-size: cover;">
					<div class="container h-100">
						<div class="row d-flex h-100">
							<div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
							    <h3 class="animated fadeInUp dealy-500 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Service</h3>
								<h2 class="animated fadeInUp dealy-1000 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Maintenance informatique</h2>
								<div class="animated fadeInUp mt-3 dealy-1500"><a href="{{url('service')}}" class="btn btn-grad">Découvrez plus!</a></div>
							</div>
						</div>
					</div>
				</div>
				<!-- slide 10-->
				<div class="swiper-slide bg-overlay-dark-2" style="background-image:url(assets/images/banner/10.jpg); background-position: center center; background-size: cover;">
					<div class="container h-100">
						<div class="row d-flex h-100">
							<div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
							    <h3 class="animated fadeInUp dealy-500 text-white display-8 display-md-7 alt-font font-italic mb-2 my-md-4">Service</h3>
								<h2 class="animated fadeInUp dealy-1000 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Vente d'accéssoires informatique</h2>
								<div class="animated fadeInUp mt-3 dealy-1500"><a href="{{url('service')}}" class="btn btn-grad">Découvrez plus!</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Slider buttons -->
			<div class="swiper-button-next"><i class="ti-angle-right"></i></div>
			<div class="swiper-button-prev"><i class="ti-angle-left"></i></div>
			<div class="swiper-pagination"></div>
		</div>
	</section>
	<!-- =======================
	Main banner -->

	<!-- =======================
	about us  -->
	<section>
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<!-- left -->
				<div class="col-md-6">
					<div class="row mt-4 mt-md-0">
						<div class="col-5 offset-1 px-2 mb-3 align-self-end">
							<img class="border-radius-3 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" src="assets/images/service/01.jpg" alt="">
						</div>
						<div class="col-6 px-2 mb-3">
							<img class="border-radius-3 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.6s" src="assets/images/service/03.jpeg" alt="">
						</div>
						<div class="col-7 px-2 mb-3">
							<div class="border-radius-3 wow fadeInLeft bg-grad p-2 p-sm-3 p-lg-4 p-xl-5 all-text-white" data-wow-duration="0.8s" data-wow-delay="0s">
								<span>Notre But:</span>
								<h3 class="font-weight-bold">"Digitaliser le monde d'aujourd'hui et de demain"</h3>
							</div>
						</div>
						<div class="col-5 align-self-start pl-2 mb-3">
							<img class="border-radius-3 wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.2s" src="assets/images/service/02.jpg" alt="">
						</div>
					</div>
				</div>
				<!-- right -->
				<div class="col-md-6 pl-lg-5">
					<h2 class="h1">Qui sommes nous ?</h2>
					<p class="lead">SHALOM CONNECT est une entreprise de Développement Numérique spécialisée dans la conception du matériel informatique et  le développement  des projets de digitalisation.Son objectif premier  est de transformer en Côte d’Ivoire et en Afrique le système éducatif professionnel et institutionnel.</p>
					<p>SHALOM CONNECT est votre partenaire incontournable dans les domaines informatiques et Télécommunications .</p>
					<div>
						<a href="{{url('about')}}" class="btn btn-dark">En savoir plus</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
	about us  -->

	<!-- =======================
	why-us -->
	<section class="why-us p-0">
		<div class="container">
			<div class="row no-gutters">
				<!--why us left-->
				<div class="col-lg-6 d-none d-lg-block bg-light" style="background:url(assets/images/bg/05.jpg) no-repeat; background-size:cover;">
				</div>
				<!--why us right-->
				<div class="col-lg-6 col-md-12 bg-grad px-4 py-5 p-lg-5 all-text-white">
					<div class="h-100">
						<div class="title text-left p-0">
							<span class="pre-title">Nos missions</span>
							<h2>SHALOM CONNECT entend poursuivre les activités historiques.</h2>
							<p>L’activité informatique est élargie afin de répondre et de réagir promptement aux besoins de nos clients. L’expertise de SHALOM CONNECT permet de s’investir sur des dossiers complexes, à plus-value technique ou créative. C’est dans ces projets que l’entreprise apporte son expertise à savoir. </p>
						</div>
						<div class="row">
							<div class="col">
								<ul class="list-group list-group-borderless text">
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Fabrication et distribution de la marque ‘SAMLINE’</li>
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Distribution d’autres produits (HP, DELL, LENOVO…)</li>
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Installation, configuration et gestion des réseaux informatiques</li>
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Installation, configuration et gestion des systèmes Windows serveur</li>
								</ul>
							</div>
							<div class="col">
								<ul class="list-group list-group-borderless text">
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Gestion des rôles d’infrastructure sous Windows serveur</li>
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Proposer et concevoir des solutions informatiques sur mesure</li>
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Mise en place du réseau local dans un environnement client/serveur</li>
									<li class="list-group-item text-white"><i class="fa fa-check"></i>Développement de projets</li>
								</ul>
							</div>
						</div>
					</div>
					<a class="mt-3" href="{{url('about')}}">En savoir plus!</a>
				</div>
			</div>
		</div>
	</section>
	<!-- why-us
	=======================  -->

	<!-- =======================
	service -->
	<section class="service">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 mx-auto">
					<div class="title text-center">
						<h2>Notre politique qualité</h2>
						<p class="mb-0">Pour assurer le développement et la pérennité de SHALOM CONNECT, la direction de l’entreprise a décidé de s’engager dans une politique de respect et d’amélioration de la  qualité.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mt-30">
					<div class="feature-box f-style-2 icon-grad h-100">
						<div class="feature-box-icon"><i class="ti-save-alt"></i></div>
						<h3 class="feature-box-title">Nos Enjeux</h3>
						<p class="feature-box-desc">Pour conquérir ses clients, SHALOM CONNECT, veut être reconnu comme un acteur fiable sur son métier.<br>SHALOM CONNECT, entend faire la preuve de son engagement à respecter ses   obligations et ses engagements pour conquérir ses clients.</p>
					</div>
				</div>
				<div class="col-md-4 mt-30">
					<div class="feature-box f-style-2 icon-grad h-100">
						<div class="feature-box-icon"><i class="ti-ruler-pencil"></i></div>
						<h3 class="feature-box-title">Nos Priorités</h3>
						<p class="feature-box-desc">1- Mettre tout en œuvre pour garantir et améliorer le confort physique et psychologique de nos salariés et des individus. <br>2- Améliorer la qualité et la sûreté de nos réalisations dans le strict respect des normes et des législations.
                           <br>3- Écouter, comprendre et proposer le juste produit à nos clients.    </p>
					</div>
				</div>
				<div class="col-md-4 mt-30">
					<div class="feature-box f-style-2 icon-grad h-100">
						<div class="feature-box-icon"><i class="ti-agenda"></i></div>
						<h3 class="feature-box-title">Nos moyens</h3>
						<p class="feature-box-desc">SHALOM CONNECT communiquera à ses clients les engagements et les exigences de l’entreprise en matière de qualité. Cela sera la base de sa relation commerciale et la raison de son développement. SHALOM CONNECT sensibilisera, formera et intéressera ses collaborateurs à la réalisation de ses priorités.Ce sera l’affaire de tous et la ressource de ces ambitions.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
	service -->

	<!-- =======================
	package -->
	<section class="package pt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="title text-left">
						<span class="pre-title">Service Consulting</span>
						<h2>Open Day</h2>
						<p style="font-size: 25px;">Outre ses activités dans le domaine de l'informatique Shalom Connect a mis en place un service consulting permettant à quiconque le désirant d'éffectuer un voyage pour le royaume uni. </p>
					</div>
				</div>
				<div class="col-md-5 mt-4 mt-md-0">
					<div class="tab-content p-0">
						<!-- tab 1 (price 1) -->
						<div class="tab-pane show active" id="price-1-tab">
							<div class="card">
								<div class="card-header text-white bg-grad">
									<div class="float-left">
										<h2 class="text-white font-weight-bold mb-0 display-4">Conditions</h2>
										<div>Que ce soit dans le but de </div>
									</div>
								</div>
								<div class="card-body bg-light ">
									<ul class="list-group list-group-borderless my-3">
										<li class="list-group-item"><i class="fa fa-check"></i>Poursuivre vos études</li>
										<li class="list-group-item"><i class="fa fa-check"></i>D'y monter une affaire</li>
										<li class="list-group-item"><i class="fa fa-check"></i>De vous y installer</li>
										<li class="list-group-item"><i class="fa fa-check"></i>Ou pour tout autre activité </li>
									</ul>
									<a class="btn btn-grad" href="#!">Contactez Nous!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
	package -->

	<!-- =======================
	client -->
	<section class="client pt-0 ">
	<div style="font-size: 25px;margin-left: 50px;margin-bottom: 25px;"> Nos Partenaires</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-grab arrow-hover arrow-gray" data-margin="80" data-arrow="true" data-dots="false" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-sm="3" data-items-xs="2" data-autoplay="3000">
						<div class="item"><img src="assets/images/clients/01.png" alt=""></div>
						<div class="item"><img src="assets/images/clients/02.png" alt=""></div>
						<div class="item"><img src="assets/images/clients/03.png" alt=""></div>
						<div class="item"><img src="assets/images/clients/04.png" alt=""></div>
						<div class="item"><img src="assets/images/clients/05.png" alt=""></div>
						<div class="item"><img src="assets/images/clients/06.png" alt=""></div>
						<div class="item"><img src="assets/images/clients/07.png" alt=""></div>
						<div class="item"><img src="assets/images/clients/08.png" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
	client -->

@endsection