<?php get_header(); ?>

<div id="blog-post" class="grid_8">
	<h2 class="archives-title"><span class="search-subtitle">Results for - </span><?php the_search_query() ?></h2>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- The Loop -->
	<?php
		$title 	= get_the_title();
		$keys= explode(" ",$s);
		$title 	= preg_replace('/('.implode('|', $keys) .')/iu',
		'<strong class="search-excerpt">\0</strong>',
		$title);
	?>
		<div class="blog-entry">
			<h5><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title(); ?></a></h5>

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