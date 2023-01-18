<?php $slug = get_post_field( 'post_name', get_post() ); ?>
<section class="layout-section nav-wrapper">
    <div class="container">
        <nav class="rtl-nav">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-light-bg.svg" class="logo" alt="hotbot logo" />
            </a>
            <div class="menu-wrap menu-wrap--static">
                <div class="menu  menu--order menu--lang">
                    <ul class="pt-0">
                        <li class="js--submenu-toggle menu-item menu-item-has-children">
                            
                            <a class="used">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/language.svg" class="mr-3"/>
                                <?php $is_translated = apply_filters( 'wpml_element_has_translations', NULL, get_the_ID(), 'page' ) ?>
                                <span class="d-none d-lg-inline-block pr-4 no-wrap"><?php echo defined('ICL_LANGUAGE_CODE')? ICL_LANGUAGE_CODE : 'en'; ?></span>
                            </a>
                            <ul class="sub-menu">
                                <?php include 'inc-menu-lang.php'; ?>
                            </ul>
                        </li>
                    </ul> 
                    <?php /*
                    <ul id="menu-primary-navigation" class="nav-list js-nav-menu">
                        <li id="menu-item-1211" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1211 pr-0 pl-0"><a href="https://dashboard.hotbot.com/" class="pl-0 no-wrap"><?php esc_html_e('Login', 'hotbot'); ?></a></li>
                    </ul> */?>
                </div>
            </div>
        </nav>
    </div>
</section>
