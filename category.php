<?php get_header(); ?>

<div id="blog-post" class="grid_8">
	<h2 class="archives-title">Recent <?php single_cat_title(); ?> Posts</h2>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- The Loop -->
		<div class="blog-entry">
			<h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title(); ?></a></h3>

      <ul class="metadata">
				<li>By <?php the_author(); ?></li>        
				<li>Posted on <?php the_time('F j, Y'); ?></li>
			</ul>

			<?php the_excerpt(); ?>
			<ul class="metadata">
				<li>Posted on <?php the_time('F j, Y'); ?></li>
				<li><?php the_tags(); ?></li>
			</ul>
		</div>
	<?php endwhile; ?>
	<?php endif; ?><!-- /The Loop -->
	
	<ul class="more-posts">
		<li>
			<span class="left"><?php previous_posts_link('Earlier Posts'); ?></span>
			<span class="right"><?php next_posts_link('Older Posts'); ?></span>
		</li>
	</ul>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>