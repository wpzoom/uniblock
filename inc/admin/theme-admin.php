<?php
/**
 * Theme admin functions.
 *
 * @package UniBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
* Add admin menu
*
* @since 1.0.0
*/
function uniblock_theme_admin_menu() {
	add_theme_page(
		esc_html__( 'UniBlock Getting Started', 'uniblock' ),
		esc_html__( 'UniBlock Theme', 'uniblock' ),
		'manage_options',
		'uniblock-theme',
		'uniblock_admin_page_content',
		30
	);
}
add_action( 'admin_menu', 'uniblock_theme_admin_menu' );


/**
* Add admin page content
*
* @since 1.0.0
*/
function uniblock_admin_page_content() {
	$theme = wp_get_theme();
	$theme_name = 'UniBlock';
	$active_theme_name = $theme->get('Name');

	?>

		<div class="uniblock-page-header">
			<div class="uniblock-page-header__container">
				<div class="uniblock-page-header__branding">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/admin/img/theme_logo.png' ); ?>" class="uniblock-page-header__logo" alt="<?php echo esc_attr__( 'UniBlock', 'uniblock' ); ?>" />
				</div>
				<div class="uniblock-page-header__tagline">
					<span  class="uniblock-page-header__tagline-text">
						<?php echo esc_html__( 'Designed by ', 'uniblock' ); ?>
						<a href="https://www.wpzoom.com/"><?php echo esc_html__( 'WPZOOM', 'uniblock' ); ?></a>
					</span>					
				</div>				
			</div>
		</div>

		<div class="wrap uniblock-container">
			<div class="uniblock-grid">

				<div class="uniblock-grid-content">
					<div class="uniblock-body">

                        <a href="https://www.wpzoom.com/" target="_blank"><img class="center" src="<?php echo esc_url( get_template_directory_uri() . '/assets/admin/img/uniblock.png' ); ?>" alt="<?php echo esc_attr__( 'UniBlock', 'uniblock' ); ?>" /></a>

						<h1 class="uniblock-title"><?php esc_html_e( 'Getting Started', 'uniblock' ); ?></h1>
						<p class="uniblock-intro-text">
							<?php echo esc_html__( 'UniBlock is a next-generation WordPress theme that adopts the Full Site Editing concept. Using the new Theme Editor, you have complete control over the design of your website. You can now change not just the colors and fonts in your theme but also make changes to the layout and global sections like the header and footer.', 'uniblock' ); ?>
						</p>
						<p class="uniblock-intro-text">
						<a href="https://www.wpzoom.com/documentation/uniblock/" target="_blank"><?php echo esc_html__( 'UniBlock Documentation', 'uniblock' ); ?></a>
						</p>
						<br><br><hr>
						<br><br>

						<h1 class="uniblock-title"><?php esc_html_e( 'Get More with Our Premium Plugins & Themes!', 'uniblock' ); ?></h1>
						<p class="uniblock-intro-text">
							<?php echo esc_html__( 'UniBlock is our first Full-site-editing theme, but we also have a broad collection of more than 30 Premium Themes and popular plugins to help you build websites easier with WordPress.', 'uniblock' ); ?>
						</p>
                        <p class="uniblock-intro-text">
                            <?php echo esc_html__( 'If you\'re happy with the UniBlock theme and looking to support the theme authors, we\'d highly appreciate it if you could purchase one of our premium themes or plugins.', 'uniblock' ); ?>
                        </p>
						<p><a href="https://www.wpzoom.com/themes/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'View All Themes', 'uniblock' ); ?></a> <a href="https://www.wpzoom.com/plugins/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'View All Plugins', 'uniblock' ); ?></a></p>
						<a href="https://www.wpzoom.com/" target="_blank"><img class="center" src="<?php echo esc_url( get_template_directory_uri() . '/assets/admin/img/wpzoom.png' ); ?>" alt="<?php echo esc_attr__( 'UniBlock', 'uniblock' ); ?>" /></a>


					</div> <!-- .body -->

				</div> <!-- .content -->
				
				<!-- Sidebar -->
				<aside class="uniblock-grid-sidebar">
					<div class="uniblock-grid-sidebar-widget-area">

						<div class="uniblock-widget">
							<h2 class="uniblock-widget-title"><?php echo esc_html__( 'Useful Links', 'uniblock' ); ?></h2>
							<ul class="uniblock-useful-links">
								<li>
									<a href="https://www.wpzoom.com/documentation/uniblock/" target="_blank"><?php echo esc_html__( 'UniBlock Documentation', 'uniblock' ); ?></a>
								</li>
								<li>
									<a href="https://wordpress.org/support/theme/uniblock/" target="_blank"><?php echo esc_html__( 'Support', 'uniblock' ); ?></a>
								</li>
								<li>
									<a href="https://www.wpzoom.com/themes/" target="_blank"><?php echo esc_html__( 'View our Premium Themes', 'uniblock' ); ?></a>
								</li>
                                <li>
                                    <a href="https://www.wpzoom.com/plugins/" target="_blank"><?php echo esc_html__( 'View our Premium Plugins', 'uniblock' ); ?></a>
                                </li>
							</ul>
						</div>

						<div class="uniblock-widget">
							<h2 class="uniblock-widget-title"><?php echo esc_html__( 'Leave us a review', 'uniblock' ); ?></h2>
							<p><?php echo esc_html__( 'Are you are enjoying UniBlock? We would love to hear your feedback.', 'uniblock' ); ?></p>
							<a href="https://wordpress.org/support/theme/uniblock/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Submit a review', 'uniblock' ); ?></a>
						</div>

					</div>					
				</aside>	

			</div> <!-- .grid -->

		</div>
	<?php
}
