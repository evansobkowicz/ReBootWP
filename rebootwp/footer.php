	
	<div class="container">
		<footer>
			<p class="copyright">&copy;<?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> &nbsp; | &nbsp; <?php wp_loginout(); ?></p>
		</footer>
	</div>

	</div><!--/wrapper-->
	
    <!-- JavaScript
    ================================================== -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/app.js"></script>
    
    <?php wp_footer(); ?>
    
  </body>
</html>
