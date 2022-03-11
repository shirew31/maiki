<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css?220120">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/animation.css">
  <title>Maiki Fanclub</title>
  <script>
    (function(d) {
      var config = {
        kitId: 'mla4rrc',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);//フォント
  </script>
  <link rel="stylesheet" href="<?php $url = get_site_url();?>https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php $url = get_site_url();?>https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <script src="<?php $url = get_site_url();?>https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
  <div class="site-wrapper">
    <header class="header">
      <nav class="pc-menu header__nav">
        <a class="home-logo" href="<?php echo esc_url( home_url() ); ?>">
          <?php if( SwpmMemberUtils::is_member_logged_in() ): ?>
            <img src="<?php echo esc_url(get_theme_file_uri('images/マイ教　横ロゴ.png')); ?>" class="login_header" alt="ロゴ">
          <?php else: ?>
            <img src="<?php echo esc_url(get_theme_file_uri('images/maiki_logo.png')); ?>" alt="ロゴ">
         <?php endif; ?>
        </a>
        <ul>
          <li><a href="<?php echo esc_url( home_url() ) . '/song/'; ?>">FANCLUB SONG</a></li>
          <li><a href="<?php echo esc_url( home_url() ) . '/movie/'; ?>">FANCLUB MOVIE</a></li>
          <li><a href="<?php echo esc_url( home_url() ) . '/goods/'; ?>">GOODS</a></li>
          <li><a href="<?php echo esc_url( home_url() ) . '/wallpapers/'; ?>">WALLPAPER</a></li>
          <li><a href="<?php echo esc_url( home_url() ) . '/viproom/'; ?>">VIPROOM</a></li>
	        <?php if( SwpmMemberUtils::is_member_logged_in() ): ?>
            <li><a href="<?php echo esc_url( home_url() ) . '/accounts/profile/'; ?>">MY PAGE</a></li>
            <li><a href="<?php echo wp_logout_url( home_url() ); ?>">LOGOUT</a></li>
	        <?php else: ?>
            <li><a href="<?php echo esc_url( home_url() ) . '/accounts/login/'; ?>">LOGIN</a></li>
	        <?php endif; ?>
        </ul>
      </nav>
      <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
      </div>
      <nav class="globalMenuSp">
        <ul class="sp-menu">
          <li><a href="https://maikip.com/song/">FANCLUBSONG</a></li>
          <li><a href="https://maikip.com/movie/">FANCLUBMOVIE</a></li>
          <li><a href="https://maikip.com/goods/">GOODS</a></li>
          <li><a href="https://maikip.com/wallpapers/">WALLPAPER</a></li>
          <li><a href="https://maikip.com/viproom/">VIPROOM</a></li>
		<?php if( SwpmMemberUtils::is_member_logged_in() ): ?>
            <li><a href="<?php echo esc_url( home_url() ) . '/accounts/profile/'; ?>">MY PAGE</a></li>
            <li><a href="<?php echo wp_logout_url( home_url() ); ?>">LOGOUT</a></li>
	        <?php else: ?>
            <li><a href="<?php echo esc_url( home_url() ) . '/accounts/login/'; ?>">LOGIN</a></li>
	        <?php endif; ?>
        </ul>
      </nav>
      <div class="snow ab-snow1"></div>
      <div class="snow ab-snow2"></div>
      <div class="snow ab-snow3"></div>
      <div class="ab-snow4">
        <div class="snow ab-snow4"></div>
      </div>
      <div class="ab-snow5">
        <div class="snow ab-snow5"></div>
      </div>
      <div class="ab-snow6">
        <div class="snow ab-snow6"></div>
      </div>
      <div class="ab-snow7">
        <div class="snow ab-snow7"></div>
      </div>
      <div class="ab-snow8">
        <div class="snow ab-snow8"></div>
      </div>
      <div class="ab-snow9">
        <div class="snow ab-snow9"></div>
      </div>
      <div class="ab-snow10">
        <div class="snow ab-snow10"></div>
      </div>
      <div class="ab-snow11">
        <div class="snow ab-snow11"></div>
      </div>
      <!-- snow top-sliderの上だけ -->
      <!-- snow-animation -->

      <!-- box-animation -->
      <div class="box-t-b ab-box1"></div>
      <div class="box-t-b ab-box2"></div>
      <div class="ab-box3">
        <div class="box-l-r ab-box3"></div>
      </div>
      <div class="box-t-b ab-box4"></div>
      <div class="box-t-b ab-box5"></div>
      <div class="box-l-r ab-box6"></div>
      <div class="box-l-r ab-box7"></div>
      <div class="box-l-r ab-box8"></div>
      <!-- box-animation -->

      <!-- line-animation -->
      <div class="line"></div>
      <div class="line2">
        <div class="line line2"></div>
      </div>
      <div class="line-vertical line3"></div>
      <div class="line line4"></div>
      <div class="line-vertical line5"></div>
      <div class="line line6"></div>
      <div class="line line7"></div>
      <!-- line-animation -->
        <div class="swiper-container slider1">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slider-bg">
                <div class="slide-img">
                  <img src="<?php get_template_directory_uri();?>/wp-content/themes/maiki/images/mainV-02-min.jpg" alt="トップ画像" id="carousel">
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="slide-img slide-img2">
                <div class="header-img">
                  <img src="<?php get_template_directory_uri();?>/wp-content/themes/maiki/images/mainV-03-min.jpg" alt="トップ画像" id="carousel">
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="slide-img">
                <div class="header-img">
                  <img src="<?php get_template_directory_uri();?>/wp-content/themes/maiki/images/mainV-01-min.jpg" alt="トップ画像" id="carousel">
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
    </header>
