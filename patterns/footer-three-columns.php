<?php
/**
 * Title: Footer with text, links, buttons.
 * Slug: uniblock/footer-three-columns
 * Categories: uniblock-footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"},"margin":{"top":"0px"}}},"layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-top:0px;padding-top:40px;padding-bottom:40px">
<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:paragraph -->
<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> Your Company LLC</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Privacy Policy', 'uniblock' ); ?></a> · <a href="#"><?php echo esc_html__( 'Terms of Service', 'uniblock' ); ?></a> · <a href="#"><?php echo esc_html__( 'Contact Us', 'uniblock' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"background","iconColorValue":"#fff","iconBackgroundColor":"foreground","iconBackgroundColorValue":"#000","className":"is-style-default","style":{"spacing":{"blockGap":"10px"}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
<!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"instagram"} /-->
<!-- wp:social-link {"url":"#","service":"twitter"} /-->
</ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
