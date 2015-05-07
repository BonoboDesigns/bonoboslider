/*! share mode popup */
var iTunes = jQuery.noConflict();
iTunes(document).ready(function(){
  iTunes('.actions li span').each( function() {
   iTunes(this).click(function(){
    var X=iTunes(this).attr('data-uri');
    if(X==null | X=='0'){
      iTunes(this).removeClass('selected');
      iTunes(this).parent('.node').find('.message').removeClass('visible');
      iTunes(this).attr('data-uri', '1');
    } else {
      iTunes(this).addClass('selected');
      iTunes(this).parent('.node').find('.message').addClass('visible');
      iTunes(this).attr('data-uri', '0');
    }
  });
 });
}); 


iTunes(document).ready(function ($) {
  iTunes('#iTunesPodcastImage_button').click(function() {
    formfield = iTunes('#iTunesPodcastImage').attr('name');
    tb_show('', 'media-upload.php?type=image&TB_iframe=true');
    return false;
  });

  window.send_to_editor = function(html) {
    imgurl = iTunes('img',html).attr('src');
    iTunes('#iTunesPodcastImage').val(imgurl);
    tb_remove();
    iTunes('#iTunesPodcastImage_thumb').html("<img width='100%' src='"+imgurl+"'/>");
  }
  iTunes('#UnsceneMusicLogo_button').click(function() {
    formfield = iTunes('#UnsceneMusicLogo').attr('name');
    tb_show('', 'media-upload.php?type=image&TB_iframe=true');
    return false;
  });
  // window.send_to_editor = function(html) {
  //   imgurl = iTunes('img',html).attr('src');
  //   iTunes('#UnsceneMusicLogo').val(imgurl);
  //   tb_remove();
  //   iTunes('#UnsceneMusicLogo_thumb').html("<img width='100%' src='"+imgurl+"'/>");
  // }
  
}); 