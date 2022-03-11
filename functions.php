<?php
add_action('init', 'demo_init');
function demo_init(){
	  $labels = array(
	    'name' => _x('FANCLUBSONG', 'post type general name'),
	    'singular_name' => _x('FANCLUBSONG', 'post type singular name'),
	    'add_new' => _x('新規追加', 'fanclubsong'),
	    'add_new_item' => __('新しくFANCLUBSONGを追加する'),
	    'edit_item' => __('FANCLUBSONGページを編集'),
	    'new_item' => __('新しいFANCLUBSONGページ'),
	    'view_item' => __('新規ページを見る'),
	    'search_items' => __('FANCLUBSONGページを探す'),
	    'not_found' =>  __('FANCLUBSONGページはありません'),
	    'not_found_in_trash' => __('ゴミ箱にFANCLUBSONGページはありません'),
	    'parent_item_colon' => ''

	  );
	  $args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'query_var' => true,
        'rewrite_withfront'=> true,
	    'rewrite' => true,
	    'capability_type' => 'post',
	    'hierarchical' => false,
	    'menu_position' => 5,
        'show_in_rest' => true, //カスタム投稿でgutenberg有効化する場合はtrue
	    'supports' => array('title','editor','thumbnail','page-attributes'),
	    'has_archive' => true,
		
     
	  );
	  register_post_type('fanclubsong',$args);
	  
	  
	
	/* カスタム分類を作成 - エリアの追加 */
	register_taxonomy(
		'demo_kind',
		'demo',
		array( 
		'hierarchical' => true, 
		'label' => 'FANCLUBSONGの種類',
		'labels' => array(
    		'all_items' => 'FANCLUBSONGページの種類一覧',
    		'add_new_item' => 'FANCLUBSONGの種類を追加'
    	),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'singular_label' => 'FANCLUBSONGの種類',
    'show_in_rest' => true, //カスタム投稿でgutenberg有効化する場合はtrue
		)
        /* カスタム分類の作成はここまで */ 
	);
	
	  $labels = array(
	    'name' => _x('FANCLUBMOVIE', 'post type general name'),
	    'singular_name' => _x('FANCLUBMOVIE', 'post type singular name'),
	    'add_new' => _x('新規追加', 'FANCLUBMOVIE'),
	    'add_new_item' => __('新しくFANCLUBMOVIEを追加する'),
	    'edit_item' => __('FANCLUBMOVIEページを編集'),
	    'new_item' => __('新しいFANCLUBMOVIEページ'),
	    'view_item' => __('新規ページを見る'),
	    'search_items' => __('FANCLUBMOVIEページを探す'),
	    'not_found' =>  __('FANCLUBMOVIEページはありません'),
	    'not_found_in_trash' => __('ゴミ箱にFANCLUBMOVIEページはありません'),
	    'parent_item_colon' => ''

	  );
	  $args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'query_var' => true,
        'rewrite_withfront'=> true,
	    'rewrite' => true,
	    'capability_type' => 'post',
	    'hierarchical' => false,
	    'menu_position' => 5,
        'show_in_rest' => true, //カスタム投稿でgutenberg有効化する場合はtrue
	    'supports' => array('excerpt','title','editor','thumbnail','page-attributes'),
	    'has_archive' => true,
		
     
	  );

	  register_post_type('fanclubmovie',$args);
	  
	  
	
	/* カスタム分類を作成 - エリアの追加 */
	register_taxonomy(
		'demo_kind',
		'demo',
		array( 
		'hierarchical' => true, 
		'label' => 'FANCLUBMOVIEの種類',
		'labels' => array(
    		'all_items' => 'FANCLUBMOVIEページの種類一覧',
    		'add_new_item' => 'FANCLUBMOVIEの種類を追加'
    	),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'singular_label' => 'FANCLUBMOVIEの種類',
    	'show_in_rest' => true, //カスタム投稿でgutenberg有効化する場合はtrue
		)
        /* カスタム分類の作成はここまで */ 
	);
	
	$labels = array(
	    'name' => _x('WALLPAPER', 'post type general name'),
	    'singular_name' => _x('WALLPAPER', 'post type singular name'),
	    'add_new' => _x('新規追加', 'WALLPAPER'),
	    'add_new_item' => __('新しくWALLPAPERを追加する'),
	    'edit_item' => __('WALLPAPERページを編集'),
	    'new_item' => __('新しいWALLPAPERページ'),
	    'view_item' => __('新規ページを見る'),
	    'search_items' => __('WALLPAPERページを探す'),
	    'not_found' =>  __('WALLPAPERページはありません'),
	    'not_found_in_trash' => __('ゴミ箱にWALLPAPERページはありません'),
	    'parent_item_colon' => ''

	  );
	  $args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'query_var' => true,
        'rewrite_withfront'=> true,
	    'rewrite' => true,
	    'capability_type' => 'post',
	    'hierarchical' => false,
	    'menu_position' => 5,
        'show_in_rest' => true, //カスタム投稿でgutenberg有効化する場合はtrue
	    'supports' => array('title','editor','thumbnail','page-attributes'),
	    'has_archive' => true,
		
     
	  );
	  register_post_type('wallpaper',$args);
	  
	  
	
	/* カスタム分類を作成 - エリアの追加 */
	register_taxonomy(
		'demo_kind',
		'demo',
		array( 
		'hierarchical' => true, 
		'label' => 'WALLPAPERの種類',
		'labels' => array(
    		'all_items' => 'WALLPAPERページの種類一覧',
    		'add_new_item' => 'WALLPAPERの種類を追加'
    	),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'singular_label' => 'WALLPAPERの種類',
    	'show_in_rest' => true, //カスタム投稿でgutenberg有効化する場合はtrue
		)
        /* カスタム分類の作成はここまで */ 
	);


	$labels = array(
		'name' => _x('ORIGINALSONG', 'post type general name'),
		'singular_name' => _x('ORIGINALSONG', 'post type singular name'),
		'add_new' => _x('新規追加', 'ORIGINALSONG'),
		'add_new_item' => __('新しくORIGINALSONGを追加する'),
		'edit_item' => __('ORIGINALSONGページを編集'),
		'new_item' => __('新しいORIGINALSONGページ'),
		'view_item' => __('新規ページを見る'),
		'search_items' => __('ORIGINALSONGページを探す'),
		'not_found' =>  __('ORIGINALSONGページはありません'),
		'not_found_in_trash' => __('ゴミ箱にORIGINALSONGページはありません'),
		'parent_item_colon' => ''

	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
			'rewrite_withfront'=> true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
			'show_in_rest' => true, //カスタム投稿でgutenberg有効化する場合はtrue
		'supports' => array('title','editor','thumbnail','page-attributes'),
		'has_archive' => true,
	
	 
	);
	register_post_type('originalsong',$args);
	
	

/* カスタム分類を作成 - エリアの追加 */
register_taxonomy(
	'demo_kind',
	'demo',
	array( 
	'hierarchical' => true, 
	'label' => 'ORIGINALSONGの種類',
	'labels' => array(
			'all_items' => 'ORIGINALSONGページの種類一覧',
			'add_new_item' => 'ORIGINALSONGの種類を追加'
		),
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => true,
	'singular_label' => 'ORIGINALSONGの種類',
		'show_in_rest' => true, //カスタム投稿でgutenberg有効化する場合はtrue
	)
			/* カスタム分類の作成はここまで */ 
);
	
	
	add_theme_support('post-thumbnails');
}

function single_video_page_redirect() {
	if( ! is_user_logged_in()  && is_singular('fanclubmovie') ) {
		wp_redirect( '/login' );
		exit();
	}
}
add_action( 'template_redirect','single_video_page_redirect');

function single_song_page_redirect() {
	if( ! is_user_logged_in()  && is_singular('fanclubsong') ) {
		wp_redirect( '/login' );
		exit();
	}
}
add_action( 'template_redirect','single_song_page_redirect');

function single_wallpaper_page_redirect() {
	if( ! is_user_logged_in()  && is_singular('wallpaper') ) {
		wp_redirect( '/login' );
		exit();
	}
}
add_action( 'template_redirect','single_wallpaper_page_redirect');

?>