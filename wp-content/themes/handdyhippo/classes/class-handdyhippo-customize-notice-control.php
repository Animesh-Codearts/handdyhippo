<?php
/**
 * Customize API: handdyhippo_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage handdyhippo

 */

/**
 * Customize Notice Control class.
 *

 *
 * @see WP_Customize_Control
 */
class handdyhippo_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	
	 *
	 * @var string
	 */
	public $type = 'handdyhippo-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'handdyhippo' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/handdyhippo/#dark-mode-support', 'handdyhippo' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'handdyhippo' ); ?>
			</a></p>
		</div>
		<?php
	}
}
