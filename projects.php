<?php 
	include('path.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ishmam's projects</title>
	<!-- meta-links -->
	<?php include(ROOT_PATH.'/assets/includes/meta-links.php'); ?>

	<link rel="stylesheet" type="text/css" href="assets/css/projects.css">

</head>
<body>
	<?php include(ROOT_PATH.'/assets/includes/navbar.php'); ?>
	<div class="container py-4">
		<h1>Here are my recent projects</h1>
	</div>

	<!-- TABS -->
	<nav class="container py-0">
		<div class="nav nav-tabs d-flex justify-content-around" id="myTab" role="tablist">
			<a class="nav-link flex-fill" id="html-css-tab" href="#html-css" data-toggle="tab" role="tab" aria-controls="html-css" aria-selected="false" data-filter=".html-css">
				HTML & CSS
			</a>
			<a class="nav-link flex-fill" id="js-tab" href="#js" data-toggle="tab" role="tab" aria-controls="js" aria-selected="false" data-filter=".js">
				JavaScript
			</a>
			<a class="nav-link flex-fill" id="php-tab" href="#php" data-toggle="tab" role="tab" aria-controls="php" aria-selected="false" data-filter=".php">
				PHP
			</a>
			<a class="nav-link active flex-fill" id="all-tab" href="#all" data-toggle="tab" role="tab" aria-controls="all" aria-selected="true" data-filter="*">
				All
			</a>
		</div>
	</nav>
	<!-- TABS END -->

	<!-- CONTENTS -->
	<div class="container bg-white shadow-sm mb-4">
	<div id="myTabContent" class="">
		<!-- ALL PROJECTS -->
		<?php for($i = 0; $i < 12; $i++) { ?>
			<?php if ($i%2==0) {$clas = 'html-css';}else{$clas ='js';} ?>
		<div class="item <?php echo($clas); ?>">
			<div class="">
				<img class="item-img" src="assets/images/bg.jpg" />
			</div>
			<div class="item-over text-center text-white px-2">
				<h4 class="h4">Beutika</h4>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Sit, illo repellendus eius ea commodi. <br>
				<b>View:</b> <a href="#" class="text-light"><i class="fas fa-eye fa-lg" title="view demo"></i></a> <b>Github:</b> <a href="#" class="text-light"><i class="fab fa-github fa-lg"></i></a>
				</p>
			</div>
		</div>
		<?php }; ?>
		<!-- <div class="item html-css">beutika</div>
		<div class="item js">chatapp</div>
		<div class="item php">ishita</div>
		<div class="item js">todolist</div>
		<div class="item js">passgenx</div> -->
	</div>
</div>

	<!-- FOOTER -->
	<?php include(ROOT_PATH.'/assets/includes/footer.php'); ?>

	<!-- ISOTOPE JS -->
	<script type="text/javascript" src="assets/frameworks/isotope.pkgd.min.js"></script>
	<script type="text/javascript">
		var $grid = $('#myTabContent').isotope({
			itemSelector: '.item',
			layoutMode: 'fitRows',
			// percentPosition: true,
			masonry: {
				columnWidth: 35,
				isFitWidth: true
			}
		});
		$('.nav-tabs').on( 'click', 'a', function() {
			var filterValue = $( this ).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});
	</script>
</body>
</html>