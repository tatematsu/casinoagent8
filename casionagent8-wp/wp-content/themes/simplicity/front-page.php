<?php 

$tmpl_path = get_template_directory_uri();

//インデクスリスト用 ?>
<?php get_header(); ?>
<div id="special_content">
	<a href="http://casinoking8881.com/affiliate/link.php?id=N0000002&adwares=A0000002"><img src="http://casinoking8881.com/affiliate/file/image/201505/ef182b86475fb67f7293677263e3f273.jpg" border="0"></a></div>
<h3 class="promotion_label">週間カジノジャンプのイチ押しコンテンツ</h3>
<div id="promotion">
<!-- banner upper -->
<?php

// バナーのローテーション
$file = file_get_contents('./banner_code/upper_banner_code.csv'); //server
//$file = file_get_contents('../banner_code/upper_banner_code.csv'); //local

$lines = explode("\n", $file );
foreach ($lines as $line) {
    $records[] = explode(",",$line);
} 
//print_r( $records );

//テキストファイルの行数を数えて、
$banner_count = count ( $records ); 

//1~MAX番号で乱数取得
$banner_row = rand(1,$banner_count) - 1;
if ( !$banner_row || $banner_row == " " || $banner_row == "" || $banner_row == 0 ){
	$banner_row = 1;
}

//printf("[%s]/", $banner_row );
//printf("%s", $records[$banner_row][3] );

//echo $banner_row;
printf ("<a href=%s>", $records[$banner_row][1] );
print "<img src=".$tmpl_path;
print "/images/";
printf("%s", $records[$banner_row][2] );
print " class=promotion_banner>";

?>
</a>
<!-- banner upper -->

</div>
<!--
<h3 class="promotion_label">オススメランキング</h3>
<div id="ranking">おすすめ１位〜４位</div>
-->
<h3 class="promotion_label">おすすめのコンテンツはこちら</h3>
<div id="recommend">
<ul>
<?php

$args = array(
	'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field' => 'id',
			'terms' => 3
		)
	),'posts_per_page'=>9);

// クエリ　イベント情報を抽出
$the_query = new WP_Query( $args );

// ループ
while ( $the_query->have_posts() ) : $the_query->the_post();
	print"<li><a href=".get_the_permalink().">";
	print"<span class=title>";
	the_post_thumbnail('thumbnail');
	the_title();
	echo '</a></span></li>';
endwhile;

// 投稿データをリセット
wp_reset_postdata();

?>
</ul>
<div class="clearfix"></div>	
</div>
&nbsp;
<!--
<div class="banner">
<img src="<?php print $tmpl_path; ?>/images/32red-0225-banner.jpg">
</div>
-->

<h3 class="promotion_label">新着コンテンツはこちら</h3>
<div id="news">
<ul>
<?php

$args = array(
	'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field' => 'id',
			'terms' => 4
		)
	),'posts_per_page'=>9);

// クエリ　イベント情報を抽出
$the_query = new WP_Query( $args );

// ループ
while ( $the_query->have_posts() ) : $the_query->the_post();
	print"<li><a href=".get_the_permalink().">";
	print"<span class=title>";
	the_post_thumbnail('thumbnail');
	the_title();
	echo '</a></span></li>';
endwhile;

// 投稿データをリセット
wp_reset_postdata();

?>
<div class="clearfix"></div>
</ul>	
</div>
<?php //get_template_part('page') ?>

<?php get_footer(); ?>