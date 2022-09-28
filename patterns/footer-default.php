<?php
/**
 * Title: Footer with text, links.
 * Slug: uniblock/footer-default
 * Categories: uniblock-footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"layout":{"type":"constrained"},"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"},"margin":{"top":"0px"}},"color":{"background":"#0e151f"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"is-style-default","fontSize":"small"} -->
<div class="wp-block-group alignfull is-style-default has-background-color has-text-color has-background has-link-color has-small-font-size" style="background-color:#0e151f;margin-top:0px;padding-top:40px;padding-bottom:40px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"grey"} -->
<h2 class="has-grey-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50)">UNIBLOCK</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type to visualize what the actual copy might look like if it were real content.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"grey","fontSize":"small"} -->
<h3 class="has-grey-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">Company</h3>
<!-- /wp:heading -->

<!-- wp:page-list /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"grey","fontSize":"small"} -->
<h3 class="has-grey-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">Legal</h3>
<!-- /wp:heading -->

<!-- wp:page-list /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"grey","fontSize":"small"} -->
<h3 class="has-grey-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">Subscribe to our Newsletter</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Sign up with your email address to receive our weekly news</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form action="/action_page.php">
    <input type="text" placeholder="Email address" name="mail" required="">
    <input type="submit" value="Subscribe">
</form>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"align":"wide","style":{"color":{"background":"#ffffff24"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#ffffff24;color:#ffffff24"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"},"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"textColor":"grey"} -->
<p class="has-grey-color has-text-color">Copyright © <?php echo esc_html( gmdate( 'Y' ) ); ?> UniBlock</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"grey"} -->
<p class="has-grey-color has-text-color">Powered by WordPress. Designed by <a href="https://www.wpzoom.com" data-type="URL" data-id="https://www.wpzoom.com" target="_blank" rel="noreferrer noopener">WPZOOM</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->