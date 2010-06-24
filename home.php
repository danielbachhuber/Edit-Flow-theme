<?php get_header(); ?>

<div id="feature-list" class="grid_4">
	<h3>Features</h3>
	
	<ul>
		<li>
			<span class="feature-title">Custom Statuses</span>
			<span class="feature-description">Define custom statuses that are specific to your newsroom and your workflow.</span>
		</li>
		<li>
			<span class="feature-title">Editorial Comments</span>
			<span class="feature-description">Leave comments within WordPress to give feedback on articles. Bring conversation into your editorial workflow.</span>
		</li>
		<li>
			<span class="feature-title">Email Notifications &amp; User Groups</span>
			<span class="feature-description">Keep track of activity via email updates. Create user groups to better manage alerts.</span>
		</li>
	</ul>
</div>
<div class="grid_4">
	<h3>Screenshots</h3>
	
	<a href="<?php bloginfo('template_url'); ?>/images/wp-dashboard.png" rel="screenshots"><img src="<?php bloginfo('template_url'); ?>/images/wp-dashboard.png" alt="Custom Statuses" class="screenshot" /></a>
	<a href="<?php bloginfo('template_url'); ?>/images/usergroupnotifications.png" rel="screenshots"><img src="<?php bloginfo('template_url'); ?>/images/usergroupnotifications-thumb.png" alt="Usergroup Email Notifications" class="screenshot" /></a><div style="clear:both"></div>
	<a href="<?php bloginfo('template_url'); ?>/images/editorialcomments.png" rel="screenshots"><img src="<?php bloginfo('template_url'); ?>/images/editorialcomments-thumb.png" alt="Threaded Editorial Comments" class="screenshot" /></a>
	<a href="<?php bloginfo('template_url'); ?>/images/usergroups.png" rel="screenshots"><img src="<?php bloginfo('template_url'); ?>/images/usergroups.png" alt="Usergroups" class="screenshot" /></a>
</div>
<div id="blog-updates" class="grid_4">
	<h3>Updates</h3>
	
	<?php query_posts('posts_per_page=1'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- The Loop -->
		<div class="blog-entry">
			<h5><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title(); ?></a></h5>

 				<?php the_excerpt(); ?>
				<ul class="metadata">
					<li>Posted on <?php the_time('F j, Y'); ?></li>
				</ul>
		</div>
	<?php endwhile; ?>
	<?php endif; ?><!-- /The Loop -->
</div>

<?php get_footer(); ?>