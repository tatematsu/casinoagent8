<?php get_header(); ?>
	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<p>
<span class="themedetails">
<h2>Posted on <?php the_date(); ?> in <strong><?php the_category(', '); ?></strong></h2>
<br /><br /><h2><?php the_tags( '<p class=\'tags\'>Theme Tags: <strong>', ', ', '</strong></p>'); ?></h2>
<a href="#comments" title="Jump to the comments"><img border="0" src="<?php bloginfo('template_url'); ?>/images/comments.png" style="margin-bottom:-3px;"alt="Responses"><strong><?php comments_number('Leave a Comment','1 Response','% Responses'); ?></a></strong>
<?php if(function_exists('sociable_html')) { print sociable_html(); } ?>
<?php edit_post_link('Edit this entry.','',''); ?>
</span>

				<div class="details2">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				</div>
</p>

	<div class="clear"></div>		
<br /><br />

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div><!-- End CONTENT Div -->

	</div><!-- End PAGE Div -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
