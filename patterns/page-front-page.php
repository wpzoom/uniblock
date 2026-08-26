<?php
/**
 * Title: Homepage
 * Slug: uniblock/page-front-page
 * Categories: uniblock-page
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0"}}},"gradient":"black-primary","className":"site-content","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull site-content has-black-primary-gradient-background has-background" style="margin-top:0"><!-- wp:group {"className":"is-style-default","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-default"><!-- wp:spacer {"height":"88px"} -->
<div style="height:88px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"60%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"level":1,"textColor":"white","fontSize":"max-48"} -->
<h1 class="has-white-color has-text-color has-max-48-font-size"><?php echo esc_html__( 'Unblock your creative potential with UniBlock.', 'uniblock' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:paragraph {"textColor":"lightgrey","fontSize":"small"} -->
<p class="has-lightgrey-color has-text-color has-small-font-size"><?php echo esc_html__( 'Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Explore more', 'uniblock' ); ?> →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"88px"} -->
<div style="height:88px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"border":{"radius":"20px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-radius:20px"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-23-1.png","id":45,"dimRatio":30,"overlayColor":"secondary","minHeight":536,"minHeightUnit":"px","isDark":false,"align":"center","className":"is-style-round-corners"} -->
<div class="wp-block-cover aligncenter is-light is-style-round-corners" style="min-height:536px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-45" alt="" src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-23-1.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:wpzoom-video-popup-block/block {"url":"https://vimeo.com/693743279","text":"","icon":2,"iconSize":"50px","textColor":"white"} -->
<a class="wp-block-wpzoom-video-popup-block-block wpzoom-video-popup-block has-white-color has-text-color" href="https://vimeo.com/693743279"><span class="wpzoom-video-popup-block_icon" style="height:50px;width:50px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true"><path d="m14.25 10.367c-1-0.57778-2.2504 0.14388-2.2504 1.2988v8.6674c0 1.155 1.2504 1.8766 2.2504 1.2988l8.2498-4.7666c0.3094-0.1786 0.4998-0.5088 0.4998-0.86588 0-0.35714-0.1904-0.68718-0.4998-0.86586zm-14.25 5.6326c0-8.8366 7.1634-16 16-16 8.8366 0 16 7.1634 16 16 0 8.8366-7.1634 16-16 16-8.8366 0-16-7.1634-16-16zm16-14c-7.732 0-14 6.268-14 14 0 7.732 6.268 14 14 14 7.732 0 14-6.268 14-14 0-7.732-6.268-14-14-14z" fill="currentColor"></path></svg></span></a>
<!-- /wp:wpzoom-video-popup-block/block --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"88px"} -->
<div style="height:88px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-columns" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"right":"var:preset|spacing|x-large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--x-large);flex-basis:50%"><!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color"><?php echo esc_html__( 'WHO WE ARE', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"max-48"} -->
<h2 class="has-max-48-font-size"><?php echo esc_html__( 'We are your partner in growth', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php /* translators: %1$s: opening link tag, %2$s: closing link tag, %3$s: line breaks. */ printf( esc_html__( 'This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who %1$sneed some type%2$s to visualize what the actual copy might look like if it were real content.%3$sIf you want to read, I might suggest a good book, perhaps Hemingway or Melville. That’s why they call it, the dummy copy. This, of course, is not the real copy for this entry. Rest assured, the words will expand the concept. With clarity. Conviction. And a little wit.', 'uniblock' ), '<a href="#">', '</a>', '<br><br>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"5px"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="border-radius:5px"><?php echo esc_html__( 'Learn more', 'uniblock' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"50%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:image {"align":"right","id":62,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignright size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-24.png" alt="" class="wp-image-62"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color"><?php echo esc_html__( 'WHAT WE DO', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"max-48"} -->
<h2 class="has-max-48-font-size"><?php /* translators: %1$s: line break. */ printf( esc_html__( 'Bring the world to %1$syour solutions', 'uniblock' ), '<br>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"light-background","className":"is-style-shadow"} -->
<div class="wp-block-column is-style-shadow has-light-background-background-color has-background" style="border-style:none;border-width:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:outermost/icon-block {"iconName":""} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:48px"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M50 27.7778H31.6667L44.7222 40.8333L40.8333 44.7222L27.7778 31.6667V50H22.2222V31.3889L9.16667 44.4444L5.27778 40.5556L17.7778 27.7778H0V22.2222H18.3333L5.27778 9.16667L9.16667 5.27778L22.2222 18.3333V0H27.7778V17.7778L40.5556 5L44.4444 9.16667L31.3889 22.2222H50V27.7778Z" fill="var(--wp--preset--color--primary)"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:heading -->
<h2><?php echo esc_html__( 'Service 1', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Learn more', 'uniblock' ); ?> →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"light-background","className":"is-style-shadow"} -->
<div class="wp-block-column is-style-shadow has-light-background-background-color has-background" style="border-style:none;border-width:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:outermost/icon-block {"iconName":""} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:48px"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M50 27.7778H31.6667L44.7222 40.8333L40.8333 44.7222L27.7778 31.6667V50H22.2222V31.3889L9.16667 44.4444L5.27778 40.5556L17.7778 27.7778H0V22.2222H18.3333L5.27778 9.16667L9.16667 5.27778L22.2222 18.3333V0H27.7778V17.7778L40.5556 5L44.4444 9.16667L31.3889 22.2222H50V27.7778Z" fill="var(--wp--preset--color--primary)"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:heading -->
<h2><?php echo esc_html__( 'Service 2', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Learn more', 'uniblock' ); ?> →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"light-background","className":"is-style-shadow"} -->
<div class="wp-block-column is-style-shadow has-light-background-background-color has-background" style="border-style:none;border-width:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:outermost/icon-block {"iconName":""} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:48px"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M50 27.7778H31.6667L44.7222 40.8333L40.8333 44.7222L27.7778 31.6667V50H22.2222V31.3889L9.16667 44.4444L5.27778 40.5556L17.7778 27.7778H0V22.2222H18.3333L5.27778 9.16667L9.16667 5.27778L22.2222 18.3333V0H27.7778V17.7778L40.5556 5L44.4444 9.16667L31.3889 22.2222H50V27.7778Z" fill="var(--wp--preset--color--primary)"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:heading -->
<h2><?php echo esc_html__( 'Service 3', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Learn more', 'uniblock' ); ?> →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"114px"} -->
<div style="height:114px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:media-text {"align":"full","mediaId":78,"mediaLink":"#","mediaType":"image","verticalAlignment":"center","backgroundColor":"secondary","className":"is-style-default"} -->
<div class="wp-block-media-text alignfull is-stacked-on-mobile is-vertically-aligned-center is-style-default has-secondary-background-color has-background"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-29.png" alt="" class="wp-image-78 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"white","fontSize":"max-48"} -->
<h2 class="has-white-color has-text-color has-max-48-font-size"><?php echo esc_html__( 'Monetise and scale with UniBlock', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color"><?php echo esc_html__( 'This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type to visualize what the actual copy might look like if it were real content', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"textColor":"white"} -->
<ul class="has-white-color has-text-color"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Ut enim ad minim veniam', 'uniblock' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Excepteur sint occaecat', 'uniblock' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Duis aute irure dolor in reprehenderit', 'uniblock' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color"><?php echo esc_html__( 'HOW WE DO', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"fontSize":"max-48"} -->
<h2 class="has-max-48-font-size"><?php /* translators: %1$s: line break. */ printf( esc_html__( 'We trust our work %1$sprocess', 'uniblock' ), '<br>' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"4px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:4px"><?php echo esc_html__( 'Get a free quote', 'uniblock' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:spacer {"height":"0px"} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
<div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"textColor":"primary","fontSize":"large"} -->
<p class="has-primary-color has-text-color has-large-font-size">1.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"color":{"background":"#6d6d7852"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#6d6d7852;color:#6d6d7852"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2><?php echo esc_html__( 'Process 1', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><?php echo esc_html__( 'Ut enim ad minim veniam', 'uniblock' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Excepteur sint occaecat', 'uniblock' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Duis aute irure dolor in reprehenderit', 'uniblock' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
<div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"textColor":"primary","fontSize":"large"} -->
<p class="has-primary-color has-text-color has-large-font-size">2.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"color":{"background":"#6d6d7869"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#6d6d7869;color:#6d6d7869"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2><?php echo esc_html__( 'Process 1', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><?php echo esc_html__( 'Ut enim ad minim veniam', 'uniblock' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Excepteur sint occaecat', 'uniblock' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Duis aute irure dolor in reprehenderit', 'uniblock' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
<div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"textColor":"primary","fontSize":"large"} -->
<p class="has-primary-color has-text-color has-large-font-size">3.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"color":{"background":"#6d6d787a"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#6d6d787a;color:#6d6d787a"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2><?php echo esc_html__( 'Process 1', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><?php echo esc_html__( 'Ut enim ad minim veniam', 'uniblock' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Excepteur sint occaecat', 'uniblock' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Duis aute irure dolor in reprehenderit', 'uniblock' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"118px"} -->
<div style="height:118px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"50px","right":"50px","bottom":"50px","left":"50px"}}},"backgroundColor":"primary","textColor":"white","layout":{"inherit":false}} -->
<div class="wp-block-group has-white-color has-primary-background-color has-text-color has-background" style="border-radius:20px;padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"white","fontSize":"max-36"} -->
<h3 class="has-text-align-center has-white-color has-text-color has-max-36-font-size"><?php /* translators: %1$s: line break. */ printf( esc_html__( 'We are proud of your %1$saccomplishments', 'uniblock' ), '<br>' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"max-48"} -->
<p class="has-text-align-center has-max-48-font-size">1000+ </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Happy Customers', 'uniblock' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"max-48"} -->
<p class="has-text-align-center has-max-48-font-size">200</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Projects Completed', 'uniblock' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"max-48"} -->
<p class="has-text-align-center has-max-48-font-size">10</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Different Branches', 'uniblock' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color"><?php echo esc_html__( 'TESTIMONIALS', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"max-48"} -->
<h2 class="has-max-48-font-size"><?php /* translators: %1$s: line break. */ printf( esc_html__( 'What people say%1$sabout us', 'uniblock' ), '<br>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"73px"} -->
<div style="height:73px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"light-background","className":"is-style-shadow"} -->
<div class="wp-block-column is-style-shadow has-light-background-background-color has-background" style="border-style:none;border-width:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:paragraph -->
<p><?php echo esc_html__( '"Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam."', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":96,"width":79,"height":79,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Ellipse-2.png" alt="" class="wp-image-96" width="79" height="79"/></figure>
<!-- /wp:image -->

<!-- wp:pullquote {"textAlign":"left","style":{"border":{"width":"0px","style":"none"}},"textColor":"tertiary"} -->
<figure class="wp-block-pullquote has-text-align-left has-tertiary-color has-text-color" style="border-style:none;border-width:0px"><blockquote><p><strong><?php echo esc_html__( 'Eva Lester', 'uniblock' ); ?></strong></p><cite><?php echo esc_html__( 'Senior Supervisors ・ Fables', 'uniblock' ); ?></cite></blockquote></figure>
<!-- /wp:pullquote --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"light-background","className":"is-style-shadow"} -->
<div class="wp-block-column is-style-shadow has-light-background-background-color has-background" style="border-style:none;border-width:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:paragraph -->
<p><?php echo esc_html__( '"Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam."', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":105,"width":91,"height":91,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Ellipse-3.png" alt="" class="wp-image-105" width="91" height="91"/></figure>
<!-- /wp:image -->

<!-- wp:pullquote {"textAlign":"left","style":{"border":{"width":"0px","style":"none"}},"textColor":"tertiary"} -->
<figure class="wp-block-pullquote has-text-align-left has-tertiary-color has-text-color" style="border-style:none;border-width:0px"><blockquote><p><strong><?php echo esc_html__( 'James Richardson', 'uniblock' ); ?></strong></p><cite><?php echo esc_html__( 'Environmental Economist', 'uniblock' ); ?></cite></blockquote></figure>
<!-- /wp:pullquote --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"58px"} -->
<div style="height:58px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color"><strong><a href="#"><?php echo esc_html__( 'View more', 'uniblock' ); ?></a></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"130px"} -->
<div style="height:130px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","backgroundColor":"light-background","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-light-background-background-color has-background"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color"><?php echo esc_html__( 'TRUSTED BY', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"max-48"} -->
<h2 class="has-text-align-center has-max-48-font-size"><?php /* translators: %1$s: line break. */ printf( esc_html__( "They're already winning %1$swith us", 'uniblock' ), '<br>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"81px"} -->
<div style="height:81px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"align":"center","id":110,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Group-3.png" alt="" class="wp-image-110"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"81px"} -->
<div style="height:81px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color"><?php echo esc_html__( 'OUR TEAM', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"max-48"} -->
<h2 class="has-max-48-font-size"><?php /* translators: %1$s: line break. */ printf( esc_html__( 'Meet the%1$sTeam', 'uniblock' ), '<br>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"71px"} -->
<div style="height:71px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:spacer {"height":"0px"} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
<div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":115,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-42.png" alt="" class="wp-image-115"/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2><?php echo esc_html__( 'Jimmy Banh', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Co-founder / CEO', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type.', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"lightgrey","iconColorValue":"#6C6C77","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
<div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":117,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-36.png" alt="" class="wp-image-117"/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2><?php echo esc_html__( 'Cynthia Howery', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'CCO', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type.', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"lightgrey","iconColorValue":"#6C6C77","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
<div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":118,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-38.png" alt="" class="wp-image-118"/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2><?php echo esc_html__( 'Leo Palmieri', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'CFO', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type.', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"lightgrey","iconColorValue":"#6C6C77","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
<div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":119,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-40.png" alt="" class="wp-image-119"/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2><?php echo esc_html__( 'Randy Phillips', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'COO', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type.', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"lightgrey","iconColorValue":"#6C6C77","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
<div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":120,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-43.png" alt="" class="wp-image-120"/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2><?php echo esc_html__( 'Jennie Thompson', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'CLCO', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type.', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"lightgrey","iconColorValue":"#6C6C77","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
<div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":121,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-44.png" alt="" class="wp-image-121"/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2><?php echo esc_html__( 'Sharon Austin', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'CTO', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type.', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"lightgrey","iconColorValue":"#6C6C77","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"118px"} -->
<div style="height:118px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px"} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":123,"mediaLink":"#","mediaType":"image","verticalAlignment":"center","imageFill":true,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"secondary","className":"is-style-default"} -->
<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center is-image-fill is-style-default has-secondary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:spacer {"height":"73px"} -->
<div style="height:73px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textColor":"white","fontSize":"max-48"} -->
<h2 class="has-white-color has-text-color has-max-48-font-size"><?php echo esc_html__( 'Monetise and scale with UniBlock', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"51px"} -->
<div style="height:51px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:outermost/icon-block {"iconName":""} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:48px"><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.9091 19.0909C13.8024 19.0909 16.5771 20.2403 18.623 22.2861C20.6688 24.332 21.8182 27.1067 21.8182 30C21.8182 32.8933 20.6688 35.668 18.623 37.7139C16.5771 39.7597 13.8024 40.9091 10.9091 40.9091C8.01582 40.9091 5.24105 39.7597 3.1952 37.7139C1.14935 35.668 0 32.8933 0 30C0 27.1067 1.14935 24.332 3.1952 22.2861C5.24105 20.2403 8.01582 19.0909 10.9091 19.0909ZM30 0C32.8933 0 35.668 1.14935 37.7139 3.1952C39.7597 5.24105 40.9091 8.01582 40.9091 10.9091C40.9091 13.8024 39.7597 16.5771 37.7139 18.623C35.668 20.6688 32.8933 21.8182 30 21.8182C27.1067 21.8182 24.332 20.6688 22.2861 18.623C20.2403 16.5771 19.0909 13.8024 19.0909 10.9091C19.0909 8.01582 20.2403 5.24105 22.2861 3.1952C24.332 1.14935 27.1067 0 30 0ZM30 38.1818C32.8933 38.1818 35.668 39.3312 37.7139 41.377C39.7597 43.4229 40.9091 46.1976 40.9091 49.0909C40.9091 51.9842 39.7597 54.7589 37.7139 56.8048C35.668 58.8507 32.8933 60 30 60C27.1067 60 24.332 58.8507 22.2861 56.8048C20.2403 54.7589 19.0909 51.9842 19.0909 49.0909C19.0909 46.1976 20.2403 43.4229 22.2861 41.377C24.332 39.3312 27.1067 38.1818 30 38.1818ZM49.0909 19.0909C51.9842 19.0909 54.7589 20.2403 56.8048 22.2861C58.8507 24.332 60 27.1067 60 30C60 32.8933 58.8507 35.668 56.8048 37.7139C54.7589 39.7597 51.9842 40.9091 49.0909 40.9091C46.1976 40.9091 43.4229 39.7597 41.377 37.7139C39.3312 35.668 38.1818 32.8933 38.1818 30C38.1818 27.1067 39.3312 24.332 41.377 22.2861C43.4229 20.2403 46.1976 19.0909 49.0909 19.0909ZM10.9091 24.5455C9.46246 24.5455 8.07507 25.1201 7.05214 26.1431C6.02922 27.166 5.45455 28.5534 5.45455 30C5.45455 31.4466 6.02922 32.834 7.05214 33.8569C8.07507 34.8799 9.46246 35.4545 10.9091 35.4545C12.3557 35.4545 13.7431 34.8799 14.766 33.8569C15.789 32.834 16.3636 31.4466 16.3636 30C16.3636 28.5534 15.789 27.166 14.766 26.1431C13.7431 25.1201 12.3557 24.5455 10.9091 24.5455ZM49.0909 24.5455C47.6443 24.5455 46.2569 25.1201 45.234 26.1431C44.211 27.166 43.6364 28.5534 43.6364 30C43.6364 31.4466 44.211 32.834 45.234 33.8569C46.2569 34.8799 47.6443 35.4545 49.0909 35.4545C50.5375 35.4545 51.9249 34.8799 52.9479 33.8569C53.9708 32.834 54.5455 31.4466 54.5455 30C54.5455 28.5534 53.9708 27.166 52.9479 26.1431C51.9249 25.1201 50.5375 24.5455 49.0909 24.5455ZM30 43.6364C28.5534 43.6364 27.166 44.211 26.1431 45.234C25.1201 46.2569 24.5455 47.6443 24.5455 49.0909C24.5455 50.5375 25.1201 51.9249 26.1431 52.9479C27.166 53.9708 28.5534 54.5455 30 54.5455C31.4466 54.5455 32.834 53.9708 33.8569 52.9479C34.8799 51.9249 35.4545 50.5375 35.4545 49.0909C35.4545 47.6443 34.8799 46.2569 33.8569 45.234C32.834 44.211 31.4466 43.6364 30 43.6364Z" fill="var(--wp--preset--color--primary)"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color"><?php echo esc_html__( 'This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type to visualize what the actual copy might look like if it were real content', 'uniblock' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"34px"} -->
<div style="height:34px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:outermost/icon-block {"iconName":""} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:48px"><svg width="60" height="47" viewBox="0 0 60 47" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M54.5455 13.6364C50.4545 13.6364 48.2727 17.4545 49.3636 20.4545L39.5455 30.2727C38.7273 30 37.6364 30 36.8182 30.2727L29.7273 23.1818C30.8182 20.1818 28.6364 16.3636 24.5455 16.3636C20.7273 16.3636 18.2727 20.1818 19.3636 23.1818L6.81818 35.4545C3.81818 34.6364 0 36.8182 0 40.9091C0 43.9091 2.45455 46.3636 5.45455 46.3636C9.27273 46.3636 11.7273 42.5455 10.6364 39.5455L22.9091 27C23.7273 27.2727 24.8182 27.2727 25.6364 27L32.7273 34.0909C31.9091 36.8182 34.0909 40.9091 38.1818 40.9091C42.2727 40.9091 44.4545 37.0909 43.3636 34.0909L53.1818 24.2727C56.1818 25.0909 60 22.9091 60 19.0909C60 16.0909 57.5455 13.6364 54.5455 13.6364ZM38.1818 16.3636L40.6364 10.6364L46.3636 8.18182L40.6364 5.72727L38.1818 0L35.7273 5.72727L30 8.18182L35.7273 10.6364L38.1818 16.3636ZM6.81818 21.8182L8.18182 16.3636L13.6364 15L8.18182 13.6364L6.81818 8.18182L5.45455 13.6364L0 15L5.45455 16.3636L6.81818 21.8182Z" fill="var(--wp--preset--color--primary)"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color"><?php echo esc_html__( 'This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type to visualize what the actual copy might look like if it were real content', 'uniblock' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"34px"} -->
<div style="height:34px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:outermost/icon-block {"iconName":""} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:48px"><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M59.0775 27.87H59.1075L32.1075 0.87C31.4775 0.3 30.7575 0 29.9775 0C29.1975 0 28.4775 0.3 27.8475 0.87L0.8475 27.87H0.8775C-0.2925 29.04 -0.2925 30.96 0.8775 32.13H0.8475L27.8475 59.13C28.4775 59.7 29.1975 60 29.9775 60C30.7575 60 31.4775 59.7 32.1075 59.13L59.1075 32.13H59.0775C60.2475 30.96 60.2475 29.04 59.0775 27.87ZM32.9775 18.84V10.23L45.8775 23.13L32.9775 18.84ZM26.9775 18.84L14.0775 23.13L26.9775 10.23V18.84ZM29.9775 24.15L47.4975 30L29.9775 35.85L12.4575 30L29.9775 24.15ZM26.9775 41.16V49.77L14.0775 36.87L26.9775 41.16ZM32.9775 41.16L45.8775 36.87L32.9775 49.77V41.16Z" fill="var(--wp--preset--color--primary)"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color"><?php echo esc_html__( 'This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type to visualize what the actual copy might look like if it were real content', 'uniblock' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-46.png);background-position:50% 50%"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-46.png" alt="" class="wp-image-123 size-full"/></figure></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color"><?php echo esc_html__( 'LATEST NEWS', 'uniblock' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"max-48"} -->
<h2 class="has-text-align-center has-max-48-font-size"><?php echo esc_html__( 'Our Blog', 'uniblock' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"81px"} -->
<div style="height:81px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":4,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"340px","style":{"border":{"radius":"20px"}}} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"tertiary","fontSize":"medium"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:read-more /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"81px"} -->
<div style="height:81px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->