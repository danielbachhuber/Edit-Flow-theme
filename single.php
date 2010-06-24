<?php get_header(); ?>

<div id="blog-post" class="grid_8">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- The Loop -->
	
		<h2><?php the_title(); ?></h2>
		
		<?php the_content(); ?>
		
		<ul class="metadata">
			<li><?php the_date(); ?></li>
			<li><?php the_tags(); ?></li>
		</ul>   
	    
	<?php endwhile; else: ?>
		
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		
	<?php endif; ?><!-- /The Loop -->
		
	<!-- Pull in comments if the post allows. -->
	<?php comments_template('', true); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>