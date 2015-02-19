<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require_once get_template_directory()."/my_functions.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>

</head>
<body>

<div id="wrap">
	<div id="container">

<div id="header">

<div id="menu">
<ul>
	<li class="main"><a <?php if (is_home()) echo " id=\"current\""; ?> href="<?php bloginfo('url'); ?>/">Home</a></li>
		<?php
		$pages = my_get_pages();
		if ($pages) {
			foreach ($pages as $page) {
				$page_id = $page->ID;
   				$page_title = $page->post_title;
   				$page_name = $page->post_name;
   				if ($page_name == "archives") {
   					// (is_page($page_id) || is_archive() || is_search() || is_single())?$selected = ' ':$selected='';
					(is_page($page_id) || is_archive() || is_search() || is_single())?$selected = ' id="current"':$selected='';
   					echo "<li".$selected." class=\"normal\"><a href=\"".get_page_link($page_id)."\">Archives</a></li>\n";
   				}
   				elseif($page_name == "about") {
					(is_page($page_id))?$selected = ' id="current"':$selected='';
   					echo "<li class=\"normal\"><a".$selected." href=\"".get_page_link($page_id)."\">About</a></li>\n";
   				}
   				elseif ($page_name == "contact") {
   					(is_page($page_id))?$selected = ' id="current"':$selected='';
   					echo "<li class=\"normal\"><a".$selected." href=\"".get_page_link($page_id)."\">Contact</a></li>\n";
   				}
   				elseif ($page_name == "about_short") {/*ignore*/}
           	 	else {
            		(is_page($page_id))?$selected = ' id="current"':$selected='';
            		echo "<li class=\"normal\"><a".$selected." href=\"".get_page_link($page_id)."\">$page_title</a></li>\n";
            	}
    		}
    	}
		?>
	</ul>	
</div>
</div>
