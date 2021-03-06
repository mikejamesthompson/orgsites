<?php get_header();?>

<div id='content' class='blog'>
	<?php if (is_search()) : ?>		
		<hgroup>
			<h2><a href="/"><?php bloginfo('name'); ?></a></h2>
			<h3>Search results for &ldquo;<?php the_search_query(); ?>&rdquo; <?php if (get_query_var('paged')) echo ' &mdash; Page '.get_query_var('paged'); ?></h3>
		</hgroup>
	<?php elseif (is_category()) : ?>
		<hgroup>
			<h2><a href="/"><?php bloginfo('name'); ?></a></h2>
			<h3><?php single_cat_title('Blog posts in the category '); ?></h3>
		</hgroup>
	<?php else :?>
		<hgroup>
			<h2><?php bloginfo('name'); ?></h2>
			<h3><?php echo get_bloginfo('description'); ?></h3>
		</hgroup>
	<?php endif;?>
	<?php if ( have_posts() ) :?> 
		<div class="blog-entries">
			<?php get_template_part('loop')?>
		</div>
	<?php else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>

	<?php get_sidebar(); ?>
</div>

<?php get_footer();?>
