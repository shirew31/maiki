<?php
/**
* Template Name: membership-login
*/
get_header("2");?>

<div class="login-wrapper">
  <h1>page-login.php</h1>
  <div class="login">
    <?php echo do_shortcode('[swpm_login_form]'); ?>
  </div>
</div>


<?php get_footer(); ?>
