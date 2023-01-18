<?php /* Template Name: No Logs Policy page */ ?>
<?php get_header();?>

<?php include 'inc/inc-header.php'; ?>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/no-logs-promise-badge.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/no-logs-promise-badge.png" type="image/png"> 
                <img src="<?php bloginfo('template_url'); ?>/assets/img/no-logs-promise-badge.png">
            </picture>
            
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <h1 class="heading"><?php _e('HotBot’s  <span>No Logs Promise</span>', 'hotbot'); ?></h1>
        <p class="legend mb-5"><?php esc_html_e('What does “no logs” mean? What is HotBot’s no logs promise? What ​do ​ we collect? How does Big Surveillance impact no logs policies?', 'hotbot'); ?></p>
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get HotBot VPN', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>

    </div>
  </div>
</section>


<section class="layout-section pt-5 pb-3 pt-md-5 pb-md-5 text-align-center--md ">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-10 pt-5 pb-5">
            <h2 class="heading text-align-center"><?php _e('What does <span>“no logs”</span> mean?', 'hotbot'); ?></h2>
        </div>  
    </div>
    <div class="row align-items-center">
      <div class="col-md-6 ">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/logs-no-logs.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/logs-no-logs.jpg" type="image/jpg"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/logs-no-logs.jpg" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <p class="bold mt-5"><?php _e('Every time you connect to the internet without a VPN, your internet service provider can track which sites you visit, <span class="danger">what you stream, and what you download (even if you browse in incognito mode).</span>', 'hotbot'); ?></p>
        <p><?php esc_html_e('Furthermore, they know your location and can link all this to your account information. The data they collect is called “logs.” Logs are highly invasive and violate your privacy. They can be shared with third-parties like government agencies, advertisers, and more. By using a virtual private network, you encrypt your browsing sessions so no other organizations (like your internet service provider) can see or collect your data. However, the VPN service itself may have access to that information in place of your ISP.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>


<section class="layout-section pt-5 pb-5 pt-md-7 ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-align-center">
        <p class="mb-5"><?php esc_html_e('That’s why you should choose one with a “no logs” policy, like HotBot VPN. This type of policy means they do not collect any personal data about you, including:', 'hotbot'); ?>
        </p>
      </div>
    </div>

    <div class="row text-align-center justify-content-center pt-md-5 pb-md-5">
      <div class="col-sm-6 col-lg-4 ">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <svg class="icon icon-80-svg"><use xlink:href="#your-ip-address-and-location"></use></svg>
            <h3 class="heading mt-4"><?php esc_html_e('Your IP address and location', 'hotbot'); ?></h3>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 ">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <svg class="icon icon-80-svg"><use xlink:href="#your-browsing-or-download-history"></use></svg>
            <h3 class="heading mt-4"><?php esc_html_e('Your browsing or download history', 'hotbot'); ?></h3>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <svg class="icon icon-80-svg"><use xlink:href="#your-network-traffic"></use></svg>
            <h3 class="heading mt-4"><?php esc_html_e('Your network traffic', 'hotbot'); ?></h3>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <svg class="icon icon-80-svg"><use xlink:href="#the-bandwidth-you-used"></use></svg>
            <h3 class="heading mt-4"><?php esc_html_e('The bandwidth you used', 'hotbot'); ?></h3>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <svg class="icon icon-80-svg"><use xlink:href="#session-information"></use></svg>
            <h5 class="heading mt-4"><?php esc_html_e('Session information', 'hotbot'); ?></h5>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-md-6 text-align-center">
        <p class="mb-md-5"><?php esc_html_e('By not collecting any logs, a VPN protects your private information from misuse, mishandling, loss, and theft. It also can’t be given away because there is nothing ​to give away.', 'hotbot'); ?>
        </p>
      </div>
    </div>

  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-5 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-10 pt-md-5 pb-md-5 text-align-center">
            <h2 class="heading"><?php _e('What is HotBot’s <span>No Logs Promise?</span>', 'hotbot'); ?></h2>
            <p><?php esc_html_e('Most VPN services describe their rules surrounding data logging as a “policy.” Here at HotBot, we prefer to call it our No Logs Promise. Our promise is twofold:', 'hotbot'); ?></p>
        </div>  
    </div>
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2 ">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/logs-log-promise.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/logs-log-promise.jpg" type="image/jpg"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/logs-log-promise.jpg" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1 ">
        <ul class="listing mt-5 mb-3">
            <li class="center-sm mb-5">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                    <h5 class="heading"><?php esc_html_e('HotBot VPN does not and will not ever collect logs about you.', 'hotbot'); ?>​​</h5>
                    <p><?php esc_html_e('​​No IP addresses, no session history, no traffic data, and more. Your data is yours and yours alone, and we intend to keep it that way.', 'hotbot'); ?></p>
                </div>
            </li>
            <li class="center-sm mb-5">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                    <h5 class="heading"><?php esc_html_e('HotBot VPN uses cutting edge technology to keep you safe online.', 'hotbot'); ?></h5>
                    <p><?php esc_html_e('​​We employ AES technology, which is a standard method of encryption used by governments and cybersecurity experts worldwide. This protects you from anyone and everyone who may want to steal your data.', 'hotbot'); ?></p>
                </div>
            </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-10 text-align-center pb-5">
            <h2 class="heading"><?php esc_html_e('What do we collect?', 'hotbot'); ?></h2>
            <p><?php esc_html_e('Although we do not collect sensitive information from any of our users, there is some data we do require in order to provide you with the best possible service. That information includes:', 'hotbot'); ?></p>
        </div>  
    </div>
    <div class="row align-items-center">
      <div class="col-md-6 ">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/logs-collect.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/logs-collect.jpg" type="image/jpg"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/logs-collect.jpg" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <ul class="listing mt-5 mb-3">
            <li class="center-sm mb-5">
              <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
              <div class="listing__content">
                <h5 class="heading"><?php esc_html_e('A username and email address', 'hotbot'); ?></h5>
                <p>​​<?php esc_html_e('In order to provide you with a HotBot VPN account, we require a username and email address. This allows you to establish a VPN connection, manage your account, and allows us to provide you with excellent customer service.', 'hotbot'); ?></p>
              </div>
            </li>
            <li class="center-sm mb-5">
              <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
              <div class="listing__content">
                <h5 class="heading"><?php esc_html_e('A password', 'hotbot'); ?></h5>
                <p>​​<?php esc_html_e('To sign into your account, you will be required to provide a password. That password will be safely encrypted and not displayed to anyone. ', 'hotbot'); ?></p>
              </div>
            </li>
            <li class="center-sm mb-5">
              <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
              <div class="listing__content">
                <h5 class="heading"><?php esc_html_e('A timestamp of your previous active session', 'hotbot'); ?></h5>
                <p><?php esc_html_e('HotBot VPN allows users to browse on six active devices at a time. The timestamp data allows us to ensure no user exceeds that limit. Once you disconnect from the session, the timestamp data is deleted.', 'hotbot'); ?></p>
              </div>
            </li>
            <li class="center-sm mb-5">
              <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
              <div class="listing__content">
                <h5 class="heading"><?php esc_html_e('Diagnostic and performance data', 'hotbot'); ?></h5>
                <p><?php esc_html_e('​​HotBot VPN can only collect diagnostic and performance data IF you manually opt-in to this setting.', 'hotbot'); ?></p>
              </div>
            </li>
            <li class="center-sm mb-5">
              <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
              <div class="listing__content">
                <h5 class="heading"><?php esc_html_e('Customer service emails and chats', 'hotbot'); ?></h5>
                <p><?php _e('​​Customer service emails and chats:</strong> In order to better train our representatives, we will store any communications you have with our customer service team. This information will help us remember and address any past reported issues.', 'hotbot'); ?></p>
              </div>
            </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--gredient pt-5 pb-5 pt-md-5 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10 pt-5 pb-5 text-align-center">
        <h2 class="heading"><?php esc_html_e('HotBot VPN may also occasionally employ the use of cookies. This use is limited to the following situations', 'hotbot'); ?></h2>
      </div>  
    </div>
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2 ">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/logs-log-promise.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/logs-log-promise.jpg" type="image/jpg"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/logs-log-promise.jpg" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1 ">
        <ul class="listing mt-5 mb-3">
            <li class="center-sm mb-5">
              <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
              <div class="listing__content">
                <h5 class="heading"><?php esc_html_e('Google Analytics', 'hotbot'); ?></h5>
                <p>​​<?php esc_html_e('HotBot VPN may occasionally use Google Analytics. This service uses cookies, which help to monitor and improve our site performance.', 'hotbot'); ?></p>
              </div>
            </li>
            <li class="center-sm mb-5">
              <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
              <div class="listing__content">
                <h5 class="heading"><?php esc_html_e('Site Personalization', 'hotbot'); ?></h5>
                <p><?php esc_html_e('​​A personalization cookie may also be offered by HotBot VPN. This cookie will remember your default language and preferred background colour so you do not need to reset these settings for every session.', 'hotbot'); ?></p>
              </div>
            </li>
        </ul>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-10 pt-md-5 text-align-center">
        <p><?php esc_html_e('Many VPN services also collect financial information in order to facilitate payments for their services. HotBot VPN does ​not ​ store any personal financial information. All billing data only exists on the platform of the payment processor you choose to use. These processors only collect the minimum amount of data required for your transaction.', 'hotbot'); ?></p>
      </div>  
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center ">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-10">
        <h2 class="heading"><?php _e('How does Big Surveillance <span>impact no logs policies?</span>', 'hotbot'); ?></h2>
        <p class="mb-5"><?php esc_html_e('HotBot VPN is a proud no logs company. We do not collect any sensitive user data because we understand that it simply isn’t ours to have. However, many users ask us “can’t the government force you to collect and share user information?”', 'hotbot'); ?></p>
        <div class="row justify-content-center">
            <div class="col-sm-6 ">
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/how-does-big-surveillance-impact-no-logs-policies.svg" />
            </div>
        </div>
      </div>  
    </div>
    <div class="row justify-content-center mt-5">
      <div class="col-sm-6 ">
        <ul class="listing mt-3 mb-3">
            <li class="center-sm mb-5">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                <div class="listing__content">
                    <h5 class="heading"><?php esc_html_e('Firstly, HotBot VPN cannot be compelled to collect or share user data thanks to our location.', 'hotbot'); ?></h5>
                    <p>​​<?php esc_html_e('Our service is based in Seychelles, a country with no comprehensive laws surrounding the collection or use of personal data. The lack of those laws means they have no say in how we operate regarding user information.', 'hotbot'); ?></p>
                </div>
            </li>
        </ul>
      </div>
      <div class="col-sm-6 ">
        <ul class="listing mt-3 mb-3">
          <li class="center-sm mb-5">
            <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
            <div class="listing__content">
              <h5 class="heading"><?php esc_html_e('Secondly, Seychelles does not belong to the list of countries we collectively refer to as “Big Surveillance”.', 'hotbot'); ?></h5>
              <p><?php esc_html_e('Big Surveillance countries are a part of what’s known as the “Eyes Alliances.” There are three Eyes Alliances. They are the 5 Eyes, 9 Eyes, and 14 Eyes Alliances.', 'hotbot'); ?></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--gredient pt-5 pb-5 pt-md-7 pb-md-7">
  <div class="container text-align-center">
    <div class="row justify-content-center">
      <div class="col-sm-9">
        <h2 class="heading mb-5"><?php esc_html_e('Secure your private data with military-grade encryption', 'hotbot'); ?></h2>
        <a href="/order/" class="btn btn--primary has-arrow m-auto"><span><?php esc_html_e('Get Hotbot VPN Now!', 'hotbot'); ?>
          <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
        <a href="/features" class="text-color-primary text-color-primary--has-hover mt-5 d-block"><?php esc_html_e('Go Back to all Features', 'hotbot'); ?></a>
      </div>
    </div>
  </div>
</section>

<?php include 'inc/inc-package-plan.php'; ?>

<?php include 'inc/inc-apps-link.php'; ?>

<?php get_footer();?>