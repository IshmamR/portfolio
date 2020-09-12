<?php 
	include('path.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ishmam's</title>
	<!-- meta-links -->
	<?php include(ROOT_PATH.'/assets/includes/meta-links.php'); ?>
	
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body class="text-dark">
	<!-- Small screen Background Photo by cottonbro from Pexels && Large screen Background Photo by Pixabay from Pexels -->
	
	<!-- _____Hero section_____ -->
	<div class="main well">
		<div class="container text-white hero-text px-3">
			<h1 class="h1 text-light">
				<span class="txt-web">Web</span> 
				<span class="type-effect" data-wait="2000" data-words='["Developer", "Designer"]'></span>
			</h1>
			<h5>Hi. I'm <span class="h2 text-light">Ishmam</span>, a web developer currently living in Bangladesh.</h5>
			<div class="flex flex-row flex-wrap justify-content-around mt-3">
				<a href="#" class="btn btn-light btn-lg rounded-0 px-5 mb-2" title="I am available for freelance work."><strong>Contact me</strong></a>
				<!-- <a href="#" class="btn btn-dark btn-lg border-white rounded-0 px-3 mb-2">Got a question?</a> -->
			</div>
		</div>
	</div>
	<div class="degree-right n-zero bg-light"></div><!-- The angled shape -->
	<?php include(ROOT_PATH.'/assets/includes/navbar.php'); ?>
	<!-- _____Hero section END_____ -->


	<!-- _____About section_____ -->
	<?php include(ROOT_PATH.'/assets/includes/about.php');?>
	<!-- The angled shape -->
	<div class="degree-right n-one bg-light"></div>
	<!-- ____About section END_____ -->


	<!-- _____SERVICE SECTION_____ -->
	<div id="services" class="bg-light d-flex flex-column text-center py-5">
		<div class="container-fluid">
			<h2 class="h2 mt-5">WHAT I DO</h2>
			<hr style="width:60%">
			<div class="d-flex flex-wrap flex-row justify-content-center">
				<div class="service p-3 shadow">
					<i class="mx-1 fas fa-eye fa-lg"></i>
					<i class="mx-1 fas fa-code fa-lg"></i>
					<h3>Web design</h3>
					<p>I design responsive websites with great UI and UX.</p>
				</div>
				<div class="service p-3 shadow">
					<i class="mx-1 fas fa-window-maximize fa-lg"></i>
					<i class="mx-1 fas fa-network-wired fa-lg"></i>
					<h3>Web development</h3>
					<p>I can help with creating and developing your personal and brand's website.</p>
				</div>
				<div class="service p-3 shadow">
					<i class="fab fa-wordpress fa-lg"></i>
					<h3>WordPress development</h3>
					<p>I do plugin intallation, theme cutomization of your WordPress website.</p>
				</div>
			</div>
			<div class="container help text-center mt-3">
				<h1 class="h1">I can help.</h1>
				<h5 class="h5">If you have a project that you want to get started, think you need my help with something or just fancy saying hey, then get in touch.</h5>
				<a href="mailto:ishmam785@gmail.com" class="btn btn-primary rounded-0 border-dark mt-2"><i class="icon fa fa-envelope mr-2"></i>MESSAGE ME</a>
			</div>
		</div>
	</div>
	<!-- _____SERVICE SECTION END_____ -->


	<!-- FOOTER -->
	<?php include(ROOT_PATH.'/assets/includes/footer.php');?>
	<!-- FOOTER END -->


	<!-- Custom JS -->
	<script src="assets/js/main.js" type="text/javascript"></script>
</body>
</html>