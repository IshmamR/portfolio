<nav class="navbar navbar-expand-md navbar-light bg-white shadow">
	<div class="container">
		<a class="navbar-brand" href="<?php echo(BASE_URL);?>">ISHMAM</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Left Side Of Navbar -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo(BASE_URL);?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo(BASE_URL.'#about');?>">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo(BASE_URL.'#services');?>">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo(BASE_URL.'/portfolio');?>">Portfolio</a>
				</li>
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Blog</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a href="<?php echo(BASE_URL.'/posts') ?>" class="dropdown-item text-dark text-decoration-none">
							All posts
						</a>
						<a href="/posts/create" class="dropdown-item text-success text-decoration-none">
							Add post <!-- Only for admin -->
						</a>
					</div>
				</li>
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				<li class="nav-item">
					<a class="nav-link" href="">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Register</a>
				</li>
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Ishmam</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a href="/dashboard" class="dropdown-item">Dashboard</a>
						<a href="" class="dropdown-item">Logout</a>

						<form id="logout-form" action="" method="POST" class="d-none">				
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>