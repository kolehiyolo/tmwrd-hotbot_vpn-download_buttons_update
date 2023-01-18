<style>
    .layout-section__bg {
        z-index: 0;
    }
 
    .order-page-hero--blackfriday .heading {
        line-height: 1.2;
        font-family: Arial, sans-serif !important;
        font-size: 1.4rem;
        font-weight: 600;
        text-align: center;
        color: #fff;
    }
    .order-page-hero--blackfriday {
        position: relative;
        overflow: hidden;
        color: #fff;
        background-color: #000000;
        z-index: 2;
    }

    .bf-accent {
        color: #0dc97d !important;
        text-transform: uppercase;
    }


    .bf-confetti {
        position: absolute;
        width: 30%;
        height: 100%;
        top: 0;
        left: 0;
        display: none;
    }

    .bf-confetti-2 {
        position: absolute;
        width: 30%;
        height: 100%;
        top: 0;
        right: 0;
        display: none;
    }

    .bf-confetti .img-1 {
        width: 15px;
        position: absolute;
        bottom: 10%;
        transform: scaleX(-1);
        right: 0;
    }
    .bf-confetti .img-2 {
        width: 24px;
        position: absolute;
        right: 5%;
        top: 5%;
    }
    .bf-confetti .img-3 {
        width: 30px;
        position: absolute;
        left: 10%;
        transform: scaleX(-1) translateY(-50%);
        top: 50%;
    }

    .bf-confetti-2 .img-1 {
        width: 18px;
        position: absolute;
        bottom: 10%;
        transform: scaleX(-1);
        left: 10%;
    }
    .bf-confetti-2 .img-2 {
        width: 30px;
        position: absolute;
        right: 20%;
        top: 10%;
    }
    .bf-confetti-2 .img-3 {
        width: 20px;
        position: absolute;
        left: 10%;
        transform: translateY(-50%) rotate(-30deg);
        top: 20%;
    }

    .bf-ballon {
        width: 26px;
        position: absolute;
        bottom: 0;
        left: 0;
        display: none;
    }


    .order-page-hero--blackfriday .btn {
        color: #ffffff;
        background-color: #0dc97d !important;
        padding: 0.6rem 1rem !important;
        min-width: auto;
        font-family: Arial, sans-serif !important;
        border-radius: 4px;
        font-size: 1.4rem !important;
        font-weight: 600;
    } 

    html[dir="rtl"] .order-page-hero--blackfriday .btn {
        margin-right: 1.5rem;
        margin-left: 0 !important
    }

    @media (min-width: 992px) {

        .bf-confetti, .bf-confetti-2 {
            width: 14%;
            display: block;
        }

        .bf-ballon {
            display: block;
        }

    }

</style>

<section class="layout-section order-page-hero--blackfriday">
    <div class="container pt-3 pb-3">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/holiday/black-friday/bn-balloon.png" class="bf-ballon" />
        <p class="heading mt-0 mb-0"><span class="bf-accent d-block d-md-inline-block"><?php esc_html_e('Black November Sale:', 'hotbot' ); ?></span> <?php echo sprintf( __( 'SAVE %s OFF 2 Years, PLUS+ 2 Years Free!', 'hotbot' ), '50%'); ?> <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn mt-1 mb-1 ml-3"><?php esc_html_e('Get the Deal', 'hotbot' ); ?></a></p>
    </div>
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
    
</section>

