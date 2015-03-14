<!-- sidebar -->
<aside>
<div id="sidebar">
<div style="width:160px;margin:auto;">
<h4 class="widgettitle" style="font-size:0.8em;text-align:center;">カジノジャンプオススメ</h4>
<script type="text/javascript" charset="UTF-8" src="http://www.samuraiclick.com/js/url.js"></script><a style="float:left;" href="http://sports.williamhill.com/bet/ja" onclick="return samurai_lps('783','72536','31','18667');"><img src="http://www.samuraiclick.com/ads?bid=783&tid=72536&lid=31" /></a>
<script type="text/javascript" charset="UTF-8" src="http://www.samuraiclick.com/js/url.js"></script><a href="http://verajohn.com" onclick="return samurai_lps('687','72539','34','18667');"><img src="http://www.samuraiclick.com/ads?bid=687&tid=72539&lid=34" /></a>
<script type="text/javascript" charset="UTF-8" src="http://www.samuraiclick.com/js/url.js"></script><a href="http://doramahjong.com" onclick="return samurai_lps('740','72535','18','18667');"><img src="http://www.samuraiclick.com/ads?bid=740&tid=72535&lid=18" /></a>
</div>
  <?php get_template_part('ad-sidebar');//サイドバートップ広告の呼び出し ?>


  <!-- ウイジェット -->
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : 
    dynamic_sidebar( 'sidebar-1' );
  endif;?>  
  
  <?php if (is_active_sidebar('sidebar-scroll') && !wp_is_mobile() ): ?>
  <!--スクロール追従領域-->
  <div id="sidebar-scroll">
    <?php dynamic_sidebar('sidebar-scroll');?>
  </div>
  <?php endif; ?>
  
</div></aside><!-- /#sidebar -->