<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
	<body>
		
<?php edit_post_link(); ?>
	<header class="header">
		<h1 class="logo"><a href="<?php echo get_bloginfo( 'url', 'raw' ); ?>">mySociety</a></h1>
	</header>
	
	<div id="content">
		
		<article class="products">
			
			<article class="article">
			
				<header>
					<h2><?php the_title(); ?></h2>
					<!-- <p class="meta">Written by <a href="#">Author Name</a> on <time datetime="2012-06-01">1st June 2012</time></p> -->
				</header>
				
				<?php
		if (have_posts()) : while (have_posts()) : the_post();

		the_content();

		endwhile; endif;
	 ?>
				
			</article>
			
			
			
		</article>
		
		
		
		
	</div>
	</body>
<?php get_footer(); ?>