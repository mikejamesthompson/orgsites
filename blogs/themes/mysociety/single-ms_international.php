<?php get_header();?>

	<?php get_template_part('logo')?>	
	
	<div id="content">
		
		<article class="product">
			
			<header class="section_intro">
				
				<hgroup>
					<h2><?php the_title();?></h2>
					<h3><?php echo get_field('strapline')?></h3>
				</hgroup>
				
				<div class="images">
					<ul class="slider">
						<?php if(get_field('image')):?>
						<li><a href="#"><img src="<?php echo get_field('image'); ?>" alt="<?php the_title().' Feature Image';?>"></a></li>
					<?php else :?>
						<li><a href="#"><img src="http://placehold.it/460x370" alt="Default image"></a></li>
					<?php endif ?>
					</ul>
				</div>
				
				<div class="description">
					<p><?php echo get_field('overview')?></p>
				</div>
				
			</header>
			
			<?php get_template_part('resources'); ?>
	
		</article>		
		
	</div>
	
	<?php get_footer();?>
	
</body>
</html>
