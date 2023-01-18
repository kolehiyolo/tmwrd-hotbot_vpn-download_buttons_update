<?php /* Template Name: Downloading Torrents with a VPN page */ ?>
<?php get_header();?>

<?php include 'inc/inc-header.php'; ?>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/p2p-vpn-for-torrenting.svg" style="width: 80%;" class="m-auto">
      </div>
      <div class="col-md-6 order-md-1">
        <h1 class="heading"><?php _e('Using a <span>VPN for torrenting</span>', 'hotbot'); ?></h1>
        <p class="legend mb-5"><?php esc_html_e('What is torrenting? Should I use a VPN to torrent? Does HotBot VPN work with torrenting?', 'hotbot'); ?></p>
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php _e('Get HotBot VPN', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>

    </div>
  </div>
</section>


<section class="layout-section pt-5 pb-3 pt-md-5 pb-md-5 text-align-center--md ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 ">
        <div class="row justify-content-center">
          <div class="col-7 col-sm-6 col-md-8">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/p2p-peer-to-peer-tech.svg" class="mb-5">
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <h2 class="heading mb-md-5"><?php _e('What is <span>torrenting</span> and peer-to-peer technology?', 'hotbot'); ?></h2>
        <h4 class="heading mb-md-5"><?php esc_html_e('Torrenting is a method of quickly sharing and downloading large files online.', 'hotbot'); ?></h4>
        <p><?php esc_html_e('In order to work, torrenting uses a technology called “peer-to-peer” or “P2P.” Peer-to-peer technology connects computers via the internet, allowing those computers to share files without the use of a server. Every time a torrenter wants access to a specific file, for example a movie or song, they can search for and access those files on the devices of other users.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-10 text-align-center pb-5">
            <h2 class="heading"><?php _e('Should I use a <span>VPN to torrent?</span>', 'hotbot'); ?></h2>
            <p><?php esc_html_e('Torrenting and peer-to-peer technology make file sharing fast and convenient. However, these technologies pose some risks to your online privacy and safety. To protect yourself, you should always use a VPN like HotBot VPN to torrent. Here’s why', 'hotbot'); ?></p>
        </div>  
    </div>
    <div class="row align-items-center pb-5 ">
      <div class="col-md-6 order-md-2 ">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/p2p-ip-address.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/p2p-ip-address.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/p2p-ip-address.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1 ">
        <ul class="listing mt-5 mb-3">
            <li class="center-sm mb-5">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                    <h5 class="heading"><span><?php esc_html_e('Hide Your IP Address', 'hotbot'); ?></span></h5>
                    <h6 class="heading"><?php esc_html_e('​​When you share files on a torrenting website, you also share your IP address with other users.', 'hotbot'); ?></h6>
                    <p class="mb-5"><?php esc_html_e('If you are using your real address, strangers online can track your activities without you knowing. Some internet service providers also slow service or track your activity to watch for piracy if your IP address tells them you’re actively torrenting content. A VPN will hide or change your IP address so neither of these situations can put you in a compromising position.', 'hotbot'); ?></p>
                    <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Start Now', 'hotbot'); ?></span></a>
                </div>
            </li>
        </ul>
      </div>
    </div>

    <div class="row align-items-center pt-5 ">
      <div class="col-md-6 ">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/p2p-copy-trolls.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/p2p-copy-trolls.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/p2p-copy-trolls.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <ul class="listing mt-5 mb-3">
            <li class="center-sm mb-5">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                    <h5 class="heading"><span><?php esc_html_e('Avoid Copyright Trolls', 'hotbot'); ?><span></h5>
                    <h6 class="heading"><?php esc_html_e('​​A copyright troll is someone who works on behalf of big-name media companies like movie and TV studios, record labels, and publishing houses.', 'hotbot'); ?></h6>
                    <p class="mb-5"><?php esc_html_e('They keep an eye out for internet users who torrent content that has an active copyright, an activity which is illegal in most regions. Copyright trolls often directly contact those users with warnings, demands for fines, and threats of jail time.While none of those situations are pleasant, they can easily be avoided by using a VPN when torrenting content to hide your identity and location.', 'hotbot'); ?></p>
                    <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Start Now', 'hotbot'); ?></span></a>
                </div>
            </li>
        </ul>
      </div>
    </div>
    <div class="row align-items-center pt-5 ">
      <div class="col-md-6 order-md-2 ">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/p2p-morally-grey.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/p2p-morally-grey.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/p2p-morally-grey.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1 ">
        <ul class="listing mt-5 mb-3">
            <li class="center-sm mb-5">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                    <h5 class="heading"><span><?php esc_html_e('Enjoy a Faster Connection', 'hotbot'); ?></span></h5>
                    <h6 class="heading"><?php esc_html_e('​​Not all torrenting is illegal. Not all of it is even morally grey.', 'hotbot'); ?></h6>
                    <p class="mb-5"><?php esc_html_e('But, over the years, torrenting has become known for enabling media piracy, something that is illegal in most regions around the world. Because of this, many internet service providers automatically slow their speeds to users they see are actively torrenting (thanks to your IP address giving you away). By having a VPN mask your IP address, your ISP won’t know to slow down your internet speed so you can enjoy fast and easy downloads.', 'hotbot'); ?></p>
                    <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Start Now', 'hotbot'); ?></span></a>
                </div>
            </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--gredient pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 ">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/p2p-how-it-works.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/p2p-how-it-works.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/p2p-how-it-works.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <h2 class="heading"><?php esc_html_e('How does HotBot VPN work with torrenting?', 'hotbot'); ?></h2>
        <p><?php esc_html_e('You have the world at your fingertips thanks to the power of the internet. That world shouldn’t be limited by IP tracking, internet service slow-downs, and risks of extortion from third-parties like copyright trolls. To give you free, fearless access to the web, we made sure HotBot VPN is compatible with torrenting. Our VPN service offers torrenters the following:', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center ">
  <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-sm-6 ">
            <ul class="listing mt-3 mb-3">
                <li class="center-sm mb-5">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('Excellent speeds', 'hotbot'); ?></h5>
                        <p><?php esc_html_e('​​All of HotBot VPN’s servers offer fast and steady speeds, allowing you to browse the web with a minimum of frustration.', 'hotbot'); ?></p>
                    </div>
                </li>
                <li class="center-sm mb-5">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('Strong encryption', 'hotbot'); ?></h5>
                        <p>​​<?php esc_html_e('HotBot VPN supports the OpenVPN protocol and is committed to offering our users top-notch encryption standards.', 'hotbot'); ?></p>
                    </div>
                </li>
                <li class="center-sm mb-5">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('No restrictions', 'hotbot'); ?></h5>
                        <p><?php esc_html_e('HotBot VPN does not place any restrictions on torrenting or bandwidth.', 'hotbot'); ?></p>
                    </div>
                </li>
                <li class="center-sm mb-5">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('Zero logs', 'hotbot'); ?></h5>
                        <p><?php esc_html_e('​​We do not ever log your activity when you use our service. The things you do online are your business and your business alone. If you torrent while using our service, we won’t know about it and neither will anyone else.', 'hotbot'); ?></p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-sm-6 ">
        <ul class="listing mt-3 mb-3">
                <li class="center-sm mb-5">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('No leaks', 'hotbot'); ?></h5>
                        <p><?php esc_html_e('​​Not all VPN services are created equal and some are less safe than others, allowing your IP address and DNS to slip through the cracks in their security and into the hands of internet snoops who want your data. We’re happy to report that HotBot VPN is not among the list of unsafe VPNs. Our service is 100% leak free, keeping your data in your hands.', 'hotbot'); ?></p>
                    </div>
                </li>
                <li class="center-sm mb-5">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('User-friendliness', 'hotbot'); ?></h5>
                        <p>​​<?php esc_html_e('An app is only as good as its user-interface. If users can’t figure out how to use a service, they won’t use it. Keeping that in mind, HotBot VPN designed a functional, yet beautiful app that can easily be used by everyone.', 'hotbot'); ?></p>
                    </div>
                </li>
                <li class="center-sm mb-5">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('Location', 'hotbot'); ?></h5>
                        <p><?php esc_html_e('Our organization is based out of Seychelles, which is the ideal jurisdiction for privacy-centric operations. Seychelles is not a part of Big Surveillance (meaning it is not in the 5/9/14 Eyes Alliance).', 'hotbot'); ?></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
  </div>
</section>

<?php include 'inc/inc-package-plan.php'; ?>

<?php include 'inc/inc-apps-link.php'; ?>

<?php get_footer();?>