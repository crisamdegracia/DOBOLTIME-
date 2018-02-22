<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_To_WordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">


		<link rel="icon" href="<?php bloginfo('stylesheet_directory') ?>/asssets/img/favicon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/font-awesome/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">




		<?php wp_head(); ?>
		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- [if lt IE 9] > <script src="https://oss.maxcdn.com/html5shiv/3.7.2/"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![ednif]-->



	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>


			<!--================HEADER=======================-->


			<header class="site-header" role="banner">

				<nav class="navbar navbar-toggleable-sm fixed-top navbar-inverse bg-inverse">
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<a class="navbar-brand" href="index.php"> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt=""> </a>



					<!-- If the menu (WP admin area ) is not set , then the "menu_class" is applied to "container". In other words,  it overwitrtes the "container_class" Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4-->

					<?php 
					wp_nav_menu( array(

						'theme_location'   => 'primary',
						'container'				 => 'nav',
						'container_class'  => 'navbar-collapse collapse',
						'menu_class'			 =>  'nav navbar-nav navbar-right'

					)	)
					?>
					<!--					<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
<ul class="nav navbar-nav ">
<li class="nav-item active">
<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="blog.php">Blog</a>
</li>
<li class="nav-item">
<a class="nav-link" href="resources.php">Resources</a>
</li><li class="nav-item">
<a class="nav-link" href="contact.php">Contact</a>
</li>
</ul>

</div>-->
				</nav>


