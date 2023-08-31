<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage It_Next
 * @since It Next 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since It Next 1.0
	 *
	 * @return void
	 */
	function It_Next_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'itnext-columns-overlap',
				'label' => esc_html__( 'Overlap', 'itnext' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'itnext-border',
				'label' => esc_html__( 'Borders', 'itnext' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'itnext-border',
				'label' => esc_html__( 'Borders', 'itnext' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'itnext-border',
				'label' => esc_html__( 'Borders', 'itnext' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'itnext-image-frame',
				'label' => esc_html__( 'Frame', 'itnext' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'itnext-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'itnext' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'itnext-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'itnext' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'itnext-border',
				'label' => esc_html__( 'Borders', 'itnext' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'itnext-separator-thick',
				'label' => esc_html__( 'Thick', 'itnext' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'itnext-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'itnext' ),
			)
		);
	}
	add_action( 'init', 'It_Next_register_block_styles' );
}
