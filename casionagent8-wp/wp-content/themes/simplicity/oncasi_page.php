<?php
/*
 * Template Name:oncasi_page
*/
?>

<?php get_header(); ?>

  <?php get_template_part('breadcrumbs-page'); //固定ページパンくずリスト?>
  <h3 class="promotion_label"><?php echo get_the_title(); ?></h3>

  <?php

  $args = array(
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field' => 'id',
        'terms' => 3
      )
    ),'posts_per_page'=>10);

  // クエリ　イベント情報を抽出
  $the_query = new WP_Query( $args );

  // ループ
  while ( $the_query->have_posts() ) : $the_query->the_post();
    print"<div class='recommend_games'><a href=".get_the_permalink().">";
    the_post_thumbnail('thumbnail');
    print"<p>";
    the_title();
    echo '</p></a>';
    print"<p style='font-size:0.7em;margin:0;'>";
    the_excerpt();
    print'</p></div>';
  endwhile;

  // 投稿データをリセット
  wp_reset_postdata();
?>

<?php get_footer(); ?>