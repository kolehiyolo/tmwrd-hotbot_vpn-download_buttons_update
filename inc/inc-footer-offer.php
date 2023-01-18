            <footer class="layout-section footer">
                <div class="footer__copy-right pb-5 pt-5 mb-5">
                    <div class="container container--medium">
                        <div class="footer__app-link">
                            <div class="footer__app-link-item">
                                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/">
                                    <svg class="app-nav-menu__icon"><use xlink:href="#platform-ios"></use></svg>
                                    iOS
                                </a>
                            </div>
                            <div class="footer__app-link-item">
                                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/">
                                    <svg class="app-nav-menu__icon"><use xlink:href="#platform-android"></use></svg>
                                    Android
                                </a>
                            </div>
                            <div class="footer__app-link-item">
                                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/">
                                    <svg class="app-nav-menu__icon"><use xlink:href="#platform-windows"></use></svg>
                                    Windows
                                </a>
                            </div>
                            <div class="footer__app-link-item">
                                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/">
                                    <svg class="app-nav-menu__icon"><use xlink:href="#platform-macos"></use></svg>
                                    macOS
                                </a>
                            </div>
                            <div class="footer__app-link-item">
                                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/">
                                    <svg class="app-nav-menu__icon"><use xlink:href="#icon-plus"></use></svg>
                                    And more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container container--medium">
                    <div class="row pt-5">
                        
                        <div class="col-12 mt-3 mt-sm-0 col-sm-6 col-lg-4">
                            <input type="checkbox" id="js-footer-menu1" class="d-none footer__checkbox-toogle">
                            <label for="js-footer-menu1" class="h6 header header--has-toggle-mobile mb-3"><?php _e('Explore HotBotVPN', 'hotbot' ); ?></label>
                            <ul id="menu-explore-hotbot-vpn" class="footer__menu  js-footer-menu1">
                                <li id="menu-item-3469" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3469"><a href="/order/"><?php _e('Use HotBot VPN FREE for 7 days.', 'hotbot' ); ?></a></li>
                                <li id="menu-item-3471" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3471"><a href="/why-everyone-needs-a-vpn/"><?php _e('Do I Need a VPN?', 'hotbot' ); ?></a></li>
                                <li id="menu-item-4703" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4703"><a href="/what-makes-a-good-vpn/"><?php _e('What is a VPN', 'hotbot' ); ?></a></li>
                                <li id="menu-item-3587" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3587"><a href="/5-reasons-to-use-a-vpn/"><?php _e('5 Big Reasons to Use a VPN', 'hotbot' ); ?></a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <input type="checkbox" id="js-footer-menu2" class="d-none footer__checkbox-toogle">
                            <label for="js-footer-menu2" class="header header--has-toggle-mobile mb-3">Help &amp; Support</label>
                            <ul id="menu-help-support" class="footer__menu  js-footer-menu2">
                                
                                <li id="menu-item-3817" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3817"><a href="/contact/"><?php _e('Contact Us', 'hotbot' ); ?></a></li>
                                <li id="menu-item-3815" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3815"><a href="/help/"><?php _e('Help', 'hotbot' ); ?></a></li>
                                <li id="menu-item-3819" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3819"><a href="/no-logs-policy/"><?php _e('No Logs Policy', 'hotbot' ); ?></a></li>
                                <li id="menu-item-3821" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3821"><a href="/about/"><?php _e('About Us', 'hotbot' ); ?></a></li>
                
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <input type="checkbox" id="js-footer-menu3" class="d-none footer__checkbox-toogle">
                            <label for="js-footer-menu3" class="header header--has-toggle-mobile mb-3">Legal</label>
                            <ul id="menu-legal" class="footer__menu  js-footer-menu3">
                                <li id="menu-item-3825" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3825"><a href="/privacy/"><?php _e('Privacy Policy', 'hotbot' ); ?></a></li>
                                <li id="menu-item-3827" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3827"><a href="/terms/"><?php _e('Terms of Service', 'hotbot' ); ?></a></li>
                            </ul>
                            <div class="header mt-3 mt-md-5"><?php _e('Language', 'hotbot' ); ?></div>
                            <div class="row">
                                <div class="col-12 col-sm-10">
                                     <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
                                        <div id="" class="footer-widget-area">
                                            <?php dynamic_sidebar( 'footer-widget-area' ); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__divider mb-5 mt-5"></div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <p class="text-align-center mb-5">© 2012-<?php echo date("Y"); ?> HotBotVPN.com</p>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
    </body>
</html>