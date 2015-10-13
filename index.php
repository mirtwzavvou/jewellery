<?php

get_header(); ?>

	<!-- site-content -->
	<div class="site-content clearfix">

		<!-- content-column -->
		<div class="content-column">

			<?php if (have_posts()) :
			while (have_posts()) : the_post();

			get_template_part('content', get_post_format());

			endwhile;

			else:
				echo '<p>No content found </p>';

			endif; ?>

		</div><!-- /content-column -->

		<?php get_sidebar(); ?>

	</div><!-- /site-content -->



<?php get_footer();

?>
