<!doctype html>
<html lang="fr">

<head>
@include('_partials.headindex')
</head>

<body>
	<div class="preloader">
		<img src="assets/images/preloader.svg" alt="Pre-loader">
	</div>

	<!-- =======================
	header Start-->
	<header class="header-static navbar-sticky navbar-light">
    @include('_partials.headerindex')
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

<div> <a href="#" class="back-top btn btn-grad"><i class="ti-angle-up"></i></a> </div> <!-- style="margin-bottom: 63px;margin-right: 5px;" -->

<!--Global JS-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/popper.js/umd/popper.min.js"></script>
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!--Vendors-->
<script src="assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>
<script src="assets/vendor/owlcarousel/js/owl.carousel.min.js"></script>
<script src="assets/vendor/swiper/js/swiper.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>

<!--Template Functions-->
<script src="assets/js/functions.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fd21964920fc91564cf68b3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>
