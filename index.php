<?php 
	include('path.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ishmam's</title>
	<!-- meta-links -->
	<?php include(ROOT_PATH.'/assets/includes/meta-links.php'); ?>

</head>
<body class="bg-light text-dark">
	<!-- Small screen Background Photo by cottonbro from Pexels && Large screen Background Photo by Pixabay from Pexels -->
	<?php #include(ROOT_PATH.'/assets/includes/navbar.php'); ?>
	
	<!-- Hero section -->
	<div class="main well">
		<div class="container text-white hero-text px-3">
			<h1 class="h1 text-light">
				<span class="txt-web">Web</span> 
				<span class="type-effect" data-wait="2000" data-words='["Developer", "Designer"]'></span>
			</h1>
			<h5>Hi. I'm <span class="h2 text-light">Ishmam</span>, a web developer currently living in Bangladesh.</h5>
			<div class="flex flex-row flex-wrap justify-content-around mt-3">
				<a href="#" class="btn btn-light btn-lg rounded-0 px-5 mb-2" title="I am available for freelance work."><strong>Hire me</strong></a>
				<a href="#" class="btn btn-dark btn-lg border-white rounded-0 px-3 mb-2">Got a question?</a>
			</div>
		</div>
	</div>
	<div class="degree-right n-zero bg-light"></div><!-- The angled shape -->
	<?php include(ROOT_PATH.'/assets/includes/navbar.php'); ?>
	<!-- Hero section END -->

	<!-- About section -->
	<?php include(ROOT_PATH.'/assets/includes/about.php');?>

	<div class="degree-right bg-light"></div><!-- The angled shape -->
	<!-- About section END -->

	<!-- SERVICE SECTION -->
	<div id="services" class="bg-light d-flex flex-column text-center py-5">
		<div class="container-fluid">
			<h1 class="mt-5">WHAT I DO</h1>
			<hr style="width:60%">
			<div class="d-flex flex-wrap flex-row justify-content-center">
				<div class="service p-3">
					<i class="mx-1 fas fa-eye fa-lg"></i>
					<i class="mx-1 fas fa-code fa-lg"></i>
					<h3>Web design</h3>
					<p>I design responsive websites with great UI and UX.</p>
				</div>
				<div class="service p-3">
					<i class="mx-1 fas fa-window-maximize fa-lg"></i>
					<i class="mx-1 fas fa-network-wired fa-lg"></i>
					<h3>Web development</h3>
					<p>I help with creating and developing your personal and brand's website.</p>
				</div>
				<div class="service p-3">
					<i class="fab fa-wordpress fa-lg"></i>
					<h3>WordPress development</h3>
					<p>I do plugin intallation, theme cutomization of any WordPress website.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- SERVICE SECTION END -->

	<!-- FOOTER -->
	<?php include(ROOT_PATH.'/assets/includes/footer.php');?>
	<!-- FOOTER END -->

	<!-- ICONS -->
	<script src="https://kit.fontawesome.com/e36cbd79af.js" crossorigin="anonymous"></script>
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/main.js" type="text/javascript"></script>
</body>
</html>