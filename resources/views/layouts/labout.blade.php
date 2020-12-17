<!doctype html>
<html lang="fr">
<head>
@include('_partials.headabout')
</head>
<body>
	<!-- =======================
	header Start-->
	<header class="header-static navbar-sticky navbar-light">
    @include('_partials.headerabout')
	</header>
	<!-- =======================
    header End-->

    @yield('content')
    
    	<!-- =======================
	footer  -->
	<footer class="footer bg-light pt-6">
    @include('_partials.footer')
</footer>
<!-- =======================
footer  -->


<div> <a href="#" class="back-top btn btn-grad"><i class="ti-angle-up"></i></a> </div>

<!--Global JS-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/popper.js/umd/popper.min.js"></script>
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!--Vendors-->
<script src="assets/vendor/owlcarousel/js/owl.carousel.min.js"></script>
<script src="assets/vendor/jarallax/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/jarallax-video.min.js"></script>
<script src="assets/vendor/wavify/wavify.js"></script>
<script src="assets/vendor/wow/wow.js"></script>

<!--Template Functions-->
<script src="assets/js/functions.js"></script>

</body>

</html>