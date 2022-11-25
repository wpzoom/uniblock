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
						<a href="https://www.wpzoom.com/documentation/uniblock/" target="_blank"><?php echo esc_html__( 'UniBlock Documentation', 'uniblock' ); ?></a> &nbsp;&nbsp; <strong><a href="https://www.wpzoom.com/themes/uniblock-pro/" target="_blank"><?php echo esc_html__( 'UniBlock PRO', 'uniblock' ); ?></a></strong>

						</p>
						<br><br><hr>
						<br><br>

                        <a href="https://www.wpzoom.com/themes/uniblock-pro/" target="_blank"><img style="border:3px solid #333; border-radius:10px; margin:0 0 45px; filter: drop-shadow(0px 12px 38px rgba(0, 0, 0, 0.17)) drop-shadow(0px 3px 28px rgba(0, 0, 0, 0.09)) drop-shadow(0px 1px 18px rgba(0, 0, 0, 0.08));" class="center" src="<?php echo esc_url( get_template_directory_uri() . '/assets/admin/img/pro.png' ); ?>" alt="<?php echo esc_attr__( 'UniBlock', 'uniblock' ); ?>" /></a>

						<h1 class="uniblock-title"><?php esc_html_e( 'UniBlock PRO Now Available!', 'uniblock' ); ?></h1>

                        <h2><?php esc_html_e( 'Get Access to More Patterns, Header & Footer Layouts with the PRO Version!', 'uniblock' ); ?></h2>
						<p class="uniblock-intro-text">
							<?php echo __( 'UniBlock PRO comes packaged with numerous features to help you build beautiful websites in seconds. Get access to <strong>premium block patterns</strong>, <strong>header & footer layouts</strong>, and a <strong>1-click demo content importer</strong> to help you get started quickly.', 'uniblock' ); ?>
						</p>

						<p><a href="https://www.wpzoom.com/themes/uniblock-pro/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Get UniBlock PRO &rarr;', 'uniblock' ); ?></a></p>


					</div> <!-- .body -->

				</div> <!-- .content -->
				
				<!-- Sidebar -->
				<aside class="uniblock-grid-sidebar">
					<div class="uniblock-grid-sidebar-widget-area">

                        <div class="uniblock-widget">
                            <h2 class="uniblock-widget-title"><?php echo esc_html__( 'Get UniBlock PRO!', 'uniblock' ); ?></h2>
                            <p><?php echo esc_html__( 'We\'ve released UniBlock PRO, an advanced version of the UniBlock theme. The PRO version includes additional patterns, header & footer layouts, and more.', 'uniblock' ); ?></p>
                            <a href="https://www.wpzoom.com/themes/uniblock-pro/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Get the PRO Version &rarr;', 'uniblock' ); ?></a>
                        </div>


						<div class="uniblock-widget">
							<h2 class="uniblock-widget-title"><?php echo esc_html__( 'Useful Links', 'uniblock' ); ?></h2>

							<ul class="uniblock-useful-links">
                                <li>
                                    <strong><a href="https://www.wpzoom.com/themes/uniblock-pro/" target="_blank"><?php echo esc_html__( 'UniBlock PRO', 'uniblock' ); ?></a> - <em>NEW</em></strong>
                                </li>
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
