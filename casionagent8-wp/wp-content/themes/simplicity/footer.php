       <div id ="bottom-box">
        <div id="special_content_bottom">
        <a href="http://www.jj8lottery.com/?t_jj8_aff=agent8&amp;a_bid=93bdac25" target="_top"><img src="http://affiliate.jj8lottery.com/accounts/default1/banners/Gold rush.png" alt="Gold Rush" title="Gold Rush"   /></a><img style="border:0" src="http://affiliate.jj8lottery.com/scripts/imp.php?t_jj8_aff=agent8&amp;a_bid=93bdac25" width="1" height="1" alt="" />
        </div>
        <div id="bottom-left">
        <!--
        <ul>
          <li>・・・・・・・・・・・・</li>
          <li>・・・・・・・・・・・・</li>
          <li>・・・・・・・・・・・・</li>
          <li>・・・・・・・・・・・・</li>
         <li>・・・・・・・・・・・・</li>
          <li>・・・・・・・・・・・・</li>
          <li>・・・・・・・・・・・・</li>
        </ul>
        -->
        </div>
        <div id="bottom-right">
        <!--
        <div class="mv_frame">動画１</div><div class="mv_frame">動画２</div>-->
        </div>
        <img src="<?php print get_template_directory_uri(); ?>/images/footer_logo.jpg" width="100%" alt="週刊カジノジャンプ">
      </div><!-- bottom-box -->

          </div><!-- /#main -->

        <?php get_sidebar(); ?>

        </div><!-- /#body-in -->
      </div><!-- /#body -->
    </div><!-- /#container -->
    </div><!-- wrapper -->

    <!-- footer -->
    <div id="footer" style="background:#000;">
      <div id="footer-in">

      <div id="footer-widget">
         <div class="footer-left">
         <?php if ( dynamic_sidebar('footer-left') ) : else : ?>
         <?php endif; ?>
         </div>
         <div class="footer-center">
         <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-center') ) : else : ?>
         <?php endif; ?>
         </div>
         <div class="footer-right">
         <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-right') ) : else : ?>
         <?php endif; ?>
         </div>
      </div>
      <div class="clear"></div>
        <div id="copyright" class="wrapper" style="background:#000;">
          <?php echo get_site_license(); //サイトのライセンス表記の取得 ?>
            
          <?php if ( is_local_test() && is_responsive_test_visible() ): //ローカルかつ設定で表示になっている場合のみ?>
            <br /><a href="<?php echo get_template_directory_uri().'/responsive-test/?'.get_this_page_url(); ?>" target="_blank" rel="nofollow">レスポンシブテスト</a>
          <?php endif; ?>
        </div>
    </div><!-- /#footer-in -->
    </div><!-- /#footer -->
    <?php if ( is_go_to_top_button_visible() ): //トップへ戻るボタンを表示するか?>
    <div id="page-top">
      <a id="move-page-top"><i class="fa <?php echo get_go_to_top_button_icon_font(); //Font Awesomeアイコンフォントの取得 ?> fa-2x"></i></a>
    </div>
    <?php endif; ?>
    <?php get_template_part('analytics');?>
    <?php get_template_part('footer-insert');?>
    <?php wp_footer(); ?>
  </body>
</html>