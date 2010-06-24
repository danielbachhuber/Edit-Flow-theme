<?php get_header(); ?>

<div id="page" class="grid_8">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- The Loop -->
	
		<h2><?php the_title(); ?></h2>
		
		<?php the_content(); ?> 
	    
	<?php endwhile; else: ?>
		
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		
	<?php endif; ?><!-- /The Loop -->
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>