<?php

/*
Template Name: Special Layout
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post page">
		
		<!-- column-container -->
		<div class="column-container clearfix">
	
			<!-- special-side-column -->
			<div class="special-side-column">
				<?php the_content(); ?>
			</div><!-- /special-side-column -->
			
		</div><!-- /column-container -->
		
	</article>
	
	<?php endwhile;
	
	else:
		echo '<p>No content found </p>';
		
	endif;

get_footer();
	
?>