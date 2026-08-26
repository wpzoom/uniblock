<?php
/**
 * Title: Sidebar
 * Slug: uniblock/sidebar
 * Categories: uniblock-general
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2><?php echo esc_html__( 'Subscribe', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Sign up with your email address to receive our weekly news', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form action="/action_page.php">
    <input type="text" placeholder="<?php echo esc_attr__( 'Name', 'uniblock' ); ?>" name="name" required="">
    <input type="text" placeholder="<?php echo esc_attr__( 'Email address', 'uniblock' ); ?>" name="mail" required="">
    <input type="submit" value="<?php echo esc_attr__( 'Subscribe', 'uniblock' ); ?>">
</form>
<!-- /wp:html -->

<!-- wp:separator {"style":{"color":{"background":"#6d6d7845"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#6d6d7845;color:#6d6d7845"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2><?php echo esc_html__( 'Latest news', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts /-->

<!-- wp:separator {"style":{"color":{"background":"#6d6d784f"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#6d6d784f;color:#6d6d784f"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2><?php echo esc_html__( 'Categories', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true} /-->

<!-- wp:separator {"style":{"color":{"background":"#6d6d784f"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#6d6d784f;color:#6d6d784f"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2><?php echo esc_html__( 'Search', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'uniblock' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Enter your keywords', 'uniblock' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'uniblock' ); ?>"} /-->

<!-- wp:separator {"style":{"color":{"background":"#6d6d784f"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#6d6d784f;color:#6d6d784f"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->