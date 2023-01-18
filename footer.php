<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hotbot
 */

?>  

			<footer class="layout-section footer pt-5 pb-5">
                <div class="container container--medium pb-5 mb-5 pb-xl-0 mb-xl-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center mr-3 order-sm-2">
                            <svg class="footer__lang-icon"><use xlink:href="#globe"></use></svg>

                            <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
                                <div id="" class="footer-widget-area">
                                    <?php dynamic_sidebar( 'footer-widget-area' ); ?>
                                </div>
                            <?php endif;  ?>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand mb-3 mt-3 order-sm-1">
                            <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/logo-footer.svg" class="logo" alt="HotBot" />
                        </a>
                    </div>

                    <div class="footer__separator mt-3 mt-sm-4 mb-3 mb-sm-5"></div>

                    <div class="row pt-3 pt-sm-0 <?php if (is_page_template('page-order-page-new.php' ) || is_page_template('page-order-free.php' ) ) { echo 'justify-content-between';} ?>">
                        <div class="col-12 col-sm-6 col-md">
                            
                            <label for="js-footer-menu1" class="header d-flex mb-3"><?php esc_html_e('HotBotVPN', 'hotbot' ); ?></label>
                         
                            <?php  wp_nav_menu (
                                array(
                                    'theme_location' => 'Footer-menu-hotbotvpn',
                                    'container' => 'ul',
                                    'menu_class' => 'footer__menu footer__menu--show-default' 
                                )
                            ); ?>
                            <div class="footer__separator mb-4 d-sm-none"></div>
                        </div>
                        <div class="col-12 col-sm-6 col-md <?php if (is_page_template( 'page-order-page-new.php' ) || is_page_template( 'page-order-free.php' ) ) { echo 'd-none';} ?>">
                            <?php if ( 'offer' != get_post_type() ) { ?>
                                <input type="checkbox" id="js-footer-menu2" class="d-none footer__checkbox-toogle" />
                                <label for="js-footer-menu2" class="h6 header header--has-toggle-mobile mb-3"><?php esc_html_e('vpn apps', 'hotbot' ); ?></label>
                
                                <?php wp_nav_menu (
                                    array(
                                        'theme_location' => 'Footer-menu-apps',
                                        'container' => 'ul',
                                        'menu_class' => 'footer__menu  js-footer-menu2' // add class in menu list
                                    )
                                );?>
                            <?php } ?>
                            <div class="footer__separator mb-4 d-sm-none"></div>
                        </div>

                        <?php if (is_page_template( 'page-front-page.php' ) ) : ?>
                        <div class="col-12 col-sm-6 col-md">
                            <input type="checkbox" id="js-footer-menu3" class="d-none footer__checkbox-toogle" />
                            <label for="js-footer-menu3" class="header header--has-toggle-mobile mb-3"><?php esc_html_e('vpn resources', 'hotbot' ); ?></label>
                        
                            <?php wp_nav_menu (
                                array(
                                    'theme_location' => 'Footer-menu-resources',
                                    'container' => 'ul',
                                    'menu_class' => 'footer__menu  js-footer-menu3' // add class in menu list
                                )
                            );?>
                            <div class="footer__separator mb-4 d-sm-none"></div>
                        </div>
                        <?php endif; ?>
                        <div class="col-12 col-sm-6 col-md <?php if (is_page_template( 'page-order-page-new.php' ) || is_page_template( 'page-order-free.php' ) ) { echo 'hp-menu';} ?>">
                            <input type="checkbox" id="js-footer-menu4" class="d-none footer__checkbox-toogle" />
                            <label for="js-footer-menu4" class="header header--has-toggle-mobile mb-3"><?php esc_html_e('Help', 'hotbot' ); ?></label>
                            
                            <?php wp_nav_menu (
                                array(
                                    'theme_location' => 'Footer-menu-help',
                                    'container' => 'ul',
                                    'menu_class' => 'footer__menu  js-footer-menu4' // add class in menu list
                                )
                            );?>
                            <div class="footer__separator mb-4 d-sm-none"></div>
                        </div>
                        <?php if ( 'offer' != get_post_type() ) { ?>
                        <div class="col-12 col-md">

                            <input type="checkbox" id="js-footer-menu5" class="d-none footer__checkbox-toogle" />
                            <label for="js-footer-menu5" class="header header--has-toggle-mobile mb-3"><?php esc_html_e('Follow Us', 'hotbot' ); ?></label>
                            
                            <?php wp_nav_menu (
                                array(
                                    'theme_location' => 'Footer-menu-social-media',
                                    'container' => 'ul',
                                    'menu_class' => 'footer__menu  js-footer-menu5' 
                                )
                            ); ?>
                            <div class="footer__separator mb-4 d-sm-none"></div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php if ( 'offer' != get_post_type() ) { ?>
                    <div class="footer__copy-right pt-4 pt-md-5 mt-2 mt-md-3">
                        <div class="row align-items-center">
                            <div class="col-sm-6 order-sm-2">
                                <ul class="footer__payments mb-5 mb-sm-0">
                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/apple-pay.svg" class="ml-1 mr-1" alt="Apple Pay"/></li>
                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/google-pay.svg" class="ml-1 mr-1" alt="Google Pay"/></li>
                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/paypal.svg" class="ml-1 mr-1" alt="PayPal"/></li>
                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/card-visa.svg" alt="Visa"/></li>
                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/card-mastercard.svg" alt="Mastercard"/></li>
                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/card-amex.svg" alt="AMEX"></li>
                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/card-discover.svg" alt="Discover" /></li>
                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/card-jcb.svg" alt="JBC"/></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 order-sm-1">
                                <?php
                                    $languages = apply_filters( 'wpml_active_languages', NULL );
                                    foreach($languages as $l) {
                                    if ($l['active']) { $locale = $l['default_locale']; break; }
                                    }
                                ?>
                                <style>
                                     .trustpilot-widget iframe { width: auto !important; margin-left: -15px; margin-bottom: 15px; }
                                </style>

                                <!-- TrustBox widget - Micro Star -->
                                <div class="trustpilot-widget" data-locale="<?php echo $locale; ?>" data-template-id="5419b732fbfb950b10de65e5" data-businessunit-id="48653e10000064000502c9e5" data-style-height="24px" data-style-width="100%" data-theme="dark">
                                    <a href="https://www.trustpilot.com/review/www.hotbot.com" target="_blank" rel="noopener">Trustpilot</a>
                                </div>
                                <!-- End TrustBox widget -->
                                <p class="mb-sm-0">© 2012-<?php echo date("Y"); ?> HotBotVPN.com</p>
                            </div>

                        </div>
                    </div>
                    <?php } ?>
                </div>
            </footer>

		</main>
		<?php wp_footer(); ?>
    </body>
</html>
