<div id="sidebar" class="grid_4">
	<div id="search">
		<form id="searchform" method="get" action="<?php bloginfo('home'); ?>/">
			<input type="text" name="s" id="s" value="Type to search..." onfocus="if (this.value == 'Type to search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Type to search...';}" />
			<input type="submit" id="sbutt" value="Search" />
		</form>
	</div>
	<?php if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('Blog Sidebar') ) : ?>
	<?php endif; ?>
</div>