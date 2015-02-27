<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php

$tmpl_path = get_template_directory_uri();

//////////////////////////////////
//ウェブマスターツール用のID表示
//////////////////////////////////
if ( get_webmaster_tool_id() ): ?>
<meta name="google-site-verification" content="<?php echo get_webmaster_tool_id() ?>" />
<?php endif;//ウェブマスターツールID終了 ?>
<meta charset="<?php bloginfo('charset'); ?>">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php get_template_part('header-title-tag'); //<title>タグに関する設定のためのテンプレート?>
<?php get_template_part('header-seo');//SEOの設定テンプレート?>
<?php get_template_part('header-css');//CSS関連の記述まとめテンプレート?>
<?php wp_enqueue_script('jquery');//jQueryの読み込み?>
<?php get_template_part('header-css-mobile-responsive');//モバイル時、レスポンシブ時のCSS関連ファイル読み込みテンプレート（本来ならheader-css.phpに一つにまとめたいところだけど、このテンプレート（モバイル関連の記述）をここで読み込まないとモバイルで表示が崩れるサーバもあったので、あえて分けて書いてあります。?>
<?php get_template_part('header-javascript');//JavaScript関連の記述まとめテンプレート?>
<?php if ( is_facebook_ogp_enable() ) //Facebook OGPタグ挿入がオンのとき
  get_template_part('header-ogp');//Facebook OGP用のタグテンプレート?>
<?php if ( is_twitter_cards_enable() ) //Twitterカードタグ挿入がオンのとき
  get_template_part('header-twitter-card');//Twitterカード用のタグテンプレート?>
<?php get_template_part('header-insert');//ユーザーが子テーマからヘッダーに何か記述したい時に利用するテンプレート?>
<?php wp_head(); ?>
</head>
  <body <?php body_class(); ?>>
   <div id="wrapper">
    <div id="container">
      <!-- header -->
      <div id="header" class="clearfix">
        <div id="header-in">

          <?php //カスタムヘッダーがある場合
          $h_top_style = '';
          if (get_header_image()){
            $h_top_style = ' style="background-image:url('.get_header_image().')"';
          } ?>
          <div id="h-top"<?php echo $h_top_style; ?>>
            <?php if ( is_navi_visible() ): ?>
            <!-- モバイルメニュー表示用のボタン -->
            <div id="mobile-menu">
              <a id="mobile-menu-toggle" href="#"><i class="fa <?php echo get_menu_button_icon_font(); //Font Awesomeアイコンフォントの取得 ?> fa-2x"></i></a>
            </div>
            <?php endif; ?>

            <div class="alignleft">
              <?php get_template_part('header-logo');?>
            </div>

            <div class="alignright">
              <?php  if ( is_top_follows_visible() ): //トップのフォローボタンを表示するか?>
              <?php get_template_part('sns-pages');?>
              <?php endif; ?>
            </div>

          </div><!-- /#h-top -->
        </div><!-- /#header-in -->
      </div><!-- /#header -->

      <?php if (is_navi_visible())://ナビゲーションが表示のとき
        get_template_part('navi');//グローバルナビのためのテンプレート
      endif; ?>

      <!-- 本体部分 -->
      <div id="body">
        <div id="body-in">
        <?php
        if( is_front_page() ){
          ?>
          <div id="top_main_img">

<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1070" height="360">
  <param name="movie" value="swf/casinoagent8-top.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="11.0.0.0" />
  <!-- このパラメータータグにより、Flash Player 6.0 または 6.5 以降を使用して、Flash Player の最新バージョンをダウンロードするようメッセージが表示されます。ユーザーにメッセージを表示させないようにする場合はパラメータータグを削除します。 -->
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <!-- 次のオブジェクトタグは IE 以外のブラウザーで使用するためのものです。IE では IECC を使用して非表示にします。 -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="swf/casinoagent8-top.swf" width="1070" height="360">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="11.0.0.0" />
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- ブラウザーには、Flash Player 6.0 以前のバージョンを使用して次の代替コンテンツが表示されます。 -->
    <div>
      <h4>このページのコンテンツには、Adobe Flash Player の最新バージョンが必要です。</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Adobe Flash Player を取得" width="112" height="33" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
         
          </div>
        <?php
        }
        ?>
          <?php get_template_part('before-main'); //メインカラーの手前に挿入するテンプレート（3カラム作成カスタマイズ時などに） ?>
          <!-- main -->
          <div id="main">

