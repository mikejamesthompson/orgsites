<?php get_header();?>

<body id="mysociety-org" class="productpage for_orgs fms">
	
	<?php //TODO Design in the edit this page link?>
	<?php edit_post_link(); ?>
	<header class="header">
		<h1 class="logo"><a href="<?php echo get_bloginfo( 'url', 'raw' ); ?>">mySociety</a></h1>
	</header>
	
	<div id="content">
		
		<article class="product">
			
			<header>
				
				<ul class="screenshots">
					<?php if(get_field('image')):?>
						<li><a href="#"><img src="<?php echo get_field('image'); ?>" alt="<?php the_title().' Feature Image';?>"></a></li>
					<?php else :?>
						<li><a href="#"><img src="http://placehold.it/460x370" alt="Default image"></a></li>
					<?php endif ?>
				</ul>
				
				<hgroup>
					<h2><?php the_title();?></h2>
					<h3><?php echo get_field('strapline')?></h3>
				</hgroup>
				
				<p><?php echo get_field('overview')?></p>
				
			</header>
	
			<?php
				//prepare some specific resources 
				$resources = get_field('resources');
				if(count($resources) > 0 ){
					//split these up into the relative bits
					foreach($resources as $resource){
						switch ($resource['type']) {
							case 'public':
						        $public = $resource;
						        break;
							case 'blog':
						        $blog = $resource;
						        break;
						    case 'github':
						        $github = $resource;
						        break;
						    case 'wiki':
						        $wiki = $resource;
						        break;
							case 'document':
						        $document = $resource;
						        break;
							case 'faq':
						        $faq = $resource;
						        break;
							case 'group':
						        $group = $resource;
						        break;
							case 'twitter':
						        $twitter = $resource;
						        break;
							case 'irc':
						        $irc = $resource;
						        break;
							case 'facebook':
						        $facebook = $resource;
						        break;
						}
					}
				}
			?>

			<section class="product-facets">
				<ul>
					<?php if(isset($public)):?><li>
						<h3>Visit the original version</h3>
						<p>This code grew from mySociety's own site - check out the original here.</p>
						<p><a class="btn fms" href="<?php echo $public['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $public['text'];?></a></p>
					<?php endif ?>
					<?php if(isset($document)):?><li>
						<h3>Start with the handbook</h3>
						<p>An easy-read guide, taking you step-by-step through every aspect of setting up your site.</p>
						<p><a class="btn fms" href="<?php echo $document['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: text-top;opacity:0.5" alt=""> <?php echo $document['text'];?></a></p>
					</li>
					<?php endif ?>
					<?php if(isset($wiki)):?><li>
						<h3>Documentation</h3>
						<p>Point your developer towards this wiki. Something missing? Let us know, or add it yourself.</p>
						<p><a class="btn fms" href="<?php echo $wiki['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/docs-white.png" style="vertical-align: middle;opacity:0.5" alt=""> <?php echo $wiki['text'];?></a></p>
					</li><?php endif ?>
					<?php if(isset($github)):?><li>
						<h3>Download the code</h3>
						<p>Everything's packaged up on Github: download, fork.. and contribute your changes back.</p>
						<p><a class="btn fms" href="<?php echo $github['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/download-white.png" style="vertical-align: text-top;opacity:0.5" alt=""> <?php echo $github['text'];?></a></p>
					</li><?php endif ?>
					<?php if(isset($blog)):?><li>
						<h3>What's happening?</h3>
						<p>Check out the news on development and goings on in our blog.</p>
						<p><a class="btn fms" href="<?php echo $blog['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $blog['text'];?></a></p>
					</li><?php endif ?>
					<?php if(isset($faq)):?><li>
						<h3>Need answers?</h3>
						<p>We've compiled a list of our most frequently asked questions.</p>
						<p><a class="btn fms" href="<?php echo $faq['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $faq['text'];?></a></p>
					</li><?php endif ?>
					<?php if(isset($facebook)):?><li>
						<h3>Like this?</h3>
						<p>You can follow us on Facebook.</p>
						<p><a class="btn fms" href="<?php echo $facebook['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $facebook['text'];?></a></p>
					</li><?php endif ?>
					<?php if(isset($irc)):?><li>
						<h3>Want to talk?</h3>
						<p>We hang out on IRC - feel free to join us in the chatroom.</p>
						<p><a class="btn fms" href="<?php echo $irc['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $irc['text'];?></a></p>
					</li><?php endif ?>
					<?php if(isset($group)): ?><li>
						<h3>Help each other</h3>
						<p>Our Google Group is the place to share your experiences and help others get up and running.</p>
						<p><a class="btn fms" href="<?php echo $group['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $group['text'];?></a></p>
					</li><?php endif ?>
				</ul>
			</section>
		</article>		
		
	</div>
	
	<?php get_footer();?>
	
</body>
</html>