<?php
/**
 * Customize API: It_Next_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage It_Next
 * @since It Next 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since It Next 1.0
 *
 * @see WP_Customize_Control
 */
class It_Next_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since It Next 1.0
	 *
	 * @var string
	 */
	public $type = 'it-next-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @access public
	 *
	 * @since It Next 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'itnext' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/it-next/#dark-mode-support', 'itnext' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'itnext' ); ?>
			</a></p>
		</div>
		<?php
	}
}
