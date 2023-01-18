<style>
    .z-index2 {
        z-index: 2;
    }
    .id-heading-content {
        text-align: center;
        position: relative;
        z-index: 1;
    }
    .id-heading-content h2 {
        font-size: 4rem;
    }
    .order-page-hero--july4 .heading {
        line-height: .84;
        text-transform: uppercase;
    }
    .order-page-hero--july4 {
        position: relative;
        overflow: hidden;
    }
    .robot-wrap {
        position: relative;
    }
    .id-title, .id-sub {
        text-align: center;
    }

    .id-accent {
        color: #f6c602 !important;
    }

    .id-badge {
        max-width: 160px;
    }

    .robot-wrap .embed-robot--id {
        display: none;
    }

    .id-flag {
        position: absolute;
        top: 0;
        left: 0;
        max-width: 100px;
        z-index: 0;
    }

    .id-flag.right {
        right: 0;
        left: unset;
        transform: rotateY(180deg);
    }

    .id-fireworks {
        position: absolute;
        max-height: 290px;
        top: -70px;
        z-index: -1;
        left: -68px;
    }

    .id-fireworks-right {
        position: absolute;
        bottom: -70px;
        z-index: -1;
        right: -80px;
        max-height: 260px;
    }


    @media (min-width: 768px) {

        .id-fireworks {
            top: 50%;
            transform: translateY(-50%);
        }


        .id-heading-content h2 {
            font-size: 4.6rem;
        }

        .id-heading-content h4 {
            font-size: 3.4rem;
        }

    }

    @media (min-width: 992px) {
        .id-badge {
            right: -20px;
            max-width: 160px;
            bottom: -36px;
            position: absolute;
            z-index: 2;
        }

        .robot-wrap .embed-robot--id {
            display: block;
            filter: drop-shadow(0 0 0.75rem #1a9efe);
            position: absolute;
            z-index: 2;
            left: -18px;
            max-width: 110px;
            bottom: -47px;
        }

    }

    @media (min-width: 1024px) {

        .robot-wrap .embed-robot--id {
            left: -130px;
            max-width: 140px;
            bottom: -62px;
        }


        .id-fireworks {
            max-height: 360px;
        }

        .id-heading-content {
            text-align: unset;
            letter-spacing: -1px;
        }

        .id-heading-content h2 {
            font-size: 5.2rem;
        }

        .id-heading-content h4 {
            font-size: 4rem;
        }
    }

    @media (min-width: 1300px) {
        .id-title, .id-sub {
            text-align: unset;
        }

        .id-flag {
            max-width: 150px;
        }

        .id-heading-content h2 {
            font-size: 6.2rem;
        }

        .id-heading-content {
            letter-spacing: -2px;
        }

        .id-badge {
            right: -50px;
            max-width: 160px;
        }

    }

</style>

<section class="layout-section pt-3 order-page-hero order-page-hero--july4 pb-5">
    <div class="layout-section__bg">
        <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/order-hero-background.webp" type="image/webp">
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/order-hero-background.png" type="image/png"> 
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/order-hero-background.png" class="img-cover" alt="id-bg"/>
        </picture>
    </div> 
    <div class="container-small pt-5">

        <div class="row align-items-center pt-lg-4 pb-lg-4">
            <div class="col-lg-6">
                <div class="id-heading-content mb-4 mb-lg-0 pl-lg-4 pl-xl-5">
                    <h4 class="heading mt-0 mb-0">Gain Internet</h4>
                    <h2 class="heading mt-2 mt-lg-1 mb-1 id-accent">Independence</h2>
                    <h4 class="heading mt-0 mb-0">With HotBot VPN</h4>
                </div>
            </div>
            
            <div class="col-lg-6">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/order-july4-badge.svg"  class="d-lg-none id-badge ml-auto mr-auto" alt="id-badge"/>

                <div class="d-none d-lg-block fit-content ml-auto mr-auto z-index2">
                    <div class="d-flex align-items-center mb-2">
                        <div class="order-page-hero__icon-container">
                            <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/high-speed-connections.svg" class="" />
                        </div>
                        <p class="mb-0"><?php echo sprintf( __('Incredibly Fast VPN Connections', 'hotbot')); ?></p>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="order-page-hero__icon-container">
                            <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/p2p-friendly.svg" class="" />
                        </div>
                        <p class="mb-0"><?php echo sprintf( __('Torrent and P2P Friendly', 'hotbot')); ?></p>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="order-page-hero__icon-container">
                            <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/instant-privacy-security.svg" class="" />
                        </div>    
                        <p class="mb-0"><?php echo sprintf( __('Protection from Hackers', 'hotbot')); ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/order-july4-flag.svg"  class="id-flag" alt="id-flag"/>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/order-july4-flag.svg"  class="id-flag right" alt="id-flag"/>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/order-july4-fireworks.png"  class="id-fireworks" alt="id-fireworks"/>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/order-july4-fireworks.png"  class="id-fireworks-right" alt="id-fireworks-right"/>
    
</section>
<div class="container-small robot-wrap">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/order-july4-robot.svg"  class="embed-robot--id" alt="id-hotbot"/>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/order-july4-badge.svg"  class="d-none d-lg-block id-badge" alt="id-badge"/>
</div>



