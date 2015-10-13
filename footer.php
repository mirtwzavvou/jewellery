	<footer class="site-footer">
	
		<!-- footer-widgets -->
		<div class="footer-widgets clearfix">
		
			<?php if(is_active_sidebar('footer1')) :?>
				<div class="footer-widget-area">
				<?php dynamic_sidebar('footer1'); ?>
				</div>
			<?php endif; ?>
			
			<?php if(is_active_sidebar('footer2')) :?>
				<div class="footer-widget-area">
				<?php dynamic_sidebar('footer2'); ?>
				</div>
			<?php endif; ?>
			
			<?php if(is_active_sidebar('footer3')) :?>
				<div class="footer-widget-area">
				<?php dynamic_sidebar('footer3'); ?>
				</div>
			<?php endif; ?>
			
			<?php if(is_active_sidebar('footer4')) :?>
				<div class="footer-widget-area">
				<?php dynamic_sidebar('footer4'); ?>
				</div>
			<?php endif; ?>
			
		</div><!-- /footer-widgets -->

		<nav class="footer-nav">
				<?php 
				
				$args = array(
					'theme_location' => 'footer'
				);
				
				?>
				<?php wp_nav_menu(	$args ); ?>
		</nav>
		
		<div class="copyright">
			<p>&copy; <?php echo date('Y'); ?> <a href="">MiRto-handmade</a>. Powered by me</p>
		</div>
			
	</footer>

</div><!-- container -->

<?php wp_footer(); ?>
</body>
</html>