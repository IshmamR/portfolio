<?php include('path.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ishmam's</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="description" content="Portfolio website of Ishmam Rahman">
	<meta name="author" content="Ishmam">
	
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<script type="text/javascript" src="assets/frameworks/jquery.js"></script>
	<script type="text/javascript" src="assets/frameworks/bootstrap.bundle.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/frameworks/bootstrap.min.css">
	
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body class="bg-light text-dark">
	<?php include(ROOT_PATH.'/assets/includes/navbar.php'); ?>
	
	<!-- Hero section -->
	<div class="main well">
		<div class="container text-white hero-text px-3">
			<h1 class="h1 text-light">Web Developer</h1>
			<h5>Hi. I'm <span class="h2 text-light">Ishmam</span>, a web developer currently living in Bangladesh.</h5>
			<div class="flex flex-row flex-wrap justify-content-around mt-3">
				<a href="#" class="btn btn-light btn-lg px-5 mb-2" title="I am available for freelance work."><strong>Hire me</strong></a>
				<a href="#" class="btn btn-dark btn-lg border-white px-3 mb-2">Got a question?</a>
			</div>
		</div>
	</div>
	<div class="degree-right bg-light"></div><!-- The angled shape -->
	<!-- Hero section END -->

	<!-- About section -->
	<div id="about" class="text-center bg-light py-5">
		<h1 class="h1 my-3">About me</h1>
		<div class="container">
			<p class="ap">Hello! I'm Ishmam, a web developer and website designer, and a guy slighty obsessed with code quality. I'm also the cheif editor of <a class="ap text-decoration-none text-body" href="https://doftv.xyz" target="_blank" title="doftv.xyz | an online news portal"><b>DOF TV</b></a>. I’m currently available for freelance work. If you have a project that you want to get started or think you need any kind of help with web development, then <a href="#" class="text-decoration-none text-dark"><b>get in touch</b></a>.</p>
		</div>
		<!-- SKILLS Section -->
		<?php include(ROOT_PATH.'/assets/includes/skills.php');?>

	</div>
	<div class="degree-right bg-light pt-4"></div><!-- The angled shape -->
	<!-- About section END -->

	<!-- SERVICE SECTION -->
	<div id="services" class="bg-light d-flex flex-column text-center pt-5">
		<div class="container">
			<h1 class="mt-5">WHAT I DO</h1>
			<hr style="width:60%">
			<div class="d-flex flex-wrap flex-row justify-content-around">
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
					<p>I help with creating and developing your brands website.</p>
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

	<?php include(ROOT_PATH.'/assets/includes/footer.php');?>

	<!-- ICONS -->
	<script src="https://kit.fontawesome.com/e36cbd79af.js" crossorigin="anonymous"></script>
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</body>
</html>