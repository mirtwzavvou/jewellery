<?php

/*
Template Name: Special Layout2
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<!-- column-container -->
		<div class="column-container clearfix">
		
			<!-- menu-column -->
			<div class="menu-column">
				<header class="jewel-header">
					<nav class="jewel-nav">
				
						<?php /*				
							$args = array(
							'theme_location' => 'side'
							);
							*/
						?>
						
						<?php wp_nav_menu(array( 
						'theme_location' => 'side', 
						'menu_class' => 'dropdown', 
						'container_id' => 'navigation', 
						'fallback_cb' => 'wp_page_menu' 
						)); ?>
			
					</nav>
				</header>
			</div><!-- /menu-column -->
		
			<!-- text-column -->
			<div class="text-column">
				<?php the_content(); ?>
			</div><!-- /text-column -->
			
		</div><!-- /column-container -->
		
	
	<?php endwhile;
	
	else:
		echo '<p>No content found </p>';
		
	endif; 
	
get_footer(); 

?>