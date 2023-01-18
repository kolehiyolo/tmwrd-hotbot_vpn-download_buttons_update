<?php
include 'inc-ip-isp.php';
$playUrl = "https://play.google.com/store/apps/details?id=com.hotbotvpn";
?>

<?php $slug = get_post_field( 'post_name', get_post() ); ?>

<section class="layout-section nav-wrapper">
    <div class="container">
        <nav>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand">

                <?php if (is_page_template( 'page-affiliate.php' ) ) : ?>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-dark-bg.svg" class="logo" alt="hotbot logo" />
                <?php else: ?>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-light-bg.svg" class="logo" alt="hotbot logo" />
                <?php endif; ?>
            </a>
            <?php /*<a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary"><span><?php esc_html_e('Try for free ', 'hotbot'); ?></span></a> --> */ ?>
            
            
            <div class="menu-toggle js--menu-toggle" id="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="menu-wrap js--navbar-wrap">
                <div class="menu">
                    <?php wp_nav_menu (
                        array(
                            'theme_location' => 'Affiliate',
                            'container' => 'ul',
                            'menu_class' => 'nav-list js-nav-menu' // add class in menu list
                        )
                    );?>
                    
                </div>

            </div>
        </nav>
    </div>
</section>
