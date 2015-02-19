//ここに追加したいJavaScript、jQueryを記入してください。
//このJavaScriptファイルは、親テーマのJavaScriptファイルのあとに呼び出されます。
//JavaScriptやjQueryで親テーマのjavascript.jsに加えて関数を記入したい時に使用します。

jQuery(function(){
  jQuery(window).scroll(function(){
    var w = jQuery(window).width();
    var hw = jQuery('#header').css('width');
    if (w > eval(hw.replace('px',''))){
      jQuery('body').css('width', 'auto');
    }else{
      jQuery('body').css('width', hw);
    }
    console.log(w > hw);
  });
});