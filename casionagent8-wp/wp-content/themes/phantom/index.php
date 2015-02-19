<?php get_header(); ?>

	<!-- start content -->
	<div id="content">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		
		
<div class="image" id="image-<?php the_ID(); ?>">
			<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read More... :: Click here to read <?php the_title(); ?>"><?php the_title(); ?></a></h3><span><?php comments_popup_link('0', '1', '%'); ?></span>


			<?php if (function_exists('get_the_image_link')) { echo get_the_image_link(array('Tips2','Tips2'),'thumbnail','http://farm4.static.flickr.com/3127/2531119093_86f6e22283_m.jpg'); } else { the_content_rss('...', FALSE, '<br />', 30); } ?>
			
			<div class="clear"></div>
			<div class="ratings"><?php if(function_exists('the_ratings')) { the_ratings(); } ?></div>
			</div><!-- Item Div -->
			<?php endwhile; ?>
			<div class="clear"></div>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
<?php endif; ?>

</div><!-- End CONTENT Div -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>