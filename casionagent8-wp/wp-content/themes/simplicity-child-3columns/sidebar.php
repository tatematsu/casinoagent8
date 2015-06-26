<!-- sidebar -->
<aside>
<div id="sidebar">
<h4 class="widgettitle" style="font-size:0.8em;text-align:center;">【マストプレイ】オンカジ</h4>
<div id="ultra_push"  style="width:160px;margin:auto;">
<a href="http://success-max.info"><img src="<?php print get_template_directory_uri(); ?>/images/smartlive_girl_pic.jpg"></a>
<a href="http://casinoking8881.com/affiliate/link.php?id=N0000002&adwares=A0000002"><img src="http://casinoking8881.com/affiliate/file/image/201505/b238ac3123f68256c99a252d1e6fe69c.jpg" border="0"></a>
<a href="http://wlmontecarloaffiliates.adsrv.eacdn.com/C.ashx?btag=a_16432b_13177c_&affid=12450&siteid=16432&adid=13177&c="><img src="<?php print get_template_directory_uri(); ?>/images/montecalro_girl_pic.jpg"></a>
<a href="http://wlmontecarloaffiliates.adsrv.eacdn.com/C.ashx?btag=a_16432b_3873c_&affid=12450&siteid=16432&adid=3873&c="><img src="<?php print get_template_directory_uri(); ?>/images/imperial_girl_pic.jpg"></a>
</div>
<div style="width:160px;margin:auto;">
<h4 class="widgettitle" style="font-size:0.8em;text-align:center;">カジノジャンプオススメ</h4>
<?php
// サイド上バナーのローテーション
$file = file_get_contents('../banner_code/side_upper_banner_code.csv');
$lines = explode("\n", $file );
foreach ($lines as $line) {
    $records[] = explode(",",$line);
} 
//テキストファイルの行数を数えて、
$banner_count = count ( $records ); 
//1~MAX番号で乱数取得
$banner_row = rand(1,$banner_count) - 1;
if ( !$banner_row || $banner_row == " " || $banner_row == "" || $banner_row == 0 ){
  $banner_row = 1;
}
//echo $banner_row;
//print_r ( $records );
// あとでDB化する。
printf ("%s", $records[$banner_row][1] );
printf ("%s", $records[$banner_row][2] );
printf ("%s", $records[$banner_row][3] );
printf ("%s", $records[$banner_row][4] );
?>
<?php
// サイド上バナーのローテーション
$file = file_get_contents('../banner_code/side_bottom_banner_code.csv');
$lines = explode("\n", $file );
foreach ($lines as $line) {
    $records[] = explode(",",$line);
} 
//テキストファイルの行数を数えて、
$banner_count = count ( $records ); 
//1~MAX番号で乱数取得
$banner_row = rand(1,$banner_count) - 1;
if ( !$banner_row || $banner_row == " " || $banner_row == "" || $banner_row == 0 ){
  $banner_row = 1;
}
// あとでDB化する。
printf ("%s", $records[$banner_row][1] );
printf ("%s", $records[$banner_row][2] );
printf ("%s", $records[$banner_row][3] );
printf ("%s", $records[$banner_row][4] );
?>
<!-- カジノ新聞 -->
<a href="http://www.casinoshinbun.com/"><img src="<?php print get_template_directory_uri(); ?>/images/casino-shinbun-banner.jpg"></a>
<!-- カジノ新聞 -->
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