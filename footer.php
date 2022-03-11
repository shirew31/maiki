
<footer>
    <div class="footer-menu">
      <div class="footer-left">
      <?php if( SwpmMemberUtils::is_member_logged_in() ): ?>
        <a class="home-logo" href="https://maikip.com">
        <img src="<?php get_template_directory_uri();?>/wp-content/themes/maiki/images/マイ教　横ロゴ.png" class="footer-logo-login" alt="">
        </a>
        <?php else: ?>
          <a class="home-logo" href="https://maikip.com">
          <img src="<?php get_template_directory_uri();?>/wp-content/themes/maiki/images/maiki_logo.png" class="footer-logo" alt="">
          </a>
        <?php endif; ?>
        <div class="sns">
          <a href="https://mobile.twitter.com/maikidrum?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="<?php echo esc_url(get_theme_file_uri('images/twitter.png')); ?>"></a>
          <a href="https://www.instagram.com/maikidrum/?hl=ja"><img src="<?php echo esc_url(get_theme_file_uri('images/instagram.png')); ?>"></a>
          <a href="https://www.tiktok.com/@maikidrum"><img src="<?php echo esc_url(get_theme_file_uri('images/IMG_0831.png')); ?>"></a>
          <a href="https://www.youtube.com/channel/UCmAutZSvFH5mkR9OoPtpOmQ"><img src="<?php echo esc_url(get_theme_file_uri('images/youtube.png')); ?>"></a>
        </div>
      </div>

      <div class="footer-middle">
        <a href="https://maikip.com/">FANCLUB</a>
        <a href="https://maikip.com/song/">FANCLUB SONG</a>
        <a href="https://maikip.com/movie/">FANCLUB MOVIE</a>
        <a href="https://maikip.com/wallpapers/">WALLPAPER</a>
        <a href="https://maikip.com/goods/">GOODS</a>
        <a href="https://maikip.com/viproom/">VIPROOM</a>
        <a href="https://maikip.com/contact/">CONTACT</a>
        <a href="https://maikip.com/contact/#policy">プライバシーポリシー</a>
        <a href="https://maikip.com/contact/#rule">利用規約</a>
        <a href="https://maikip.com/contact/#table">特定商取引法に関する表記</a>
      </div>

      <div class="footer-right">
        <img src="<?php echo esc_url(get_theme_file_uri('images/3R4A0045.png')); ?>">
      </div>
    </div>

    <div class="copy-right">
      <p>Copyright ©️2021 .All Rights Reserved</p>
    </div>
  </footer>

  <script src="<?php $url = get_site_url();?>https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
  
  <?php wp_footer();?>
</body>
</html>
