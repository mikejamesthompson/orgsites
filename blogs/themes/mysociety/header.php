<!DOCTYPE html><!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-gb"><![endif]--><!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en-gb"><![endif]--><!--[if IE 8]><html class="no-js lt-ie9" lang="en-gb"><![endif]--><!--[if gt IE 8]>
<!-- --><html lang="en-gb" class="no-js"><![endif]-->
<head>
	<meta charset="UTF-8">
	
	<meta name="creator" content="http://www.mysociety.org/">
	<meta http-equiv="imagetoolbar" content="false">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<?php if(is_single() || is_page()): ?>
		<?php if(is_array(get_field('meta_description'))) :?>
			<meta name="description" content="<?php echo get_field('meta_description'); ?>">
		<?php endif; ?>
	<?php endif; ?>
	
	<title><?php
	        if ( is_single() ) { single_post_title(); }
	        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); }
	        elseif ( is_page() ) { bloginfo('name'); print ' | '; single_post_title(''); }
	        elseif ( is_search() ) { bloginfo('name'); print ' | Search Results for ' . wp_specialchars($s); }
          elseif ( is_category() ) { bloginfo('name'); single_cat_title(' | Posts in Category '); }
          elseif ( isset($mysoc_static_title) ) { bloginfo('name'); print " | " . esc_html( $mysoc_static_title ); }
	        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
	        else { bloginfo('name'); wp_title('|'); }
	?></title>
	<!--[if !IE]><!--><noscript><link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'></noscript><!-- <![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen, print" charset="utf-8">
	<!--[if lte IE 8]><link rel="stylesheet" href="/wp-content/themes/mysociety/ie.css" type="text/css" media="screen, print" charset="utf-8"><![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/print.css" type="text/css" media="print" charset="utf-8">

	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.6.1.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="http://use.typekit.com/bth0qpr.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<link rel="shortcut icon" href="/favicon.ico">
    <? wp_head(); ?>
</head>

<body id="mysociety-org" <? body_class(); ?>>

<?
if (is_front_page()) {
?>
	<header class="header">
		<h1 class="logo"><a href="/">mySociety</a></h1>
		<p class="oneliner"><a href="/about/"><?php echo get_bloginfo('description'); /*  <span class="info">(click to learn more about mysociety)</span> */ ?></a></p>
	</header>
<?
} else {
	get_template_part('logo');
}

