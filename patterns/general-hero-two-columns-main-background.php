<?php
/**
 * Title: Section with image, text, buttons.
 * Slug: uniblock/general-hero-two-columns-main-background
 * Categories: uniblock-general
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background" style="margin-top:0px">
<!-- wp:spacer {"height":100} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:media-text {"mediaPosition":"right","mediaId":3484,"mediaLink":"https://uniblockwp.com/patterns/hero-section/sample-white_1200x1200/","mediaType":"image","mediaWidth":40} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile" style="grid-template-columns:auto 40%"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-white_1200x1200.jpg'; ?>"  alt="<?php echo esc_attr__( 'Sample Image', 'uniblock' ); ?>" class="wp-image-3484 size-full"/></figure><div class="wp-block-media-text__content">
<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size" id="text-on-left-image-on-right"><?php echo esc_html__( 'Text on left, media on right.', 'uniblock' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque gravida vitae non diam accumsan posuere, venenatis mi turpis.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill-background"} -->
<div class="wp-block-button is-style-fill-background"><a class="wp-block-button__link no-border-radius"><?php echo esc_html__( 'Get Started', 'uniblock' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline-background"} -->
<div class="wp-block-button is-style-outline-background"><a class="wp-block-button__link no-border-radius"><?php echo esc_html__( 'Learn More', 'uniblock' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div></div>
<!-- /wp:media-text -->
<!-- wp:spacer {"height":100} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
