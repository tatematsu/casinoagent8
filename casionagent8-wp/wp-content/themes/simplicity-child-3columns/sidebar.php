<!-- sidebar -->
<aside>
<div id="sidebar">
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