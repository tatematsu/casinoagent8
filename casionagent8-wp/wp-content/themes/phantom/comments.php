<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
	?>
			
		<p class="center"><?php _e("This post is password protected. Enter the password to view comments."); ?><p>
				
<?php	return; } }


	/* Function for seperating comments from track- and pingbacks. */
	function k2_comment_type_detection($commenttxt = 'Comment', $trackbacktxt = 'Trackback', $pingbacktxt = 'Pingback') {
		global $comment;
		if (preg_match('|trackback|', $comment->comment_type))
			return $trackbacktxt;
		elseif (preg_match('|pingback|', $comment->comment_type))
			return $pingbacktxt;
		else
			return $commenttxt;
	}

	$templatedir = get_bloginfo('template_directory');
	
	$comment_number = 1;
?>

<!-- You can start editing here. -->
<div class="clear"></div>
<div class="clear"></div>
<?php if (($comments) or ('open' == $post-> comment_status)) { ?>

<h3 class="leave"><?php comments_number('0 responses', '1 response', '% responses' );?></h3>


<div class="comment-list" id="comments">
	<ol>

	<?php if ($comments) { ?>

		<?php $count_pings = 1; foreach ($comments as $comment) { ?>
	
		<li class="comment <?php if (k2_comment_type_detection() != "Comment") { echo('trackback'); } ?>" id="comment-<?php comment_ID() ?>">
		<strong class="number"><?php if(function_exists('get_avatar')) { echo get_avatar($comment, '32'); } ?></strong>
		<div class="top">
<p><?php comment_author_link() ?> (<?php comment_date('M j, Y') ?>, <?php comment_time() ?>)
</p>
</div>
<div class="body">
<p><?php if ($comment->comment_approved == '0') : ?>
				<strong>(awaiting moderation)</strong>
				<?php endif; ?>
				
				<?php comment_text() ?></p>
</div>
</li>

			
		
		<?php $comment_number++; } /* end for each comment */ ?>
	
	</ul>
		
	<?php } else { // this is displayed if there are no comments so far ?>

		<?php if ('open' == $post-> comment_status) { ?> 
			<!-- If comments are open, but there are no comments. -->

		<?php } else { // comments are closed ?>

			<!-- If comments are closed. -->

			<?php if (is_single) { // To hide comments entirely on Pages without comments ?>
				<li class="comment">
					<div class="entry">
						<p>Like gas stations in rural Texas after 10 pm, comments are closed.</p>
					</div>
				</li>
			<?php } ?>
	
		<?php } ?>

	</ul>
</div>
	<?php } ?>


	<!-- Comment Form -->
	<?php if ('open' == $post-> comment_status) : ?>
	<div class="details">
	
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	
			<p>You must <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">log in</a> to post a comment.</p>
	
		<?php else : ?>

<h3 class="leave">Leave a Comment</h3><br />
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment_form">
			
			<?php if ( $user_ID ) { ?>
	
				<p class="unstyled">Logged in as <strong><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a></strong>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>"><small>Logout</small></a></p><br />
	
			<?php } ?>
			<?php if ( !$user_ID ) { ?>
				<p><input class="text_input" type="text" name="author" id="author" value="name" onfocus="if(this.value=='name')this.value='';" onblur="if(this.value=='')this.value='name';" tabindex="1" /></p>
				<p><input class="text_input" type="text" name="email" id="email" value="e-mail" onfocus="if(this.value=='e-mail')this.value='';" onblur="if(this.value=='')this.value='e-mail';" tabindex="2" /></p>
				<p><input class="text_input" type="text" name="url" id="url" value="website" onfocus="if(this.value=='website')this.value='';" onblur="if(this.value=='')this.value='website';" tabindex="3" /></p>
			<?php } ?>
				<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>
			
				<p><textarea class="text_input text_area" name="comment" id="comment" rows="7" cols="36" tabindex="4" onfocus="if(this.value=='Type your comment here')this.value='';" onblur="if(this.value=='')this.value='Type your comment here';">Type your comment here</textarea></p>
			
				<?php if (function_exists('show_subscription_checkbox')) { show_subscription_checkbox(); } ?>
			
				<p>
					<input name="submit" class="submit" type="submit" id="submit" tabindex="5" value="Submit" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
				</p>
		
				<?php do_action('comment_form', $post->ID); ?>
	
			</form>

		<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>

<div class="clear flat"></div>
</div>
<?php } ?>