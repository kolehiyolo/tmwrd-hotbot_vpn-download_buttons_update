<?php /* Template Name: Risk of Using Public WIFI page */ ?>
<?php get_header();?>

<?php include 'inc/inc-header.php'; ?>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/safety-and-risk.svg">
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <h1 class="heading mb-5"><?php _e('<span>The Dos, Don’ts </span> and Safety Risks of Public Wi-fi', 'hotbot'); ?></h1>
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get Hotbot VPN', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>

    </div>
  </div>
</section>

<section class="layout-section layout-section--gredient pt-3 pb-3 pt-md-7 pb-md-7 text-align-center">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2 class="heading"><span><?php esc_html_e('In the age of connectivity', 'hotbot'); ?></span></h2>
            <p><?php esc_html_e('finding free public wi-fi is like returning to the days of being a child set loose in a candy shop: as we hurriedly connect to the network, a wave of excitement comes over us, knowing that we’ve hit the gold mine of technology. Unfortunately, even though it saves our hard-earned cellular data and allows us to get out of the office to do our work, public wi-fi comes with a set of risks to all users on the open network, especially if those users don’t take steps (hint: like using HotBot VPN) to protect themselves. Here’s how your data and devices can be attacked over open wi-fi:', 'hotbot'); ?></p>
        </div>  
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dad-rogue-network-attacks.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dad-rogue-network-attacks.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/dad-rogue-network-attacks.png" class="b-radius-20" alt="Rogue Network Attacks" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <ul class="listing mt-3 mb-3">
            <li class="center-sm mb-3">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg> 
                <div class="listing__content">
                    <h5 class="heading"><?php esc_html_e('Rogue Network Attacks', 'hotbot'); ?></h5>
                    <p><?php esc_html_e('Hackers know that data is easy to steal over an open wi-fi network. However, it’s even easier to steal if the hacker runs the network itself. That’s why open wi-fi should always be treated with caution and vetted before a connection is established. It’s all too easy for a hacker to entice you to connect to their “Free Wi-Fi,” leaving your precious data vulnerable to their whims.', 'hotbot'); ?></p>
                </div>
            </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dad-middle-attack.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dad-middle-attack.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/dad-middle-attack.png" class="b-radius-20" alt="Man-in-the-middle Attacks" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <ul class="listing mt-3 mb-3">
            <li class="center-sm mb-3">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg> 
                <div class="listing__content">
                    <h5 class="heading"><?php esc_html_e('Man-in-the-Middle Attacks', 'hotbot'); ?></h5>
                    <p><?php esc_html_e('One of the most common attacks committed over public wi-fi is a man-in-the-middle, or MitM, attack. MitM attacks are a form of online eavesdropping where a hacker is able to position themselves in a network in such a way that they’re able to see all the data sent between a computer and a destination (such as a website). The connection that was once private is now visible to any hacker carrying out a man-in-the-middle attack.'); ?></p>
                </div>
            </li>
        </ul>
      </div>

    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dad-malware-distribution.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dad-malware-distribution.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/dad-malware-distribution.png" class="b-radius-20" alt="Malware Distribution" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <ul class="listing mt-3 mb-3">
            <li class="center-sm mb-3">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg> 
                <div class="listing__content">
                    <h5 class="heading"><?php esc_html_e('Malware Distribution', 'hotbot'); ?></h5>
                    <p><?php esc_html_e('There’s always the risk that an attacker can slip malware onto your devices without your knowledge, especially if your software is outdated. One of the best ways for a hacker to do this is to take advantage of devices connected to unprotected wi-fi networks. In addition to impacting your privacy, the more infected devices connect to the same open network, the faster the malware may be capable of spreading.', 'hotbot'); ?></p>
                </div>
            </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dad-snooping-sniffing.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dad-snooping-sniffing.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/dad-snooping-sniffing.png" class="b-radius-20" alt="Snooping / Sniffing" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <ul class="listing mt-3 mb-3">
            <li class="center-sm mb-3">
                <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg> 
                <div class="listing__content">
                    <h5 class="heading"><?php esc_html_e('Snooping and Sniffing', 'hotbot'); ?></h5>
                    <p><?php esc_html_e('Snooping and sniffing is a form of online attack that allows a hacker to see every activity a person does over an open wi-fi network. Through this form of snooping, hackers can collect things such as private messages and emails, login information, and financial details. They may even be able to use a snooping and sniffing attack to hijack your accounts.', 'hotbot'); ?></p>
                </div>
            </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-5 pb-3 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dad-public-wifi.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dad-public-wifi.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/dad-public-wifi.png" class="b-radius-20" alt="Public WIFI" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h2 class="heading"><?php _e('Although there are several risks <span>when it comes to using public wi-fi</span>', 'hotbot'); ?></h2>
        <p>​​​<?php esc_html_e('everything good in life is worth a little bit of risk, be it tech, love, or more carbs for dinner. Thankfully, to every problem, there is a solution. In the case of public wi-fi, there are a few simple dos and don’ts that every user can follow to protect themselves:', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>
<section class="layout-section layout-section--tertiary-bg pt-3 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-md-11">
            <ul class="listing mb-3">
                <li class="center-sm mb-3">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg> 
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('Don\'t allow your devices to auto-connect to wi-fi networks', 'hotbot'); ?></h5>
                        <p><?php esc_html_e('Even though this feature is convenient, it reduces the control you have over the networks your device interacts with.', 'hotbot'); ?></p>
                    </div>
                </li>
                <li class="center-sm mb-3">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg> 
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('Don\'t leave wi-fi on when you’re not using it', 'hotbot'); ?></h5>
                        <p><?php esc_html_e('The easiest way to prevent hackers from accessing your data over wi-fi is to remove the wi-fi altogether.', 'hotbot'); ?></p>
                    </div>
                </li>
                <li class="center-sm mb-3">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg> 
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('Don\'t use public wi-fi', 'hotbot'); ?></h5>
                        <p><?php esc_html_e('Unless it’s an emergency, always use your cellular data instead of public w-fi networks. Sure, it may cost you a few bucks every month, but that’s peanuts when compared to the damage that could be caused by your data being stolen over public wi-fi.', 'hotbot'); ?></p>
                    </div>
                </li>
                <li class="center-sm mb-3">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg> 
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('Don\'t access websites that contain sensitive personal information', 'hotbot'); ?></h5>
                        <p><?php esc_html_e('There’s only so much a hacker can learn from you when you Google recipes for dinner. However, the amount of valuable information at risk increases significantly when you access websites, such as banking or healthcare sites, that contain sensitive information about you.', 'hotbot'); ?></p>
                    </div>
                </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-md-11">
            <ul class="listing mb-3">
                <li class="center-sm mb-3">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg> 
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('Do disable file sharing', 'hotbot'); ?></h5>
                        <p><?php esc_html_e('Many file-sharing settings open your device up to unnecessary risks from other users. Disabling the setting helps keep you protected.', 'hotbot'); ?></p>
                    </div>
                </li>
                <li class="center-sm mb-3">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg> 
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('Do visit sites with HTTPS encryption', 'hotbot'); ?></h5>
                        <p><?php esc_html_e('Every time you connect to a website, you should make sure it uses safe HTTPS encryption, whether you visit the site on public or private wi-fi.', 'hotbot'); ?></p>
                    </div>
                </li>
                <li class="center-sm mb-3">
                    <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg> 
                    <div class="listing__content">
                        <h5 class="heading"><?php esc_html_e('Do use HotBot VPN', 'hotbot'); ?></h5>
                        <p><?php esc_html_e('A good VPN service will encrypt your online session and keep you and your data protected from prying eyes. While you could use any reputable VPN, why not give HotBot VPN a try?', 'hotbot'); ?></p>
                    </div>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'inc/inc-package-plan.php'; ?>

<?php include 'inc/inc-apps-link.php'; ?>

<?php get_footer();?>