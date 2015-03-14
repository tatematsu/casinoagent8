<!-- leftbar -->
<aside>
<div id="leftbar">
  <!-- ウイジェット -->
  <?php if ( is_active_sidebar( 'sidebar-left' ) ) : 
    dynamic_sidebar( 'sidebar-left' );

  else:
    echo 'ウイジェットが設定されていません。';
  endif;?>
  
</div></aside><!-- /#leftbar -->