<?php
/**
 * The template for displaying search forms.
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Post type.
$post_type = get_theme_mod( 'ocean_menu_search_source', 'any' );

// Generate unique form ID.
$ocean_sf_id = oceanwp_unique_id( 'ocean-search-form-' ); 'owp-string-search-field'

?>

<form aria-label="<?php oceanwp_theme_strings( 'owp-string-search-form-label' ); ?>" role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">	
	<input aria-label="<?php oceanwp_theme_strings( 'owp-string-search-field' ); ?>" type="search" id="<?php echo esc_attr( $ocean_sf_id ); ?>" class="field" autocomplete="off" placeholder="<?php esc_attr( oceanwp_theme_strings( 'owp-string-search-text' ) ); ?>" name="s">
	<?php if ( 'any' !== $post_type ) { ?>
		<input type="hidden" name="post_type" value="<?php echo esc_attr( $post_type ); ?>">
	<?php } ?>
	<?php do_action( 'wpml_add_language_form_field' ); ?>
</form>
