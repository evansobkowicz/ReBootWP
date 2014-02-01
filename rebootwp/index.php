<?php get_header(); ?>
    
	    <div class="container">     
	      
	    	<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
			?>		
		      	
	      	    <article>
           			<h2><?php the_title(); ?></h2>
       				<?php if (has_post_thumbnail()) { ?>
		        		<div class="feat-img">
							<?php the_post_thumbnail(); ?>
		        		</div>
				    <?php } ?>
					
					<div class="article-content"> 
						<?php the_excerpt(); ?>
					</div>
					
        		</article>


			<?php
					}
				} else {
			?>
					<h2>Not Found</h2>	
					<p>Sorry, no posts could be found.</p>
			<?php 
				}
			?>

		  <div class="pagination-container">
	   			<?php page_navi(); ?>
	   	  </div>
	
	    </div> <!-- /container -->
	
<?php get_footer(); ?>