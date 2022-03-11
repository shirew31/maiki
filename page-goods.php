<?php
/**
* Template Name: goods
*/ 
get_header("2");?>
<div class="main-wrapper goods-content">
<h1><?php the_title(); ?></h1>
<div class="goods-flex">
<?php
global $post;
$args = array(
  'posts_per_page' => 12,
  'post_type'=> 'goods',
  'paged' =>get_query_var('paged',1)
);


?>

<div class="coming-soon">
	<p>COMING SOON</p>
</div>

</div>
</div>

<?php get_footer(); ?>