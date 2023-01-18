<style>
    .z-index2 {
        z-index: 2;
    }
    .bf-heading-content {
        max-width: fit-content;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        z-index: 2;

    }

    .bf-heading-content h2{
        font-size: 3.2rem;
        color: #fff;
        text-transform: uppercase;
        line-height: .9;
        text-align: center;
    }

    .bf-heading-content h2 span {
        color: #0dc97d !important;
        font-size: 4.2rem !important;
        display: block;
    }

    
    .order-page-hero--blackfriday .heading {
        line-height: .84;
        text-transform: uppercase;
    }
    .order-page-hero--blackfriday {
        position: relative;
        overflow: hidden;
    }
    .robot-wrap {
        position: relative;
    }
    .bf-title, .bf-sub {
        text-align: center;
    }


    .bf-badge {
        max-width: 160px;
    }

    .robot-wrap .embed-robot--bf {
        display: none;
    }

    .bf-border {
        position: absolute;
        top: -110px;
        left: -110px;
        max-width: 300px;
        z-index: 0;
        transform: rotate(170deg);

    }

    .bf-border.right {
        left: unset;
        top: unset;
        right: -90px;
        bottom: -120px;
        transform: rotateY(170deg) scaleX(-1);
    }

    .bf-confetti {
        position: absolute;
        width: 30%;
        height: 100%;
        top: 0;
        left: 0;
    }

    .bf-confetti-2 {
        position: absolute;
        width: 30%;
        height: 100%;
        top: 0;
        right: 0;
    }

    .bf-confetti .img-1 {
        width: 50px;
        position: absolute;
        bottom: 10%;
        transform: scaleX(-1);
        right: 10%;
    }
    .bf-confetti .img-2 {
        width: 60px;
        position: absolute;
        right: 5%;
        top: 10%;
    }
    .bf-confetti .img-3 {
        width: 70px;
        position: absolute;
        left: 10%;
        transform: scaleX(-1) translateY(-50%);
        top: 50%;
    }

    .bf-confetti-2 .img-1 {
        width: 40px;
        position: absolute;
        bottom: 10%;
        transform: scaleX(-1);
        left: 10%;
    }
    .bf-confetti-2 .img-2 {
        width: 70px;
        position: absolute;
        right: 5%;
        top: 25%;
    }
    .bf-confetti-2 .img-3 {
        width: 40px;
        position: absolute;
        left: 10%;
        transform: translateY(-50%) rotate(-30deg);
        top: 20%;
    }

    .bf-ballon {
        width: 60px;
        position: absolute;
        bottom: -10px;
        left: 4%;
    }

    .bf-ballon-2 {
        width: 40px;
        position: absolute;
        bottom: 70px;
        left: -5px;
        transform: scaleX(-1) rotate(-32deg);
    }

    .bf-element, .bf-element-2 {
        display: none;
    }



    @media (min-width: 768px) {

        .bf-ballon-2 {
            bottom: 50px;
        }

        
    }

    @media (min-width: 992px) {

        .bf-heading-content h2 {
            text-align: left;
        }

        html[dir="rtl"] .bf-heading-content h2 {
            text-align: right !important;
        }

        .bf-badge {
            right: -20px;
            max-width: 160px;
            bottom: -22px;
            position: absolute;
            z-index: 2;
        }

        .robot-wrap .embed-robot--bf {
            display: block;
            filter: drop-shadow(0 0 0.75rem #1a9efe);
            position: absolute;
            z-index: 2;
            left: -70px;
            bottom: -47px;
            max-width: 140px;
            transform: rotate(-17deg);
        }

        .bf-confetti, .bf-confetti-2 {
            width: 14%;
        }

        .bf-ballon {
            left: 40%;
        }
    }

    @media (min-width: 1024px) {

        .robot-wrap .embed-robot--bf {
            left: -130px;
            max-width: 170px;
            bottom: -60px;
        }
    }

    @media (min-width: 1300px) {

        .bf-heading-content {
            margin-left: 0;
        }

        html[dir="rtl"] .bf-heading-content {
            margin-right: 0;
            margin-left: auto !important;
        }
        
        .bf-heading-content h2{
            font-size: 5rem;
        }

        .bf-heading-content h2 span {
            font-size: 6rem !important;

        }
        .bf-title, .bf-sub {
            text-align: unset;
        }


        .bf-badge {
            right: -50px;
            max-width: 170px;
        }

        .bf-ballon {
            left: 2%;
            width: 80px;
        }

        .bf-ballon-2 {
            bottom: 60px;
        }

        .bf-element {
            position: absolute;
            width: 140px;
            top: -200px;
            height: 140px;
            left: -110px;
            display: block;
        }

        .bf-element-2 {
            position: absolute;
            width: 150px;
            top: -200px;
            height: 150px;
            right: -160px;
            transform: scaleX(-1);
            display: block;
        }
    }
</style>

<section class="layout-section pt-3 order-page-hero order-page-hero--blackfriday pb-5">
    <div class="layout-section__bg">
        <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-background.webp" type="image/webp">
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-background.png" type="image/png"> 
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-background.png" class="img-cover" alt="bf-bg"/>
        </picture>
    </div> 
    <div class="container-small pt-5">

        <div class="row align-items-center pt-lg-4 pb-lg-4">
            <div class="col-lg-5 col-xl-6">
                <div class="bf-heading-content mb-4 mb-lg-0 pl-lg-4 pl-xl-5">
                    <h2><?php echo sprintf( __('Black <span>November</span>Sale now on', 'hotbot' )); ?></h2>
                </div>
            </div>
            
            <div class="col-lg-6">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-sale-badge.png"  class="d-lg-none bf-badge ml-auto mr-auto" alt="bf-badge"/>

                <div class="d-none d-lg-block fit-content ml-xl-auto mr-xl-auto z-index2">
                    <div class="d-flex align-items-center mb-2">
                        <div class="order-page-hero__icon-container pl-2 pr-2">
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
    <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-balloon.png" class="bf-ballon-2" />
    <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-border-1.svg"  class="bf-border" alt="bf-border"/>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-border-1.svg"  class="bf-border right" alt="bf-border"/>
    <div class="bf-confetti">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-confetti-1.svg" class="img-1" />
        <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-confetti-2.svg" class="img-2" />
        <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-confetti-2.svg" class="img-3" />
    </div>

    <div class="bf-confetti-2">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-confetti-3.svg" class="img-1" />
        <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-confetti-2.svg" class="img-2" />
        <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-confetti-3.svg" class="img-3" />
    </div>

    <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-balloon.png" class="bf-ballon" />
    
</section>
<div class="container-small robot-wrap">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-element.svg"  class="bf-element" alt="element"/>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-element.svg"  class="bf-element-2" alt="element"/>

    <img src="<?php bloginfo('template_url'); ?>/assets/img/hotbottrial.svg"  class="embed-robot--bf" alt="id-hotbot"/>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-sale-badge.png"  class="d-none d-lg-block bf-badge" alt="bf-badge"/>
</div>
