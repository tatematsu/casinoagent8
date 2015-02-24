<?php 

$tmpl_path = get_template_directory_uri();

//インデクスリスト用 ?>
<?php get_header(); ?>
<div id="promotion" class="square">プロモーション</div>
<h3 class="top_h3"><img src="<?php print $tmpl_path; ?>/images/h_recommend_contents.jpg" alt="おすすめのコンテンツはこちら"></h3>
<div id="recommend" class="square">おすすめ</div>
<div class="banner">バナー</div>
<h3 class="top_h3"><img src="<?php print $tmpl_path; ?>/images/h_new_contents.jpg" alt="おすすめのコンテンツはこちら"></h3>
<div id="news" class="square">新着情報</div>
<?php //get_template_part('page') ?>

<?php get_footer(); ?>