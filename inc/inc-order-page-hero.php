<section class="layout-section pt-3 order-page-hero">
    <div class="layout-section__bg">
        <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/order-hero-background.webp" type="image/webp">
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/order-hero-background.png" type="image/png"> 
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/order-hero-background.png" class="img-cover" alt=""/>
        </picture>
    </div> 
    <div class="container-small pt-4">
        <h3 class="heading mb-5"><?php echo sprintf( __('Limited Time Offer: Try HotBot VPN Free For 7 Days', 'hotbot')); ?></h3>
        <?php /*<h5 class="heading"><?php echo sprintf( __('Free Accounts Remaining Today: %s', 'hotbot'), '2'); ?> </h5>
        <p><?php echo sprintf( __('Your Free Account has been reserved for the next 10 minutes, after this time we may extend the offer to another user.', 'hotbot')); ?></p> */ ?>

            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="d-flex align-items-center mb-2">
                        <div class="order-page-hero__icon-container pl-2 pr-2">
                            <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/high-speed-connections.svg" class="" />
                        </div>
                        <p class="mb-0"><?php echo sprintf( __('Incredibly Fast VPN Connections', 'hotbot')); ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex align-items-center mb-2">
                        <div class="order-page-hero__icon-container">
                            <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/hide-your-ip-address.svg" class="" />
                        </div>    
                        <p class="mb-0"><?php echo sprintf( __('Hide Your IP Address', 'hotbot')); ?></p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
            <div class="col-sm-6">
                    <div class="d-flex align-items-center mb-2">
                        <div class="order-page-hero__icon-container">
                            <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/unlimited-bandwidth.svg" class="" />
                        </div>
                        <p class="mb-0"><?php echo sprintf( __('Unblock Anything', 'hotbot')); ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex align-items-center mb-2">
                        <div class="order-page-hero__icon-container">
                            <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/instant-privacy-security.svg" class="" />
                        </div>    
                        <p class="mb-0"><?php echo sprintf( __('Protection from Hackers', 'hotbot')); ?></p>
                    </div>
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                
                <div class="col-sm-6">
                    <div class="d-flex align-items-center mb-2">
                        <div class="order-page-hero__icon-container">
                            <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/anonymous-browsing.svg" class="" />
                        </div>    
                        <p class="mb-0"><?php echo sprintf( __('Anonymous Connections', 'hotbot')); ?></p>
                    </div>
                </div>
            </div>

        <img src="<?php bloginfo('template_url'); ?>/assets/img/hotbottrial.svg"  class="embed-robot" alt=""/>
    </div>
    
</section>



