<?php
include 'inc-ip-isp.php';
$playUrl = "https://play.google.com/store/apps/details?id=com.hotbotvpn";
?>

<?php $slug = get_post_field( 'post_name', get_post() ); ?>

<section class="layout-section nav-wrapper">
    <div class="container">
        <nav class="flex-nowrap">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand">

                <?php if (is_page_template( 'page-program-CJ.php' ) ) : ?>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-dark-bg.svg" class="logo" alt="hotbot logo" />
                <?php else: ?>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-light-bg.svg" class="logo" alt="hotbot logo" />
                <?php endif; ?>
            </a>
            <?php /*<a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary"><span><?php esc_html_e('Try for free ', 'hotbot'); ?></span></a> --> */ ?>

            <div class="menu-wrap menu-wrap--static">
                <div class="menu">
                    <ul>
                        <li class="btn-link sm pr-0 pl-3">
                            <a href="https://signup.cj.com/member/signup/publisher/?cid=6065541" class="mt-0">Join our program on CJ</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>
</section>
