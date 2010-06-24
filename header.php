<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en" />

<title>
<?php wp_title(''); ?>
<?php if(wp_title('', false)) { echo ' » '; } ?>
<?php bloginfo('name'); ?>
</title>

<!-- Styles for the 960.gs framework -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/stylesheets/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/stylesheets/text.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/stylesheets/960.css" />
<!-- Site specific stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />

<?php wp_head(); ?>

</head>

<body>
<div id="wrap" class="container_12"><!-- Page wrap -->
	<div id="header" class="grid_12">
		<ul id="nav"><!-- Main navigation -->
			<?php wp_list_pages('title_li=&depth=1'); ?>
			<li><a href="category/blog" title="See the most recent blog updates">Blog</a></li>
			<li><a href="http://wordpress.org/extend/plugins/edit-flow/" title="Download from the WordPress directory">Download</a></li>
		</ul><!-- /Main navigation -->
	</div>
	
	<div id="project-info" class="grid_10 push_1"><!-- Main image -->
		<a href="<?php bloginfo('url'); ?>" title="Go Home"><img src="<?php bloginfo('template_url'); ?>/images/edit-flow-logo-large.png" class="site-logo-large" alt="Edit Flow" /></a>
		<h4>Redefining your WordPress workflow</h4>
	</div><!-- /Main image -->