<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="home-page">

		<!-- column-container -->
		<div class="content-column">

			<div class='logo2'>
				<div id='circle2'>
					<img id='logoimg' src="http://localhost/wordpress/wp-content/uploads/2015/10/logo.png" alt="logo">
					<h2 > Handmade Jewellery<br></h2>
					<p>by Mirto Zavvou</p>
				</div>
			</div>
			<img src="http://localhost/wordpress/wp-content/uploads/2015/10/bub1.png" id="bub1"/>
			<img src="http://localhost/wordpress/wp-content/uploads/2015/10/bub2.png" id="bub2"/>
			<img src="http://localhost/wordpress/wp-content/uploads/2015/10/bub3.png" id="bub3"/>
			<img src="http://localhost/wordpress/wp-content/uploads/2015/10/bub4.png" id="bub4"/>
			<img src="http://localhost/wordpress/wp-content/uploads/2015/10/bub5.png" id="bub5"/>
			<img src="http://localhost/wordpress/wp-content/uploads/2015/10/bub6.png" id="bub6"/>
			<img src="http://localhost/wordpress/wp-content/uploads/2015/10/bub7.png" id="bub7"/>

				<?php /*the_content(); */?>

		</div><!-- /column-container -->

	</article>

	<?php endwhile;

	else:
		echo '<p>No content found </p>';

	endif;

get_footer();

?>
