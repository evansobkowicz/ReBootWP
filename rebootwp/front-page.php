<?php get_header(); ?>	
	
	<div class="container">
       
        <div class="row">
        	<div class="col-md-12">
        	
        		<?php while (have_posts()) : the_post(); ?>

        		<article>
           			<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
       				<?php if (has_post_thumbnail()) { ?>
		        		<div class="feat-img">
							<?php the_post_thumbnail(); ?>
		        		</div>
				    <?php } ?>
					
					<div class="article-content"> 
						<?php the_content(); ?>
					</div>
					
        		</article>
        		
        		<?php endwhile; ?>
        	
        	</div>	
		</div>
	
	</div><!-- /.container -->
		
<?php get_footer(); ?>		