<?php /* Template Name: Download page */ ?>
<?php get_header();?>

<?php include 'inc/inc-header.php'; ?>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-7 col-sm-6 col-md-10">
                            <?php /*windows*/ ?>
                            <picture class="d-none os-windows">
                                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/index_hero_desktop.webp" type="image/webp">
                                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/index_hero_desktop.png">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/index_hero_desktop.png" alt="Windows" class="device-desktop">
                            </picture>
                            <?php /*macOs*/ ?>
                            <picture class="d-none os-apple">
                                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dl-mac-os.webp" type="image/webp">
                                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dl-mac-os.png">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/dl-mac-os.png" alt="MacOS">
                            </picture>
                            <?php /*iphone*/ ?>
                            <picture class="d-none os-iphone os-ipad">
                                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dl-app-ios.webp" type="image/webp">
                                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dl-app-ios.png">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/dl-app-ios.png" alt="iOS">
                            </picture>
                            <?php /*andoid*/ ?>
                            <picture class="d-none os-android">
                                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dl-app-android.webp" type="image/webp">
                                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/dl-app-android.png">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/dl-app-android.png" alt="Android" class="device-desktop">
                            </picture>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <h2 class="heading mb-md-5">
                    <?php echo sprintf( __('Download HotBot VPN For <span class="d-none os-windows">Windows</span><span class="d-none os-apple">MacOs</span><span class="d-none os-iphone os-ipad">iOS</span><span class="d-none os-android">Android</span>', 'hotbot'), '/'); ?>
                </h2>

                <?php /*windows*/ ?>
                <p class="mb-md-5 d-none os-windows"><?php _e('Security & Privacy on your Windows PC', 'hotbot'); ?></p>
                <?php /*macOs*/ ?>
                <p class="mb-md-5 d-none os-apple"><?php _e('A must-have for travel and incognito browsing. Instant, anonymous, and secure.', 'hotbot'); ?></p>
                <?php /*iphone*/ ?>
                <p class="mb-md-5 d-none os-iphone os-ipad"><?php _e('Supercharge your iPhone or iPad with ultimate security features', 'hotbot'); ?></p>
                <?php /*android*/ ?>
                <p class="mb-md-5 d-none os-android"><?php _e('A must-have for travel and incognito browsing. Instant, anonymous, and secure.', 'hotbot'); ?></p>

                <?php /*windows*/ ?>
                <div class="d-none os-windows">
                    <div class="btn-group align-items-stretch">
                      <a href="https://assets.hotbotvpn.com/windows/HotBotVpnInstaller.exe" class="d-block mb-5 mt-0" id="windowsdl">
                          <img style="max-width: 200px" src="<?php bloginfo('template_url'); ?>/assets/img/windows-download.svg" class="m-auto ml-md-0" alt="Download Now">
                      </a>
                      <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow btn--sm mt-0 mb-5"><span><?php esc_html_e('Get HotBot VPN', 'hotbot'); ?>
            <svg class="icon icon-right" ><use xlink:href="#long-arrow-alt-right-solid" ></use></svg></span></a> 
                    </div>
                </div>
                <?php /*macOs*/ ?>
                <div class="d-none os-apple">
                    <div class="btn-group align-items-stretch">
                      <a href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" id="macosapp" target="_blank" class="d-block mb-5 mt-0">
                          <img src="<?php bloginfo('template_url'); ?>/assets/img/app-store.svg" class="m-auto ml-md-0" alt="app store">
                      </a>
                        <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow btn--sm mt-0 mb-5"><span><?php esc_html_e('Get HotBot VPN', 'hotbot'); ?>
                          <svg class="icon icon-right" ><use xlink:href="#long-arrow-alt-right-solid" ></use></svg></span></a>  
                    </div>
                </div>
                <?php /*ipad*/ ?>
                <div class="d-none os-ipad">
                  <div class="btn-group align-items-stretch">
                      <a href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" target="_blank" class="d-block mb-5 mt-0" id="appstore">
                          <img src="<?php bloginfo('template_url'); ?>/assets/img/app-store.svg" class="m-auto ml-md-0" alt="app store">
                      </a>
                      <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow btn--sm mt-0 mb-5"><span><?php esc_html_e('Get HotBot VPN', 'hotbot'); ?>
            <svg class="icon icon-right" ><use xlink:href="#long-arrow-alt-right-solid" ></use></svg></span></a> 
                    </div>
                </div>
                <?php /*iphone*/ ?>
                <div class="d-none os-iphone">
                    <div class="btn-group align-items-stretch">
                      <a href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" target="_blank" class="d-block mt-0 mb-5" id="appstore">
                          <img src="<?php bloginfo('template_url'); ?>/assets/img/app-store.svg" class="m-auto ml-md-0" alt="google-play">
                      </a>
                      <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow btn--sm mt-0 mb-5"><span><?php esc_html_e('Get HotBot VPN', 'hotbot'); ?>
            <svg class="icon icon-right" ><use xlink:href="#long-arrow-alt-right-solid" ></use></svg></span></a> 
                    </div>
                </div>
                <?php /*android*/ ?>
                <div class="d-none os-android">
                    <div class="btn-group align-items-stretch">
                    <a href="https://play.google.com/store/apps/details?id=com.hotbotvpn" class="d-block mb-5 mt-0" id="playstore">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/google-play.svg" class="m-auto ml-md-0" alt="google-play">
                    </a>
            <a href="https://assets.hotbotvpn.com/hotbotvpn.apk" class="d-block mb-5 mt-0" id="apk">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/download-apk.svg" class="m-auto ml-md-0" alt="google-play">
                        </a>
                        <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow btn--sm mt-0 mb-5"><span><?php esc_html_e('Get HotBot VPN', 'hotbot'); ?>
            <svg class="icon icon-right" ><use xlink:href="#long-arrow-alt-right-solid" ></use></svg></span></a> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="layout-section pt-5 pb-5">
<div class="layout-section__bg"></div>
    <div class="container">
        <h1 class="heading h2 mb-5 text-align-center--sm"><?php esc_html_e('HotBot VPN Downloads', 'hotbot' ); ?></h1>
        <div class="">
            <div class="row">
                <div class="col-sm-4 text-align-center--md "><p class="mb-3 d-flex align-items-center justify-content-center justify-content-md-start">
                    <svg class="icon-dl green  mr-3 rtl-mr-3"><use xlink:href="#android"></use></svg>
                    Android (Mobile)</p></div>
                <div class="col-sm-8 text-align-center text-align-md-right">
                    <a href="https://assets.hotbotvpn.com/hotbotvpn.apk" id="apk" download class="badge badge--primary mb-3 mr-3"><svg class="icon-dl mr-3"><use xlink:href="#download-solid"></use></svg>APK Download</a>
                    <a href="https://play.google.com/store/apps/details?id=com.hotbotvpn" id="playstore" class="badge badge--primary mb-3"><svg class="icon-dl  mr-3"><use xlink:href="#android"></use></svg>Google Play</a>
                    
                </div>
                <div class="col-12"><div class="devider mb-4"></div></div>
            </div>
            <div class="row">
                <div class="col-sm-4 text-align-center--md "><p class="mb-3 d-flex align-items-center justify-content-center justify-content-md-start"><svg class="icon-dl green  mr-3 rtl-mr-3"><use xlink:href="#android"></use></svg>Android TV</p></div>
                <div class="col-sm-8 text-align-center text-align-md-right">
                    <a href="https://www.amazon.com/HotBot-VPN-Secure-Private-Internet/dp/B09B16BG1C/ref=mp_s_a_1_5?dchild=1&qid=1627967254&refinements=p_72%3A2479575011&s=mobile-apps&sr=1-5" class="badge badge--primary mb-3 mr-3"><svg class="icon-dl mr-3" style="position:relative;top:2px;"><use xlink:href="#amazon-icon"></use></svg>Amazon</a>
                    <a href="https://assets.hotbotvpn.com/hotbotvpn.tv.apk"  id="apk" download class="badge badge--primary mb-3 mr-3"><svg class="icon-dl mr-3"><use xlink:href="#download-solid"></use></svg> APK Download</a>
                    <a href="https://play.google.com/store/apps/details?id=com.hotbotvpn"  id="playstore" class="badge badge--primary mb-3"><svg class="icon-dl mr-3"><use xlink:href="#android"></use></svg>Google Play</a>
                    
                </div>
                <div class="col-12"><div class="devider mb-4"></div></div>
            </div>
            <div class="row">
                <div class="col-sm-4 text-align-center--md "><p class="mb-3 d-flex align-items-center justify-content-center justify-content-md-start"><svg class="icon-dl gray mr-3 rtl-mr-3"><use xlink:href="#ios"></use></svg>iOS</p></div>
                <div class="col-sm-8 text-align-center text-align-md-right">
                    <a href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" id="appstore" target="_blank" class="badge badge--primary mb-3"><svg class="icon-dl mr-3"><use xlink:href="#ios"></use></svg>iOS</a>
                    
                </div>
                <div class="col-12"><div class="devider mb-4"></div></div>
            </div>
            <div class="row">
                <div class="col-sm-4 text-align-center--md "><p class="mb-3 d-flex align-items-center justify-content-center justify-content-md-start"><svg class="icon-dl gray mr-3 rtl-mr-3"><use xlink:href="#macos"></use></svg>Mac OS</p></div>
                <div class="col-sm-8 text-align-center text-align-md-right">
                    <a href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863#?platform=mac" id="macosapp" target="_blank" download class="badge badge--primary mb-3"><svg class="icon-dl mr-3"><use xlink:href="#macos"></use></svg>Mac OS</a>
                    
                </div>
                <div class="col-12"><div class="devider mb-4"></div></div>
            </div>
            <div class="row">
                <div class="col-sm-4 text-align-center--md"><p class="mb-3 d-flex align-items-center justify-content-center justify-content-md-start"><svg class="icon-dl blue mr-3 rtl-mr-3"><use xlink:href="#windows"></use></svg>Windows</p></div>
                <div class="col-sm-8 text-align-center text-align-md-right">
                    <a href="https://assets.hotbotvpn.com/windows/HotBotVpnInstaller.exe" download class="badge badge--primary"><svg class="icon-dl mr-3"><use xlink:href="#windows"></use></svg>Windows</a>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div class="row justify-content-center justify-content-md-end">
            <div class="col-8 col-sm-6 col-md-10">
              <picture>
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/stable-connection.svg"
                  class="layout-section__img mb-5" alt="stable connection">
              </picture>
            </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <h2 class="heading mb-5"><?php esc_html_e('What is a VPN?', 'hotbot'); ?></h2>
        <p class="mb-5"><?php esc_html_e('A VPN (Virtual Private Network) is a must-have tool for everyone who uses the internet. A VPN automatically encrypts your data and personal info when you are online. HotBot VPN makes everything you do while online totally anonymous. Stop letting your ISP spy on you, use a VPN to browse and download freely with confidence.', 'hotbot'); ?>
        </p>
        <p class="mb-5"><?php esc_html_e('HotBot VPN will protect your devices from hackers and snoopers. Works on all public Wi-Fi networks and provides total privacy from your ISP.  It\'s simple to install, extremely fast, and provides unlimited automatic protection for all your internet connected devices.
Other great HotBot benefits include the ability to change your virtual location and access content otherwise not available to you. You can unblock anything with a VPN!
Don\'t wait, become one of the millions of people who have decided to take control of their privacy, install HotBot VPN now.?', 'hotbot'); ?>
        </p>
        <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get HotBot VPN', 'hotbot'); ?>
            <svg class="icon icon-right" ><use xlink:href="#long-arrow-alt-right-solid" ></use></svg></span></a> 
      </div>

    </div>
  </div>
</section>

<!-- include apps-menu section -->
<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 app-menu-color">
    <div class="layout-section__bg"></div>
    <div class="container">
        <h2 class="heading text-align-center"><?php _e('<span>Hotbot VPN</span> for all your devices', 'hotbot' ); ?></h2>
        <?php include 'inc/inc-apps-menu.php';?>
        <div class="pt-5">
            <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow m-auto"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
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
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/stream-content-from-anywhere.svg" class="mt-5 mb-3" alt="Stream from anywhere"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Unblock Content', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('HotBot VPN masks your IP address, hiding it from third-parties. Your connection travels through a server as if it were coming from a different location, so you can view global content from anywhere.', 'hotbot' ); ?></p>
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
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/multiple-devices.svg" class="mt-5 mb-3" alt="Multiple Devices"  />
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
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/anonymous-browsing.svg" class="mt-5 mb-3" alt="Browsing Anonymously"  />
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
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/real-customer-support.svg" class="mt-5 mb-3" alt="Customer Support"  />
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
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/instant-privacy-security.svg" class="mt-5 mb-3" alt="Privacy & Security"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Instant Privacy & Security', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('HotBot VPN hides your true IP address from everyone, then encrypts your network data so it is impossible to decipher. Total security with one quick connection.', 'hotbot' ); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="pt-5">
        <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow m-auto"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
        <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
    </div>
  </div>
</section>

<?php include 'inc/inc-guarantee.php'; ?>

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
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/kill-switch.svg" class="mt-5 mb-3"  alt="Kill Switch" />
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
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/military-grade-aes-256-encryption.svg" class="mt-5 mb-3" alt="Military Grade Encryption"  />
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
    <div class="pt-5">
        <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow m-auto"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
        <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 ">
<div class="layout-section__bg"></div>
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
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/defeat-isp-throttling.svg" class="mt-5 mb-3" alt="ISP Throttling"  />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Defeat ISP Throttling', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('Internet service providers purposely slow down certain content, especially HD streaming. No longer will you be subject to buffering or limits that your ISP is forcing on you.', 'hotbot' ); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="pt-5">
        <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow m-auto"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
        <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 ">
    <div class="container">
        <h2 class="heading text-align-center mb-5"><?php _e('How to download a <span>HotBotVPN in 3 steps</span>', 'hotbot' ); ?></h2>
        <div class="row justify-content-center pt-5">

            <div class="col-sm-4 col-lg-4">
              <div class="d-flex align-items-center pb-5 justify-content-center col-7 col-sm-12 p-0 pr-0 m-auto">
                  <svg class="icon icon-70-svg blue mr-4"><use xlink:href="#download-solid"></use></svg>
                  <div class="col-6">
                      <span class="bold"><?php esc_html_e('Step 1.', 'hotbot' ); ?></span>
                      <h5 class="heading mt-0"><?php esc_html_e('Download', 'hotbot' ); ?></h5>
                  </div>
              </div>
            </div>
            <div class="col-sm-4 col-lg-4">
              <div class="d-flex align-items-center pb-5 justify-content-center col-7 col-sm-12 p-0 pr-0 m-auto">
                  <svg class="icon icon-70-svg blue mr-4"><use xlink:href="#cog-solid"></use></svg>
                  <div class="col-6">
                      <span class="bold"><?php esc_html_e('Step 2.', 'hotbot' ); ?></span>
                      <h5 class="heading mt-0"><?php esc_html_e('Setup', 'hotbot' ); ?></h5>
                  </div>
              </div>
            </div>
            <div class="col-sm-4 col-lg-4">
              <div class="d-flex align-items-center pb-5 justify-content-center col-7 col-sm-12 p-0 pr-0 m-auto">
                  <svg class="icon icon-70-svg blue mr-4"><use xlink:href="#play-solid"></use></svg>
                  <div class="col-6">
                      <span class="bold"><?php esc_html_e('Step 3.', 'hotbot' ); ?></span>
                      <h5 class="heading mt-0"><?php esc_html_e('Run', 'hotbot' ); ?></h5>
                  </div>
              </div>
            </div>

        </div>

        <div class="pt-5">
            <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow m-auto"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
        </div>
    </div>
</section>


<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">
    <div class="layout-section__bg"></div>
    <div class="container">
        <h2 class="heading text-align-center mb-5"><?php _e('What do you get with <span>HotBotVPN software?</span>', 'hotbot' ); ?></h2>

        <div class="row pt-5 align-items-center">
            <div class="col-md-6">
                <div class="d-flex align-items-start mb-4">
                    <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/military-grade-aes-256-encryption.svg" class="img-size-130 mr-4" alt="Encryption"  />
                    <div class="pr-lg-5">
                        <h5 class="heading"><?php esc_html_e('Best-in-class 256-bit encryption', 'hotbot' ); ?></h5>
                        <p><?php esc_html_e('With HotBotVPN software, you can direct all of your internet traffic through an encrypted tunnel that protects it from attackers.', 'hotbot' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start mb-4">
                    <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/unlimited-bandwidth.svg" class="img-size-130 mr-4" alt="Unlimited Bandwidth"  />
                    <div class="pr-lg-5">
                        <h5 class="heading"><?php esc_html_e('Unlimited Bandwidth', 'hotbot' ); ?></h5>
                        <p><?php esc_html_e('Watch all the streaming video you want and video chat with friends to your heart’s content. HotBotVPN software never caps your bandwidth.', 'hotbot' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start mb-4">
                    <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/real-customer-support.svg" class="img-size-130 mr-4" alt="Customer Support"  />
                    <div class="pr-lg-5">
                        <h5 class="heading"><?php esc_html_e('5-star customer support', 'hotbot' ); ?></h5>
                        <p><?php esc_html_e('If you ever have questions about any HotBotVPN app, contact the award-winning HotBotVPN Support Team via live chat or email anytime.', 'hotbot' ); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
            <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
        </div>
            
    </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div class="row justify-content-end">
          <div class="col-sm-10 col-md-12">
            <div class="row justify-content-center">
              <div class="col-8">
                <picture>
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/browsing-anonymously-share-device.webp" type="image/webp">
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/browsing-anonymously-share-device.png" type="image/png"> 
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/browsing-anonymously-share-device.png" class="b-radius-20 mb-5 mb-md-0" alt="Share Devices" >
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>  
      <div class="col-md-6 order-md-1">
        <div class="row">
          <div class="col-md-12 text-align-center--sm">
            <h3 class="heading mb-5"><?php _e('HotBotVPN is not only a <span>VPN for computers</span>', 'hotbot' ); ?></h3>
            <p><?php esc_html_e('A single subscription can be used simultaneously on five supported devices.', 'hotbot' ); ?></p>
            <p><?php esc_html_e('You can install the app on as many devices as you want. If you need to connect more than five devices at the same time, try the HotBotVPN app for routers.', 'hotbot' ); ?></p>
            <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow mt-5"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 ">
    <div class="container">
        <h2 class="heading text-align-center mb-5"><?php _e('Frequently asked questions', 'hotbot' ); ?></h2>
        <div class="accordion mt-4">
            <div class="accordion__item">
                <input type="checkbox" class="accordion__radio-toggler d-none" name="accordion-radio" id="accordion-1">
                <label for="accordion-1" class="accordion__header d-block">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="accordion__heading"><?php esc_html_e('How do I get a VPN?', 'hotbot' ); ?></h5>
                        <svg class="icon accordion__close"><use xlink:href="#angle-down-solid"></use></svg>
                    </div>
                </label>
                <div class="accordion__body">
                    <p><?php esc_html_e('Getting a VPN app is easy Install HotBotVPN on your Windows, iOS, Android, Mac, and enjoy a private, anonymous, and secure Internet.', 'hotbot' ); ?></p>
                    <ol class="list">
				  	          <li><?php echo sprintf( __('Create an account on our website.', 'hotbot' ), '/'); ?>
				  	          <li><?php esc_html_e('Download the apps for iOS, Android, Android TV, PC, or Mac', 'hotbot' ); ?></li>
                      <li><?php esc_html_e('Follow the instructions to set up HotBotVPN on your device.', 'hotbot' ); ?></li>
                      <li><?php esc_html_e('Log in to the app of your choice and click to connect to our high speed VPN servers', 'hotbot' ); ?></li>
                    </ol>
                </div>
            </div>
            <div class="accordion__item">
                <input type="checkbox" class="accordion__radio-toggler d-none" name="accordion-radio" id="accordion-2">
                <label for="accordion-2" class="accordion__header d-block">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="accordion__heading"><?php esc_html_e('Can I download a VPN free?', 'hotbot' ); ?></h5>
                        <svg class="icon accordion__close"><use xlink:href="#angle-down-solid"></use></svg>
                    </div>
                </label>
                <div class="accordion__body">
                    <p><?php esc_html_e('HotBotVPN software is free to download and install on all your devices. Once you are setup, the only thing left to do is create an account and login to each app.', 'hotbot' ); ?></p>
                    <p><?php esc_html_e('We offer an additional 30 day risk-free money-back guarantee. If you are not happy for any reason, contact us and get a full refund.', 'hotbot' ); ?> </p>
                </div>
            </div>
            <div class="accordion__item js-dropdown js-accordion-3">
                <input type="checkbox" class="accordion__radio-toggler d-none" name="accordion-radio" id="accordion-3">
                <label for="accordion-3" class="accordion__header d-block">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="accordion__heading"><?php esc_html_e('Are VPNs legal?', 'hotbot' ); ?></h5>
                        <svg class="icon accordion__close"><use xlink:href="#angle-down-solid"></use></svg>
                    </div>
                </label>
                <div class="accordion__body">
                    <p><?php esc_html_e('VPNs are legal in most countries. They are used by business and individuals that want to secure their personal data.', 'hotbot' ); ?></p>
                    <p><?php esc_html_e('Even countries with highly restrictive governments endorse VPN use by officials, academics, or businesses to stay secure and private in an dangerous world.', 'hotbot' ); ?></p>
                </div>
            </div>
            <div class="accordion__item">
                <input type="checkbox" class="accordion__radio-toggler d-none" name="accordion-radio" id="accordion-4">
                <label for="accordion-4" class="accordion__header d-block">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="accordion__heading"><?php esc_html_e('Do I need a VPN on my phone, or just my computer?', 'hotbot' ); ?></h5>
                        <svg class="icon accordion__close"><use xlink:href="#angle-down-solid"></use></svg>
                    </div>
                </label>
                <div class="accordion__body">
                    <p><?php esc_html_e('Yes, your phone is a direct link to your personal data and identity. Apps you use can easily track your online activity.', 'hotbot' ); ?></p>
                    <p><?php esc_html_e('When using public Wi-Fi for, banking, browsing, and messaging it is increasingly essential to use a VPN to protect your data.', 'hotbot' ); ?></p>
                    <p><?php esc_html_e('You can also use a VPN to unblock content or websites that have been disabled on your network. A VPN can automatically protect and allow you total private access to the Internet.', 'hotbot' ); ?></p>
                    
                </div>
            </div>
            <div class="accordion__item">
                <input type="checkbox" class="accordion__radio-toggler d-none" name="accordion-radio" id="accordion-5">
                <label for="accordion-5" class="accordion__header d-block">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="accordion__heading "><?php esc_html_e('Should I use a VPN all the time?', 'hotbot' ); ?></h5>
                        <svg class="icon accordion__close"><use xlink:href="#angle-down-solid"></use></svg>
                    </div>
                </label>
                <div class="accordion__body">
                    <p><?php esc_html_e('All our apps include the auto-connect feature. Use is to automatically connect to our VPN servers every time you go online. This will keep your data and browsing activity private and secure from your Internet service provider, Wi-Fi admin, and hackers. A VPN scrambles your traffic in an encrypted tunnel so not even your ISP can read it, and it also lets you change your IP address, which prevents your real address from being used to identify, track, or locate you.', 'hotbot' ); ?></p>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow m-auto"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
        </div>
    </div>
</section>


<div class="order-guarantee">
    <section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-md-10 text-align-center--sm">
                            <h3 class="heading mb-5"><?php esc_html_e('30-day Free Trial Money-Back Guarantee', 'hotbot'); ?>
                            </h3>
                            <p><?php esc_html_e('Don\'t put your personal security at risk any longer. Get full access to everything HotBot Premium VPN has to offer. Every subscription comes with our 30 day guarantee. We are so confident that you will love our VPN, If you\'re not 100% satisfied, we\'ll refund your payment within 30 days. No hassles, no risk.', 'hotbot'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row justify-content-end">
                        <div class="col-md-10">
                            <div class="row justify-content-center">
                                <div class="col-9 col-sm-12">
                                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/money-back-guarantee.svg" alt="Money Back Guarantee" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php get_footer();?>