<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="menu-script.js"></script>
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

	<link rel="shortcut icon" href="http://localhost/wordpress/wp-content/uploads/2015/06/logosmall.png" />

<body >

			<div class="container">
				<!-- site-header -->
				<header class="site-header">
					<!-- menu-frame -->
					<div id='menu-frame' class='cssmenu'>
						<div class='logo'>
							<div id='circle'>
								<img id='logoimg' src="http://localhost/wordpress/wp-content/uploads/2015/10/logo.png" alt="logo">
							</div>
						</div>

						<!-- primary-menu -->
						<nav class="primary-nav">
								<?php

								$args = array(
									'theme_location' => 'primary'
								);

								?>
								<?php wp_nav_menu(	$args ); ?>
						</nav><!-- /primary-menu -->
					</div><!-- /menu-frame -->
				</header><!-- /site-header -->
