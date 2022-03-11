<?php
/**
* Template Name: create-account
*/ 
get_header("2");?>

<div class="account-wrapper">
  <h1><?php the_title(); ?></h1>
  <div class="account">
    <?php echo do_shortcode('[swpm_registration_form]'); ?>
  </div>
</div>


<?php get_footer(); ?>