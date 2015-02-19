<?php
//Simplicity子テーマ用の関数を書く

// サイドバーウィジットを有効化
register_sidebars(1,
  array(
  'name' => '左サイドバーウイジェット',
  'id' => 'sidebar-left',
  'description' => '左サイドバーのウィジットエリアです。',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title'  => '<h4 class="widgettitle">',
  'after_title'   => '</h4>',
));
