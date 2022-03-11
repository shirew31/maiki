<?php
/**
 * Template Name: accounts
 */
get_header( "2" ); ?>

<div class="account-wrapper">
	
	<?php
	
	if( is_page( 'join' ) ){
		
		get_template_part( 'template-parts/content', "join" );
		
	} elseif( is_page( 'temporary-registration' ) ) {
		
		get_template_part( 'template-parts/content', "temporary-registration" );
		
	} elseif( is_page( 'registration' ) ) {
		
		get_template_part( 'template-parts/content', "registration" );
		
	} elseif( is_page( 'login' ) ) {
		
		get_template_part( 'template-parts/content', "login" );
		
	} elseif( is_page( 'profile' ) ) {
		
		get_template_part( 'template-parts/content', "profile" );
		
	} elseif( is_page( 'password-reset' ) ) {
		
		get_template_part( 'template-parts/content', "password-reset" );
		
	}
	
	?>

</div>

<?php get_footer(); ?>
