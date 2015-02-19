<div id="list">
<div class="list1">
<h2><?php _e('Recently Commented'); ?></h2> 
<br />
<?php
				$now = gmdate("Y-m-d H:i:s",time());
				$lastmonth = gmdate("Y-m-d H:i:s",gmmktime(date("H"), date("i"), date("s"), date("m")-1,date("d"),date("Y")));
				$popularposts = "SELECT ID, post_title, post_date, comment_count, COUNT($wpdb->comments.comment_post_ID) AS 'popular' FROM $wpdb->posts, $wpdb->comments WHERE comment_approved = '1' AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status = 'publish' AND post_date < '$now' AND post_date > '$lastmonth' AND comment_status = 'open' GROUP BY $wpdb->comments.comment_post_ID ORDER BY popular DESC LIMIT 11";
				$posts = $wpdb->get_results($popularposts);
				$popular = '';
				if($posts){
				foreach($posts as $post){
				$post_title = stripslashes($post->post_title);
				$post_date = stripslashes($post->post_date);
				$comments = stripslashes($post->comment_count);
				$guid = get_permalink($post->ID);
				$popular .= '<li><span class="title"><a href="'.$guid.'" title="'.$post_title.'">'.$post_title.'</a></span><br/>
				<span class="meta">With <a href="'.$guid.'#commenting" title="Read the comments on '.$post_title.'">'.$comments.' comments</a> since '.$post_date.'</span></li>';
				}
				}echo $popular;
				?>
</div>
<div class="list1">
<h2>Tags</h2>
   <ul>
      <?php wp_tag_cloud(''); ?>
   </ul>
</div>
<div class="list1">
<?php include (TEMPLATEPATH."/searchform.php");?>
<a href="<?php bloginfo('rss2_url'); ?>"><img border="0" src="<?php bloginfo('template_url'); ?>/images/rss.png" style="margin-bottom:-3px;"alt="Subscribe"></a>
<br /><br />
</div>
</div>

<div id="footer"><p>&copy; 2008 <?php bloginfo('name'); ?> - Powered by <a href="http://wordpress.org/">WordPress</a> - Phantom theme by <a href="http://www.bestforlauren.com" title="BFL Wordpress Themes">BFL Wordpress Themes</a>
		<br />
	<!-- leave this, please! --> 
		</p>

</div>
</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
