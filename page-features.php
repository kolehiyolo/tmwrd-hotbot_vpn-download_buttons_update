<?php /* Template Name: Features page */ ?>
<?php get_header();?>

<?php include 'inc/inc-header.php'; ?>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">
    <div class="container text-align-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="heading"><?php esc_html_e('Features', 'hotbot' ); ?></h1>
                <p class="legend mb-5"><?php esc_html_e('Using HotBot VPN provides an enhanced internet experience. Get total privacy plus all these amazing built-in features. Explore freely, the way it\'s meant to be.', 'hotbot' ); ?></p>
                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow m-auto"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
                <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
            </div>
        </div>
    </div>
</section>
<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-align-center">
        <h2 class="heading mb-5"><?php _e('Basic  <span>Features</span>', 'hotbot' ); ?></h2>
      </div>
    </div>
    <div class="row text-align-center justify-content-center">
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/high-speed-connections.svg" class="mt-5 mb-3" alt="High Speed Connections"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Incredibly Fast Connections', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('Maximum download speeds available. Unlimited, no restrictions. 6 Devices at once!', 'hotbot' ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/server-locations.svg" class="mt-5 mb-3" alt="Multiple Server Locations"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('2000+ Server Locations', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('Enjoy no limits with HotBot VPN! With more than 2000 servers to our name you will always find the connection you are looking for. Access our VPN servers in multiple countries around the world.', 'hotbot' ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/multiple-devices.svg" class="mt-5 mb-3"  alt="Multiple Devices" />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Use HotBot VPN on Multiple Devices', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('All you need is a single HotBot VPN account. Membership allows you to connect with multiple devices. Mac, Windows, Android, iOS.', 'hotbot' ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/anonymous-browsing.svg" class="mt-5 mb-3" alt="Anonymous Browsing"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Anonymous Browsing', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('HotBotVPN makes you become anonymous online. Make a discreet Bitcoin transaction, access Tor sites, and download safely across P2P networks or IRC.', 'hotbot' ); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/real-customer-support.svg" class="mt-5 mb-3" alt="Real Customer Support"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Real Customer Support', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('We offer real agents that can answer your questions. Our support team can help you set-up or answer troubleshooting questions you may have.', 'hotbot' ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/instant-privacy-security.svg" class="mt-5 mb-3" alt="Instant Privacy & Security"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Instant Privacy & Security', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('HotBot VPN hides your true IP address from everyone, then encrypts your network data so it is impossible to decipher. Total security with one quick connection.', 'hotbot' ); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-align-center">
        <h2 class="heading mb-5"><?php _e('Advanced  <span>Features</span>', 'hotbot' ); ?></h2>
      </div>
    </div>
    <div class="row text-align-center justify-content-center">
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/kill-switch.svg" class="mt-5 mb-3" alt="Kill Switch"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Kill Switch', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('Our built-in kill switch instantly blocks your network connection if for some reason the VPN connection drops. You can feel safe at all times.', 'hotbot' ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/military-grade-aes-256-encryption.svg" class="mt-5 mb-3" alt="Encryption"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Military-Grade AES-256 Encryption', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('Protecting your data is our top concern. We only use the most advanced 256 bit data encryption. It\'s the only encryption that is trusted by security experts around the world.', 'hotbot' ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/zero-logging-no-activity-or-connection-logs.svg" class="mt-5 mb-3" alt="Zero Logging"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Zero Logging, No Activity or Connection Logs', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('HotBot VPN has a zero log promise. We don\'t track or log anything when you connect. Nothing remains to identify who you are or where you are.', 'hotbot' ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/dns-leak-protection.svg" class="mt-5 mb-3" alt="DNS Leak Protection"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('DNS Leak Protection', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('We use cutting-edge technology to secure network activity and privacy in case DNS servers send unencrypted queries outside a secure HotBot VPN tunnel.', 'hotbot' ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/hide-your-ip-address.svg" class="mt-5 mb-3" alt="Hide your IP"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Hide Your IP Address', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('As soon as you connect to a secure HotBot VPN server, your IP address and location are instantly changed so no one can see your real identity.', 'hotbot' ); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-align-center">
        <h2 class="heading mb-5"><?php esc_html_e('And More', 'hotbot' ); ?></h2>
      </div>
    </div>
    <div class="row text-align-center justify-content-center">
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/streaming.svg" class="mt-5 mb-3" alt="Streaming"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Streaming', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('Access your content anywhere, anytime on multiple devices. Avoid data caps and throttling. Watch your normal shows even while travelling.', 'hotbot' ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/p2p-friendly.svg" class="mt-5 mb-3" alt="P2P Friendly"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('P2P Friendly', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('No restrictions! Access your favorite P2P networks and files, and more. Become totally anonymous using an encrypted HotBot VPN connection.', 'hotbot' ); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/unlimited-bandwidth.svg" class="mt-5 mb-3" alt="Unlimited Bandwidth"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Unlimited Bandwidth', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('Download unlimited content. Prevent your ISP from putting limits on certain kinds of traffic by masking all your traffic. Breakthrough the boundaries of the internet.', 'hotbot' ); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/anti-hacker-&-public-wi-fi-security.svg" class="mt-5 mb-3" alt="Anti Hacker"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Anti-Hacker & Public Wi-Fi Security', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('HotBot VPN is crucial when using public wi-fi. Become invisible to hackers, network attacks, snooping, man-in-the-middle attacks, and more. Not using a secure VPN on public networks is the #1 cause of hacker attacks.', 'hotbot' ); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/defeat-isp-throttling.svg" class="mt-5 mb-3" alt="Defeat ISP Throttling"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Defeat ISP Throttling', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('Internet service providers purposely slow down certain content, especially HD streaming. No longer will you be subject to buffering or limits that your ISP is forcing on you.', 'hotbot' ); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="layout-section--gredient">
  <?php include 'inc/inc-guarantee.php'; ?>
</div>

<?php include 'inc/inc-package-plan.php'; ?>

<?php include 'inc/inc-apps-link.php'; ?>

<?php get_footer();?>