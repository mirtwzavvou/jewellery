<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="default-page">

		<!-- column-container -->
		<div class="column-container clearfix">

			<!-- content-column -->
			<div class="content-column">
				<?php the_content(); ?>
			</div><!-- /content-column -->

		</div><!-- /column-container -->

	</article>

	<?php endwhile;

	else:
		echo '<p>No content found </p>';

	endif;

get_footer();

?>
