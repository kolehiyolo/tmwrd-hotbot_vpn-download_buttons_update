<?php /* Template Name: Internet service Provider page */ ?>
<?php get_header();?>

<?php include 'inc/inc-header.php'; ?>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8 text-align-center">
        <h1 class="heading mb-5"><?php _e('Why You Can’t Trust Your <span>Internet Service Provider</span>', 'hotbot' ); ?></h1>
        <a href="/order/" class="btn btn--primary has-arrow m-auto"><span><?php esc_html_e('Get Hotbot VPN', 'hotbot' ); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--gredient pt-3 pb-3 pt-md-7 pb-md-7 text-align-center">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <p><?php _e('<span class="bold">If you’ve ever telecommuted to work from the comfort of your couch,</span> emailed your grandmother who lives halfway around the world, or did a web search for a new dinner recipe to try, you can thank your internet service provider (or ISP). Your ISP is the company that allows you to access, use, and participate in the internet. These businesses provide vital services that the world simply couldn’t do without. However, your internet service provider can also see everything you are doing through their service, information which they not only collect but may also sell to third-parties. Here’s what you need to know about what your ISP collects and what they do with your data once they have it:', 'hotbot' ); ?></p>
        </div>  
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-3 pb-3 pt-md-7 pb-md-5 text-align-center">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
        <h2 class="heading"><?php _e('What information do <span>ISPs collect about me?</span>', 'hotbot' ); ?></h2>
            <p class="mb-5"><?php esc_html_e('Every internet service provider has its own set of rules regarding user data and privacy. The best way to learn what your specific ISP might be doing with your information is to read their terms of service and privacy policies. However, there are a few common bits of data that many ISPs can learn and collect from your IP address, such as:', 'hotbot' ); ?></p>
        </div>  
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-3 pb-3 pt-md-5 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-8">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/the-urls-you-visit.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/the-urls-you-visit.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/the-urls-you-visit.png" class="b-radius-20">
            </picture>
            <ul class="listing mt-3 mb-5">
              <li class="center-sm mb-3">
                  <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                  <div class="listing__content">
                      <h6 class="heading"><?php esc_html_e('The URL you visit', 'hotbot' ); ?></h6>
                  </div>
              </li>
            </ul>
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/the-times-you-typically-connect.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/the-times-you-typically-connect.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/the-times-you-typically-connect.png" class="b-radius-20">
            </picture>
            <ul class="listing mt-3 mb-5">
              <li class="center-sm mb-3">
                  <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                  <div class="listing__content">
                      <h6 class="heading"><?php esc_html_e('The times you typically connect to and disconnect from a session', 'hotbot' ); ?></h6>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-8">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/your-most-frequently-visited-pages.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/your-most-frequently-visited-pages.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/your-most-frequently-visited-pages.png" class="b-radius-20">
            </picture>
            <ul class="listing mt-3 mb-3">
              <li class="center-sm mb-5">
                  <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                  <div class="listing__content">
                      <h6 class="heading"><?php esc_html_e('Your most frequently-visited pages', 'hotbot' ); ?></h6>
                  </div>
              </li>
            </ul>
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/the-amount-of-time-you-spend.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/the-amount-of-time-you-spend.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/the-amount-of-time-you-spend.png" class="b-radius-20">
            </picture>
            <ul class="listing mt-3 mb-3">
              <li class="center-sm mb-5">
                  <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                  <div class="listing__content">
                      <h6 class="heading"><?php esc_html_e('The amount of time you spend on each website', 'hotbot' ); ?></h6>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="layout-section  pt-3 pb-3 pt-md-7 pb-md-5 text-align-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <h2 class="heading"><?php _e('In addition to collecting basic information from your <span>IP address</span>', 'hotbot' ); ?></h2>
        <p class="mb-5"><?php esc_html_e('some ISPs go a step further to collect personal data based on the information your share online. Some things they’re interested in learning about you include:', 'hotbot' ); ?></p>
      </div>  
    </div>
  </div>
</section>

<section class="layout-section layout-section--gredient pt-3 pb-3 pt-md-5 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-8">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/your-current-location.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/your-current-location.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/your-current-location.png" class="b-radius-20">
            </picture>
            <ul class="listing mt-3 mb-5">
              <li class="center-sm mb-3">
                  <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                  <div class="listing__content">
                      <h6 class="heading"><?php esc_html_e('Your current location', 'hotbot' ); ?></h6>
                  </div>
              </li>
            </ul>
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/relationship-information.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/relationship-information.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/relationship-information.png" class="b-radius-20">
            </picture>
            <ul class="listing mt-3 mb-5">
              <li class="center-sm mb-3">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                    <h6 class="heading"><?php esc_html_e('Relationship information', 'hotbot' ); ?></h6>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-8">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/your-email-address-and-phone-number.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/your-email-address-and-phone-number.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/your-email-address-and-phone-number.png" class="b-radius-20">
            </picture>
            <ul class="listing mt-3 mb-3">
              <li class="center-sm mb-5">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                    <h6 class="heading"><?php esc_html_e('Your email address and phone number', 'hotbot' ); ?></h6>
                </div>
              </li>
            </ul>
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/social-media-data.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/social-media-data.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/social-media-data.png" class="b-radius-20">
            </picture>
            <ul class="listing mt-3 mb-3">
              <li class="center-sm mb-5">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                    <h6 class="heading"><?php esc_html_e('Social media data', 'hotbot' ); ?></h6>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="layout-section  pt-3 pb-3 pt-md-7 pb-md-5 text-align-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <h2 class="heading"><?php _e('Why are ISPs <span>collecting my data?</span>', 'hotbot' ); ?></h2>
        <p class="mb-5"><?php esc_html_e('The answer to this question can be largely summed up in one word: profit. However, an internet service provider can profit from your data in a few different ways.', 'hotbot' ); ?></p>
      </div>  
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 pt-md-5 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-8">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/sell-data.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/sell-data.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/sell-data.png" class="b-radius-20">
            </picture>
            <ul class="listing mt-4 mb-5">
              <li class="center-sm mb-3">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                  <p><span class="bold text-color-primary"><?php _e('By Selling It:​</span> There are dozens of third parties interested in your information. Advertisers and governments are typically at the top of this list. The information they buy from your ISP can be used to send specific demographics (including yourself) targeted ads, or to learn more about specific voter segments.', 'hotbot' ); ?></p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-8">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/study-data.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/study-data.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/study-data.png" class="b-radius-20">
            </picture>
            <ul class="listing mt-4 mb-3">
              <li class="center-sm mb-5">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                  <p><span class="bold text-color-primary"><?php _e('By Studying It:​</span> Your internet service provider can also profit from your data by keeping it for themselves. Knowing who uses their services and when can help them set prices, bring in new customers, and adjust the speeds they allow to accommodate different levels of traffic.', 'hotbot'); ?></p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-3 pb-3 pt-md-7 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-8">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/data-collection.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/data-collection.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/data-collection.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h3 class="heading"><?php _e('How does my ISP <span>collect and sell my data?</span>', 'hotbot');?></h3>
        <p><?php esc_html_e('Your internet service provider is able to collect your data through tracking your IP address--the unique number assigned to your computer in order to identify it. Every time you make a request over the network, for example, a web search, that request is completed by connecting your IP address to the site you wish to access. These requests are called domain name system queries (or DNS queries), and they are public, meaning your ISP can see every request you make. This allows your internet service provider to record where online you go and what you do when you get there.', 'hotbot'); ?></p>
        <p><?php esc_html_e('Once they have your information, your ISP can then sell it to a third-party. Thanks to some industry standards of user privacy, your data is semi-anonymized, meaning marketing companies can’t demand to see a spreadsheet that contains every detail of your life. Instead, your data will most likely allow you to be lumped into specific demographic categories that can be used to send you targeted content or to study your demographic group as a whole.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section  pt-3 pb-3 pt-md-7 pb-md-5 text-align-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <h2 class="heading"><?php _e('How do I <span>Stop ISP tracking?</span>', 'hotbot'); ?></h2>
        <p class="mb-5"><?php esc_html_e('For every threat to your online privacy, there is a way to protect yourself. These are just a few ways to prevent your internet service provider from tracking you (or at least reduce the amount of information they can get):', 'hotbot'); ?></p>
      </div>  
    </div>
  </div>
</section>

<section class="layout-section  pt-3 pb-3 pt-md-5 pb-md-7 text-align-center ">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <ul class="listing mt-4 mb-3">
              <li class="center-sm mb-5 ">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                  <p><span class="bold text-color-primary"><?php _e('Only Visit HTTPS Encrypted Websites:</span> A website that uses HTTPS encryption is one that prevents prying eyes from seeing your actions on the site. Although your ISP will still know you’ve visited the site, they will be unable to see your interactions on it.', 'hotbot'); ?></p>
                </div>
              </li>
              <li class="center-sm mb-5">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                  <p><span class="bold text-color-primary"><?php _e('Connect to Tor:​</span> Tor is a publicly-run encrypted computer network designed specifically to increase user privacy. A search query is sent through multiple layers of encryption before a result is returned to your computer, effectively preventing your ISP from seeing where you go or what you do online.', 'hotbot'); ?></p>
                </div>
              </li>
              <li class="center-sm mb-5">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                  <p><span class="bold text-color-primary"><?php _e('Use HotBot VPN: </span>The best way to prevent ISP tracking is to use HotBot VPN (or any VPN, but you’re already here so why not try ours?). HotBot VPN can be used on multiple devices and connects your activity to one of our service so your ISP can’t see it, and neither can we. Our service also changes your IP address so other websites can’t identify you either.', 'hotbot'); ?></p>
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