<?php get_header(); ?>


	<!-- start content -->
	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div class="details">
			<h3><?php the_title(); ?></h3>
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php edit_post_link('Edit this entry.', '<p align="right">', '</p>'); ?>
			</div>
		<?php endwhile; endif; ?>


</div><!-- End CONTENT Div -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
