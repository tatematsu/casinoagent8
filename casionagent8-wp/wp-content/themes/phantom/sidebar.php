<div id="sidebar">
<a title="Go Home" href="<?php bloginfo('url'); ?>/"><h3><?php bloginfo('name'); ?></h3></a>
<br />
<div id="description"><h1><?php bloginfo('description'); ?></h1></div>
<br />

<?php include (TEMPLATEPATH."/searchform.php");?>
<br /> 

<div class="clear"></div>
<div id="right">
<div class="blocchisidebar">
<div class="left">
<ul><?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
<?php endif; ?>
</ul>
</div>

<div class="right">
<ul><?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('right') ) : ?>
<?php endif; ?>
</ul>
</div>
<div class="clear"></div>
</div>
</div>

<div class="clear"></div>





</div>
