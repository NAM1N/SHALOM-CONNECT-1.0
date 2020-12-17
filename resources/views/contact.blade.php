@extends('layouts.lcontact')

@section('content')
	<!-- =======================
	Banner innerpage -->
	<div class="text-center bg-overlay-dark-4" style="background:url(assets/images/bg/05.jpg) no-repeat; background-size: cover; background-position: center center;">
		<div class="container">
			<div class="row all-text-white">
				<div class="col-md-12 align-self-center">
					<h6 class="display-6 mt-9 mb-0">Appelez nous aux (+225) 22 54 71 60 / 54 62 60 93</h6>
					<h1 class="font-weight-bold display-4 display-md-1 mb-2 mb-md-n4">Contactez Nous</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- =======================
	Banner innerpage -->

	<!-- =======================
	contact -->
	<section class="contact-page">
		<div class="container">
			<div class="row ">
				<div class="col-md-3 mb-5">
					<div class="contact-box h-100 bg-overlay-dark-7 px-3 py-4" style="background:url(assets/images/bg/04.jpg) no-repeat; background-size: cover; background-position: center center; ">
						<!-- Phone -->
						<div class="contact-info all-text-white">
							<div class="contact-box-icon"><i class="ti-map-alt"></i></div>
							<h5 class="mb-2">Adresse</h5>
							<p>Cocody Angle Avenue Washington , Abidjan.</p>
						</div>
						<!-- Email -->
						<div class="contact-info all-text-white">
							<div class="contact-box-icon"><i class="ti-email"></i></div>
							<h5 class="mb-2">E-mail</h5>
							<p>admin@shalomconnect-ci.net</p>
						</div>
						<!-- Phone -->
						<div class="contact-info all-text-white">
							<div class="contact-box-icon"><i class="ti-panel"></i></div>
							<h5 class="mb-2">Phone</h5>
							<p>(+225) 22 54 71 60<br>(+225) 54 62 60 93</p>
						</div>
						<!-- Whatsapp -->
						<div class="contact-info all-text-white">
							<div class="contact-box-icon"><i class="fa fa-whatsapp"></i></div>
							<h5 class="mb-2">Num Whatsapp</h5>
							<p>(+225) 69 77 00 48</p>
						</div>
					</div>
				</div>
				<!-- google map -->
				<div class="col-md-3 mb-5">
					<div class="h-100">
						<div class="contact-map overflow-hidden"> 
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.1367977248179!2d-4.000568070872796!3d5.333081599758221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb32f6a0b261%3A0xec3b249e49bcdfd!2sShalom%20Connect%20CI%20PLS!5e0!3m2!1sfr!2sci!4v1606469181112!5m2!1sfr!2sci" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
				<!-- contact form -->
				<div class="col-md-6">
					<div class="h-100">
						<h3 style="margin-bottom: 27px;margin-top: -27px;">Contactez Nous!</h3>
						<form class="contact-form" id="contact-form" name="contactform" method="post" action="{{ route('contact') }}">
						{{ csrf_field ()}}
				
					<!-- Start main form -->
							<div class="row">
								<div class="col-md-6">
									<!-- name -->
									<span class="form-group">
										<input id="con-name" name="name" type="text" value="{{ old ('name')}}" class="form-control" placeholder="Nom & Prenom" required>
										{!!$errors->first('name','<span class="help-block">:message </span>')!!}
									</span>
								</div>
								<div class="col-md-6">
									<!-- email -->
									<span class="form-group">
										<input id="con-email" name="email" type="email" value="{{ old ('email')}}" class="form-control" placeholder="E-mail" required>
										{!!$errors->first('email','<span class="help-block">:message </span>')!!}
									</span>
								</div>
								<div class="col-md-12">
									<!-- Subject -->
									<span class="form-group">
										<input id="con-subject" name="subject" type="text" value="{{ old ('subject')}}" class="form-control" placeholder="Sujet" required>
										{!!$errors->first('subject','<span class="help-block">:message </span>')!!}
									</span>
								</div>
								<div class="col-md-12">
									<!-- Message -->
									<span class="form-group">
										<textarea id="con-message" name="message" cols="40" rows="6" class="form-control" placeholder="Message" required>{{ old ('message')}}</textarea>
										{!!$errors->first('message','<span class="help-block">:message </span>')!!}
									</span>
								</div>
								<!-- submit button -->
								<div class="col-md-12 text-center"><button class="btn btn-dark btn-block" type="submit">Envoyer</button></div>
							</div>
							<!-- End main form -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
	contact -->

@endsection