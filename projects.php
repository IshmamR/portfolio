<?php 
	include('path.php'); 
	include(ROOT_PATH.'/admin/project-data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ishmam's projects</title>
	<!-- PageLoader -->
	<script type="text/javascript" src="assets/frameworks/pageLoader/jquery.pageLoading.js" defer></script>
	<!-- meta-links -->
	<?php include(ROOT_PATH.'/assets/includes/meta-links.php'); ?>

	<link rel="stylesheet" type="text/css" href="assets/css/projects.css">

</head>
<body>
	<?php include(ROOT_PATH.'/assets/includes/navbar.php'); ?>
	<div class="container py-4">
		<h1>Some of my recent projects...</h1>
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
			<a class="nav-link flex-fill" id="wp-tab" href="#wp" data-toggle="tab" role="tab" aria-controls="wp" aria-selected="false" data-filter=".wp">
				WordPress
			</a>
			<a class="nav-link active flex-fill" id="all-tab" href="#all" data-toggle="tab" role="tab" aria-controls="all" aria-selected="true" data-filter="*">
				All
			</a>
		</div>
	</nav>
	<!-- TABS END -->

	<!-- CONTENTS -->
	<div class="container bg-white shadow-sm mb-4">
		<div id="myTabContent">
		<!-- ALL PROJECTS -->
		<?php foreach ($projects as $project): ?>
			<div class="item <?php echo($project['class']); ?>">
				<div class="">
					<img class="item-img" src="admin/project-imgs/<?php echo($project['img']);?>" />
				</div>
				<div class="item-over text-center text-white px-2">
					<h4 class="h4"><?php echo($project['title']); ?></h4>
					<p><?php echo($project['description']); ?><br><br>
					<b>View:</b> <a href="<?php echo($project['demo']); ?>" class="text-light" target="_blank"><i class="fas fa-eye fa-lg" title="view demo"></i></a> 
					<?php if($project['github'] !== ''): ?>
					<b>Github:</b> <a href="<?php echo($project['github']); ?>" class="text-light" target="_blank"><i class="fab fa-github fa-lg"></i></a>
					<?php endif; ?>
					</p>
				</div>
			</div>
		<?php endforeach ?>
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