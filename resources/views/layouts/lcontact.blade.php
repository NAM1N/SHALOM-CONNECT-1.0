<!doctype html>
<html lang="fr">
<head>
@include('_partials.headcs')
</head>

<body>
	<!-- =======================
	header Start-->
	<header class="header-static navbar-sticky navbar-light">
    @include('_partials.headercontact')
	</header>
	<!-- =======================
    header End-->
        @if(session()->has('message'))
        <div class="alert alert-success" role="alert" style="width: 50%;margin-left: 350px;">
           {{session()->get('message')}}
        </div>
        @endif

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

    <!-- Google Map -->
    <script src="assets/vendor/map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtF5lHSU7Y7c2BYl_c4-G9bSi44h1X9Ls"></script>

    <!--Template Functions-->
    <script src="assets/js/functions.js"></script>
    
</body>

</html>