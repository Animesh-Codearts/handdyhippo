<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage handdyhippo
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 
	 *
	 * @return void
	 */
	function handdyhippo_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'handdyhippo-columns-overlap',
				'label' => esc_html__( 'Overlap', 'handdyhippo' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'handdyhippo-border',
				'label' => esc_html__( 'Borders', 'handdyhippo' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'handdyhippo-border',
				'label' => esc_html__( 'Borders', 'handdyhippo' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'handdyhippo-border',
				'label' => esc_html__( 'Borders', 'handdyhippo' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'handdyhippo-image-frame',
				'label' => esc_html__( 'Frame', 'handdyhippo' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'handdyhippo-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'handdyhippo' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'handdyhippo-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'handdyhippo' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'handdyhippo-border',
				'label' => esc_html__( 'Borders', 'handdyhippo' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'handdyhippo-separator-thick',
				'label' => esc_html__( 'Thick', 'handdyhippo' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'handdyhippo-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'handdyhippo' ),
			)
		);
	}
	add_action( 'init', 'handdyhippo_register_block_styles' );
}
