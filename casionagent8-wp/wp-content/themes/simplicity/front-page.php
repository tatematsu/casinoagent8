<?php 

$tmpl_path = get_template_directory_uri();

//インデクスリスト用 ?>
<?php get_header(); ?>
<h3 class="promotion_label">週間カジノジャンプのイチ押しコンテンツ</h3>
<div id="promotion">
<a href="http://www.samuraiclick.com/aclk?bid=428&tid=72520&lid=31&aid=18667">
<img src="<?php print $tmpl_path; ?>/images/williamhillsports-0225.jpg" class="promotion_banner">
</a></div>
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
<div class="banner"><img src="<?php print $tmpl_path; ?>/images/32red-0225-banner.jpg"></div>
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