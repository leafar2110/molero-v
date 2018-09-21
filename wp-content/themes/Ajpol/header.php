<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>

	<!--  PORTADA -->
	<section class="background-app">
		<header class="header">
			<nav class="navbar navbar-expand-lg navbar-light nav-app">
				<div class="container nav-grid">
					<div>
						<a class="navbar-brand" href="<?php echo bloginfo('url').'/index.php'; ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.jpg" class="nav-logo img-fluid"></a>	
					</div>
					<div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fa fa-bars icom"></i>
						</button>
					</div>

					<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
						<ul class="navbar-nav menu-nav">
							<li class="nav-item "><a class="" href="<?php echo bloginfo('url').'/index.php'; ?>">Inicio</a></li>
							<li class="nav-item"><a class="" href="<?php echo bloginfo('url').'/index.php/somos'; ?>">AJPOL</a></li>
							<li class="nav-item"><a class="" href="<?php echo bloginfo('url').'/index.php/blog'; ?>">Blog</a></li>
							<li class="nav-item"><a class="" href="<?php echo bloginfo('url').'/index.php/contacto'; ?>">Contacto</a></li>
							
						</ul>
						<div class="social-nav">
							<ul class="navbar-nav">

								<li><a href="#"><i class="fa fa-facebook iconos-app"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter iconos-app"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram iconos-app"></i></a></li>
								<li><a href="#"><i class="fa fa-whatsapp iconos-app"></i></a></li>

							</ul>
						</div>
						
					</div>
				</div>
			</nav>
		</header>
		



		