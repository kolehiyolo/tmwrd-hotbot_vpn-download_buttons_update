
<?php
include 'inc-ip-isp.php';
$playUrl = "https://play.google.com/store/apps/details?id=com.hotbotvpn";
?>

<section class="layout-section layout-section--primary-bg">
    <div class="container">
        <div class="ip-checker js--ip-checker" id="ipChecker">
            <ul>
                <li>Your IP: <?php echo $addr; ?></li>
                <?php if ($isp) { ?><li class="d-none d-md-block">Your ISP: <?php echo $isp; ?></li><?php } ?>
                <li>Your Status: Unprotected</li>
                <li><a href="/order/">Get Protected</a></li>
            </ul>
            <a class="ip-checker__close js--ip-checker__close" id="ipCheckerClose"><svg class="icon"><use xlink:href="#times-solid"></use></svg></a>
        </div>
    </div>
</section>

<?php $slug = get_post_field( 'post_name', get_post() ); ?>

<section class="layout-section nav-wrapper">
    <div class="container">
        <nav>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-light-bg.svg" class="logo" alt="hotbot logo" />
            </a>
            <?php /*<a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary"><span><?php esc_html_e('Try for free ', 'hotbot'); ?></span></a> --> */ ?>
            
            <div class="menu-wrap menu-wrap--static d-xl-none">
                <div class="menu menu--lang">
                    <ul class="pt-0">
                        <li class="js--submenu-toggle menu-item menu-item-has-children">
                            
                        <a class="used pl-0">
                                <svg class="language-icon mr-2"><use xlink:href="#language"></use></svg>
                                <?php $is_translated = apply_filters( 'wpml_element_has_translations', NULL, get_the_ID(), 'page' ) ?>
                            </a>
                            <ul class="sub-menu">
                                <?php include 'inc-menu-lang.php'; ?>
                            </ul>
                        </li>
                    </ul>   
                </div>
            </div>
            
            <div class="menu-toggle js--menu-toggle" id="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="menu-wrap js--navbar-wrap">
                <div class="menu menu--lang d-none d-xl-block">
                    <ul>
                        <li class="js--submenu-toggle menu-item menu-item-has-children">
                            
                        <a class="used pr-4">
                                <svg class="language-icon mr-2"><use xlink:href="#language"></use></svg>
                                <?php echo defined('ICL_LANGUAGE_CODE')? ICL_LANGUAGE_CODE : 'en'; ?></a>
                            <ul class="sub-menu">
                                <?php include 'inc-menu-lang.php'; ?>
                            </ul>
                        </li>
                    </ul>   
                </div>
                <div class="menu">
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
