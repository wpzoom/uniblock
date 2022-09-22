<?php
/**
 * Title: Footer with text, button, links.
 * Slug: uniblock/footer-mega-main-background
 * Categories: uniblock-footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"18px"},"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="font-size:18px;margin-top:0px">
<!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":[]}},"spacing":{"padding":{"top":"100px","bottom":"100px"},"blockGap":"100px"}}} -->
<div class="wp-block-columns alignwide has-link-color" style="padding-top:100px;padding-bottom:100px">
<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:heading {"level":4} -->
<h4 id="our-company"><?php echo esc_html__( 'Our Company', 'uniblock' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing lectus. Vestibulum mi justo, luctus eu pellentesque vitae gravida non.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill-background"} -->
<div class="wp-block-button is-style-fill-background">
<a class="wp-block-button__link no-border-radius" href="#"><?php echo esc_html__( 'Learn More', 'uniblock' ); ?></a>
</div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%">
<!-- wp:heading {"level":4} -->
<h4 id="about-us"><?php echo esc_html__( 'About Us', 'uniblock' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:list {"fontSize":"small"} -->
<ul class="has-small-font-size">
<li><a href="#"><?php echo esc_html__( 'Start Here', 'uniblock' ); ?></a></li>
<li><a href="#"><?php echo esc_html__( 'Our Mission', 'uniblock' ); ?></a></li>
<li><a href="#"><?php echo esc_html__( 'Brand Guide', 'uniblock' ); ?></a></li>
<li><a href="#"><?php echo esc_html__( 'Newsletter', 'uniblock' ); ?></a></li>
<li><a href="#"><?php echo esc_html__( 'Accessibility', 'uniblock' ); ?></a></li>
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%">
<!-- wp:heading {"level":4} -->
<h4 id="services"><?php echo esc_html__( 'Services', 'uniblock' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:list {"fontSize":"small"} -->
<ul class="has-small-font-size">
<li><a href="#"><?php echo esc_html__( 'Web Design', 'uniblock' ); ?></a></li>
<li><a href="#"><?php echo esc_html__( 'Development', 'uniblock' ); ?></a></li>
<li><a href="#"><?php echo esc_html__( 'Copywriting', 'uniblock' ); ?></a></li>
<li><a href="#"><?php echo esc_html__( 'Marketing', 'uniblock' ); ?></a></li>
<li><a href="#"><?php echo esc_html__( 'Social Media', 'uniblock' ); ?></a></li>
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%">
<!-- wp:heading {"level":4} -->
<h4 id="connect"><?php echo esc_html__( 'Connect', 'uniblock' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:list {"fontSize":"small"} -->
<ul class="has-small-font-size">
<li><a href="#">Facebook</a></li>
<li><a href="#">Instagram</a></li>
<li><a href="#">Twitter</a></li>
<li><a href="#">LinkedIn</a></li>
<li><a href="#">Dribbble</a></li>
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
