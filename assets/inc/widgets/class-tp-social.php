<?php
/**
 * Social media links
 *
 * @package TrendPress
 * @subpackage Widgets
 */
class TP_Social extends WP_Widget {
	function TP_Social() {
		$this->WP_Widget( 'TP_Social', __( 'Social media links', 'tp' ), array( 'description' => __( 'Shows links to specified social network profiles', 'tp' ) ) );
	}
	
	function form( $instance ) {
		$defaults = array(
			'title' => __( 'Social', 'tp' ),
		);

		$instance = wp_parse_args( $instance, $defaults );
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">
				<strong><?php _e( 'Title' ); ?></strong><br />
				<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $instance['title']; ?>" />
			</label>
		</p>

		<p><?php printf( __( 'Change the contents of this widget on the <a href="%1$s">contact information</a> page.', 'tp' ), admin_url( 'options-general.php?page=tp-information' ) ); ?></p>

		<?php
	}
	
	function widget( $args, $instance ) {
		extract( $args );

		echo $before_widget;

			if( $instance['title'] ) 
				echo $before_title . $instance['title'] . $after_title; 

			?>

			<ul class="social">

				<?php if( $twitter = get_option( 'tp-twitter' ) ) { ?>

					<li class="twitter">
						<a href="<?php echo $twitter; ?>" title="<?php _e( 'Follow us on Twitter', 'tp' ); ?>" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
					</li>

				<?php } if( $facebook = get_option( 'tp-facebook' ) ) { ?>

					<li class="facebook">
						<a href="<?php echo $facebook; ?>" title="<?php _e( 'Like our Facebook page', 'tp' ); ?>" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
					</li>

				<?php } if( $googleplus = get_option( 'tp-googleplus' ) ) { ?>

					<li class="googleplus">
						<a href="<?php echo $googleplus; ?>" title="<?php _e( 'Add us on Google+', 'tp' ); ?>" target="_blank">
							<i class="fa fa-google-plus"></i>
						</a>
					</li>

				<?php } if( $linkedin = get_option( 'tp-linkedin' ) ) { ?>

					<li class="linkedin">
						<a href="<?php echo $linkedin; ?>" title="<?php _e( 'Connect with us on LinkedIn', 'tp' ); ?>" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>
					</li>

				<?php } if( $youtube = get_option( 'tp-youtube' ) ) { ?>

					<li class="youtube">
						<a href="<?php echo $youtube; ?>" title="<?php _e( 'View our YouTube channel', 'tp' ); ?>" target="_blank">
							<i class="fa fa-youtube"></i>
						</a>
					</li>

				<?php } if( $newsletter = get_option( 'tp-newsletter' ) ) { ?>

					<li class="email">
						<a href="<?php echo $newsletter; ?>" title="<?php _e( 'E-mail newsletter', 'tp' ); ?>">
							<i class="fa fa-envelope"></i>
						</a>
					</li>

				<?php } if( 'true' == get_option('tp-rss') ) { ?>

					<li class="rss">
						<a href="<?php bloginfo( 'rss2_url' ); ?>" title="<?php _e( 'Subscribe via RSS', 'tp' ); ?>">
							<i class="fa fa-rss"></i>
						</a>
					</li>

				<?php } ?>
				
			</ul>

			<?php 
		echo $after_widget;
	}
}
add_action( 'widgets_init', create_function( '', 'return register_widget( "TP_Social" );' ) );
