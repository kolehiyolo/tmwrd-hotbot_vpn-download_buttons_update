<section class="layout-section nav-wrapper">
    <div class="container">
        <nav>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand">
                
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-light-bg.svg" class="logo" alt="hotbot logo" />
                
            </a>
            <div class="menu-toggle js--menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-wrap js--navbar-wrap">
                <div class="menu  menu--order">
                    <?php wp_nav_menu (
                        array(
                            'theme_location' => 'Top-menu',
                            'container' => 'ul',
                            'menu_class' => 'nav-list js-nav-menu' // add class in menu list
                        )
                    );?>
                </div>
            </div>
        </nav>
    </div>
</section>
