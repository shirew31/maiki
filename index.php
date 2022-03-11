<?php get_header(); ?>

<div class="announce-2">
  <p>
    お待たせいたしました！<br>
    新規会員登録の受け付け開始いたしました！
  </p>
</div>

<!--<section class="announce">-->
<!---->
<!--  <h2>【重要】新規会員登録について</h2>-->
<!---->
<!--  <div class="announce__text">-->
<!--    <p>ファンの皆様へ</p>-->
<!--    <p>-->
<!--      ファンクラブ新規会員登録にはメール認証が必須となります。<br>-->
<!--      キャリアメール(@docomo.ne.jp・@i.softbank.jp・ezweb.ne.jp・icloud.com)でのご登録の場合は、当サイトからのメールが迷惑メールに分類され不達となる可能性があります。<br>-->
<!--      大変恐縮ではございますが迷惑メールの設定並びにGmail等で再度ご登録していただきたく存じます。<br>-->
<!--      また、Gmailやその他のメールアドレスで本登録のメールがきていない方々につきましても、迷惑メールの設定を今一度ご確認していただきたく存じます。-->
<!--    </p>-->
<!--    <p>ファンクラブサイトサポートチーム</p>-->
<!--  </div>-->
<!--</section>-->

<section>
  <div class="fanclubsong" id="parallax-01">
    <div class="fanclubsong-bg">
      <h2>FANCLUBSONG</h2>

      <div class="swiper-container slider2">
		  
		  <?php
		  $posts = get_posts( array(
			  'post_type'      => 'fanclubsong', // カスタム投稿slug
			  'posts_per_page' => 5 // 記事数
		  ) );
		  ?>

        <div id="swiper" class="swiper-wrapper">
			
			<?php foreach( $posts as $post ): setup_postdata( $post ); ?>

              <div class="swiper-slide">
                <a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
                </a>
                <div class="content-bg">
                  <p><?php the_title(); ?></p>
                </div>
              </div>
			
			<?php
			endforeach;
			wp_reset_postdata();
			?>

        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>

      <div class="click">
        <a href="https://maikip.com/song/">CLICK <i class="fas fa-angle-right"></i></a>
      </div>
    </div>
  </div>
</section>

<section class="fanclubmovie" id="parallax-02">
  <h2>FANCLUBMOVIE</h2>
  <div class="click">
    <a href="https://maikip.com/movie/">CLICK <i class="fas fa-angle-right"></i></a>
  </div>
</section>

<section class="originalsong">
  <h2>ORIGINAL SONG</h2>

  <div class="swiper-container slider3">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <a href="https://linkco.re/EzQBnu5P?lang=ja" class="link"></a>
        <img src="<?php get_template_directory_uri(); ?>wp-content/themes/maiki/images/素材１.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <a href="https://linkco.re/msABrZxC?lang=ja" class="link"></a>
        <img src="<?php get_template_directory_uri(); ?>wp-content/themes/maiki/images/素材２.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <a href="https://linkco.re/D7VhHFq6?lang=ja" class="link"></a>
        <img src="<?php get_template_directory_uri(); ?>wp-content/themes/maiki/images/素材３.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <a href="https://linkco.re/vVhf3q3h?lang=ja" class="link"></a>
        <img src="<?php get_template_directory_uri(); ?>wp-content/themes/maiki/images/素材４.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <a href="https://linkco.re/Ed0x1ACR?lang=ja" class="link"></a>
        <img src="<?php get_template_directory_uri(); ?>wp-content/themes/maiki/images/素材５.jpg" alt="">
      </div>
    </div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>

<section class="news" id="parallax-03">

  <h2>NEWS</h2>

  <div class="swiper-container slider4 pc-only">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
		  
		  <?php
		  $posts = get_posts( array(
			  'post_type'      => 'post', // カスタム投稿slug
			  'posts_per_page' => 8 // 記事数
		  ) );
		  foreach( $posts as $post ): setup_postdata( $post ); ?>
            <div class="news-innner">
				<?php the_title(); ?>
				<?php the_content(); ?>
            </div>
		  <?php endforeach;
		  wp_reset_postdata(); ?>

      </div>
    </div>


    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>


  <div class="swiper-container slider4 sp-slider">
    <div class="swiper-wrapper">
		
		<?php
		$posts = get_posts( array(
			'post_type'      => 'post', // カスタム投稿slug
			'posts_per_page' => 8 // 記事数
		) );
		foreach( $posts as $post ): setup_postdata( $post ); ?>
          <div class="swiper-slide">
			  <?php the_title(); ?>
			  <?php the_content(); ?>
          </div>
		<?php endforeach;
		wp_reset_postdata(); ?>

    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

  <div class="click">
    <a href="https://maikip.com/news/">CLICK <i class="fas fa-angle-right"></i></a>
  </div>

</section>

<section class="goods">
  <div class="goods-bg">
    <h2>GOODS</h2>
    <div class="click">
      <a href="https://maikip.com/goods/">CLICK <i class="fas fa-angle-right"></i></a>
    </div>
  </div>
</section>

<section class="final-section">
  <div class="wallpaprer-bg">
    <h2>WALLPAPER</h2>
    <!-- <div class="swiper-container slider5">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="<?php get_template_directory_uri(); ?>wp-content/themes/maiki/images/素材１.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="<?php get_template_directory_uri(); ?>wp-content/themes/maiki/images/素材２.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="<?php get_template_directory_uri(); ?>wp-content/themes/maiki/images/素材３.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="<?php get_template_directory_uri(); ?>wp-content/themes/maiki/images/素材４.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="<?php get_template_directory_uri(); ?>wp-content/themes/maiki/images/素材５.jpg" alt="">
            </div>
          </div>
      
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div> -->

    <div class="click">
      <a href="https://maikip.com/wallpapers/">CLICK <i class="fas fa-angle-right"></i></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

