<?php
/*
Template Name: Partners
*/
?>
<?php get_header(); ?>
	<body>
	<h1><?php the_title(); ?></h1>
	
	<?php
		if (have_posts()) : while (have_posts()) : the_post();

		the_content();

		endwhile; endif;
	 ?>
	</body>
<?php get_footer(); ?>