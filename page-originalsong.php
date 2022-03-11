<?php
/**
* Template Name: movie
*/ 
get_header("2");?>

<div class="main-wrapper">
<h1><?php the_title(); ?></h1>
<div class="originalsong-flex">
<?php
global $post;
$args = array(
  'posts_per_page' => 12,
  'post_type'=> 'originalsong',
  'paged' =>get_query_var('paged',1)
);


$myposts = new WP_Query( $args );
if($myposts->have_posts()):?>
<?php while ( $myposts->have_posts() ) : $myposts->the_post(); ?>
  <dl class='originalsongs'>
  <a class="link" href="<?php the_permalink(); ?>"></a>
    <dd class='originalsong-image'><?php the_post_thumbnail();?></dd>
    <dd class='originalsong-content'><?php the_content(); ?></dd>
  </dl>
<?php endwhile; ?>
<?php endif; wp_reset_postdata();?>

</div>

<div class="pagenate">
       <?php //ページリスト表示処理
       global $wp_rewrite;
       $paginate_base = get_pagenum_link(1);
       if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
           $paginate_format = '';
           $paginate_base = add_query_arg('paged','%#%');
       }else{
           $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
           user_trailingslashit('page/%#%/','paged');
           $paginate_base .= '%_%';
       }
       echo paginate_links(array(
           'base' => $paginate_base,
           'format' => $paginate_format,
           'total' => $myposts->max_num_pages,
           'mid_size' => 1,
           'current' => ($paged ? $paged : 1),
           'prev_text' => '<',
           'next_text' => '>',
       ));
       ?>
</div>
</div>

<?php get_footer(); ?>