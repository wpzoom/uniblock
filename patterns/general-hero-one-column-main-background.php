<?php
/**
 * Title: Section with image, text, buttons.
 * Slug: uniblock/general-hero-one-column-main-background
 * Categories: uniblock-general
 */
?>
<!-- wp:group {"layout":{"type":"constrained","wideSize":"800px"},"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"foreground","textColor":"background"} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background" style="margin-top:0px">
<!-- wp:spacer {"height":100} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:image {"id":3482,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-white_1920x1200.jpg'; ?>"  alt="<?php echo esc_attr__( 'Sample Image', 'uniblock' ); ?>" class="wp-image-3482"/></figure>
<!-- /wp:image -->
<!-- wp:spacer {"height":60} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-x-large-font-size" id="image-heading-text-buttons"><?php echo esc_html__( 'Image, heading, text, buttons.', 'uniblock' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus eu pellentesque vitae gravida non diam accumsan.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill-background"} -->
<div class="wp-block-button is-style-fill-background"><a class="wp-block-button__link no-border-radius"><?php echo esc_html__( 'Get Started', 'uniblock' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline-background"} -->
<div class="wp-block-button is-style-outline-background"><a class="wp-block-button__link no-border-radius"><?php echo esc_html__( 'Learn More', 'uniblock' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:spacer {"height":100} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
