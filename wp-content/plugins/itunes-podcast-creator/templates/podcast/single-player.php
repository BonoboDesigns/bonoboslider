<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>RadioSuzy1</title>
    <meta name="viewport" content="width=device-width" />
    
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700|PT+Sans+Caption|Paytone+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo plugins_url( '/assets/style.css', dirname(__FILE__) );?>">
<link rel="stylesheet" href="<?php echo plugins_url( '/assets/icos.css', dirname(__FILE__) );?>">
<link rel="stylesheet" href="<?php echo plugins_url( '/assets/css/swiper.min.css', dirname(__FILE__) ); ?>">
<link rel="stylesheet" href="<?php echo plugins_url( '/assets/css/fade.css', dirname(__FILE__) ); ?>">
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="<?php echo plugins_url( '/assets/js/gfeedfetcher.js', dirname(__FILE__) );?>"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28070375-3', 'auto');
  ga('send', 'pageview');

</script>
</head>

<?php $afil = $_GET["autoplay"]; ?>
<body<?php if (isset($afil)) { ?> onLoad="playPause()"<?php } ?> class="bp-sm">
    <div id="header"><div class="container">
       <a href="http://drsusanblock.tv/main/"><img src="<?php echo get_option('UnsceneMusicLogo'); ?>"></a>
        <ul id="nav">

        <li><a href="#">Something Else <i class="ico-publish"></i> </a></li>
        <li><a href="#" onclick="myFunction('<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>')">Open Player <i class="ico-publish"></i> </a></li>
        <li style="width:100% !important; clear:both;"></li>
    </ul>
   </div></div>




<div id="content">
    <!--  end radio -->

    <div class="home">
        <div style="padding:30px 0;max-width:960px; margin:0 auto;">
            <h3>Need To Talk?</h3>
            <a href="tel:3105680066">Call Us (310) 568-0066</a><br>
        <ul class="actions">
            <li> <?php echo get_option('iTunesAuthorName'); ?>
            <div class="message"><?php echo get_option('iTunesPodcastTitle'); ?><?php echo get_option('iTunesPodcastSummary'); ?><br>
                <br><?php if( is_home() ) { echo get_bloginfo( 'title' ); }
  elseif (is_category() ) { echo single_cat_title(); }
  elseif (is_single() || is_page()) { the_title(); }
  elseif (is_search()) { echo $s; }
  elseif (is_404()) { echo "Sorry not found"; }
  else {echo the_title();} ?>
</div></li>
            <li>Tracklisting
            <div class="message"><?php echo get_option('iTunesPodcastImage'); ?></div></li>
            <li>Attend a Show
            <div class="message">this is the info i want you to read.</div></li>
            <li>Sponsors
            <div class="message">this is the info i want you to read.</div></li>
        </ul>
        </div>
    </div>

    <div class="radio">
    <div class="container">
        <div id="info">
            <div id="artwork" style="position:relative; display:inline-block;">
                <a href="#" onclick="playPause()" id="play"><i class="ico-play"></i></a>
                
                <div id="img" style="background:url('http://bloggamy.com/wp-content/uploads/2014/09/Sex-Craft_Amor_DrSuzy-Tv-180x180.jpg') no-repeat scroll center center / cover; "></div>
                <div id="advertisement" style="background:url('') repeat scroll center center / contain  rgba(0, 0, 0, 0);height:100%;width:100%;"></div>
                <div id="warningGradientOuterBarG">
                    <div id="warningGradientFrontBarG" class="warningGradientAnimationG">
                        <div class="warningGradientBarLineG"></div>
                        <div class="warningGradientBarLineG"></div>
                        <div class="warningGradientBarLineG"></div>
                        <div class="warningGradientBarLineG"></div>
                        <div class="warningGradientBarLineG"></div>
                        <div class="warningGradientBarLineG"></div>
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
            <!-- <div id="artist">
                <h1 id="hd">Listen Now</h1>
                <h2 id="dc"><a href="http://bloggamy.com" target="_new">Sky Dive Sex!</a></h2>
                <h2 id="dcc" style="display:none;"></h2>
                <h3 id="ex"><a href="http://bloggamy.com" target="_new">DSB Radio</a></h3>
                     </div> -->
                 <div id="embedcode"  style="display:none;">
                    <h1>Embed Code</h1>
                    <textarea readonly style="background: #000; color: #444; border-radius: 10px; font-size: 18px; max-width: 100%; min-width: 50%;"><iframe width="640px" height="240px" style="-webkit-border-radius: 4px; -webkit-box-shadow: 0 4px 0 #707070; -moz-border-radius: 4px; -moz-box-shadow: 0 4px 0 #707070; -o-border-radius: 4px; -o-box-shadow: 0 4px 0 #707070; border-radius: 4px; box-shadow: 0 4px 0 #707070; display: block;" frameborder="0" src="http://drsusanblock.tv/hey/player.html"></iframe></textarea></div>
            <div class='nav'>        
            <div class='next'><i class="ico-next"></i></div>
            <div class='prev unselectable'><i class="ico-previous"></i></div>
            <div id='more'><i class="ico-sharable"></i></div>

        </div>
            <div class="playlist swiper-container"> 
                <div id="artist swiper-wrapper">
        <?php if(have_posts()) : $i = 0; ?>
        <?php while(have_posts()) : the_post(); ?>
    <div class="item swiper-slide" onClick="pickSong(<?php echo $i; ?>);ga('send', 'event', 'mobile', 'Order Items', '<?php the_title(); ?>');" data-mp3="<?php Cus_enc(); ?>">
        <?php $textInfo = get_the_content(); ?>
        <h1 id='hd'><?php echo strip_tags($textInfo); ?></h1>
        <h2 id='dc'><div class='artistTXT'><?php the_title(); ?></div></h2>
        <h2 id='dcc' style='display:none;'>{datetime}</h2>
        <h3 id='ex'><a href='<?php the_permalink(); ?>' target="_new">DSB Radio</a></h3>
    </div>
    <?php if (!is_single()) { $i++; } ?>
<?php endwhile; ?>
<?php endif; ?>
                </div> 
        </div>

        


        </div>
    </div>

</div>
</div>
<!--  end content -->







<div id="footer"><div class="container">
    <ul>
        <li id="player"></li>
        <li> <!-- <ul id="sites">
            <li data-uri="1"><img src="<?php echo plugins_url( '/assets/images/ico-bloggamy.png', dirname(__FILE__) );?>" alt=""></li>
            <li data-uri="2"><img src="<?php echo plugins_url( '/assets/images/ico-tv.png', dirname(__FILE__) );?>" alt=""></li>
            <li data-uri="3"><img src="<?php echo plugins_url( '/assets/images/ico-institute.png', dirname(__FILE__) );?>" alt=""></li>
            <li data-uri="4"><img src="<?php echo plugins_url( '/assets/images/ico-marketplace.png', dirname(__FILE__) );?>" alt=""></li>
            <li style="width:100% !important; clear:both;"></li>
            </ul> -->
        </li>
    </ul>

</div>
</div> <!-- end of footer -->
<div id="playerAd" style="display:none;"></div>


</body>



<script type="text/javascript" src="<?php echo plugins_url( '/assets/js/jquery-1.9.1.min.js', dirname(__FILE__) );?>"></script>
<script>
var urls = new Array();
$(".item").each(function(){
   if($.inArray($(this).data('mp3')) == -1) // check if not in array
       urls.push($(this).data('mp3'))
});

var sticknav = function (){
    var h = $(window).height();
    if(h>141) {
        $("body").addClass('bp-lg').removeClass('bp-sm bp-md');
    } if(h<141) {
        $("body").addClass('bp-md').removeClass('bp-sm bp-lg');
    } if(h<91) {
        $("body").addClass('bp-sm').removeClass('bp-lg bp-md');
    } 
}



$(window).load(function() {
    // run our function on load
    sticknav();

    // and run it again every time you scroll
    $(window).resize(function() {
        sticknav();
    });
});
</script>

<script>
    // playlist for ads
    var adUrls = new Array();
        adUrls[0] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[1] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[2] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[3] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[4] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[5] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[6] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[7] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[8] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[9] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[10] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[11] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[12] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[13] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[14] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[15] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[16] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[17] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[18] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[19] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[20] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[21] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[22] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[23] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[24] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[25] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[26] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[27] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[28] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[29] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[30] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[31] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[32] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[33] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[34] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[35] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[36] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[37] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[38] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[39] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';
        adUrls[40] = '<?php echo plugins_url( '/assets/songs/paul.mp3', dirname(__FILE__) )?>';    
</script>
<script>
function myFunction(which) {
    var myWindow = window.open(which, "BonoboRadio", "width=800, height=600");
}
function artistLink(which) {
    var myWindow = window.open( which , 'theFrame');
}
</script>
<script type="text/javascript" src="<?php echo plugins_url( '/assets/js/script.js', dirname(__FILE__) );?>"></script>
<script src="<?php echo plugins_url( 'assets/js/swiper.min.js', dirname(__FILE__) ); ?>"></script>
<script> 
var mySwiper = new Swiper(".swiper-container", {
    pagination: ".swiper-pagination",
    paginationClickable: ".swiper-pagination",
    nextButton: ".swiper-button-next",
    prevButton: ".swiper-button-prev",
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    slidesPerView: "auto",
    preloadImages: true,
    speed: 600,
    autoplay: 2000,
    autoplayDisableOnInteraction: false,
    spaceBetween: 30,
    effect: "fade"
});
mySwiper.update();
</script>
<script>
    jQSwipe = jQuery.noConflict();
      jQSwipe(document).ready(function() {
         jQSwipe(window).load(function() {
            mySwiper.update();
        });
         jQSwipe(window).resize(function() {
            mySwiper.update();
        });
    });
</script>
</html>