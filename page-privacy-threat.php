<?php /* Template Name: Privacy threat page */ ?>
<?php get_header();?>

<?php include 'inc/inc-header.php'; ?>

<section class="layout-section pt-5 pb-3  pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-privacy.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-privacy.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-privacy.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <h1 class="heading mb-5"><?php _e('Is My IP Address a <span>Threat to My Privacy?</span>', 'hotbot'); ?></h1>
        <p class="legend mb-5"><?php esc_html_e('The term “IP Address” is familiar to most people. However, although they’ve heard the phrase, many don’t really know what an IP address is, aside from a series of numbers. Let’s break it down. “IP” is short for “internet protocol.” In essence, it simply describes a process of organizing the internet. The second half of the term, “address,” functions exactly as it sounds. It gives every internet-connected device a digital address, just like a home or email address. When a device takes an action online, results know to return to that device because of its address. In addition to identifying your device, some IPs also contain information about you, the user. But what information do they have, and can it threaten your privacy?', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 pt-md-5 pb-md-5 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-zipcode.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-zipcode.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-zipcode.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h3 class="heading"><?php esc_html_e('What Does My IP Reveal About Me?', 'hotbot'); ?></h3>
        <p><?php esc_html_e('Let’s tackle the question of what your internet protocol address knows about you. The most basic data includes:', 'hotbot'); ?></p>
        <ul class="listing mt-3 mb-5">
          <li class="center-sm mb-3">
            <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
            <div class="listing__content">
              <p>​​<?php esc_html_e('The country and city you’re in', 'hotbot'); ?></p>
            </div>
          </li>
          <li class="center-sm mb-3">
            <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
            <div class="listing__content">
              <p><?php esc_html_e('​​Your ZIP or postal code', 'hotbot'); ?></p>
            </div>
          </li>
          <li class="center-sm mb-3">
            <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
            <div class="listing__content">
              <p><?php esc_html_e('​​The name of your internet service provider', 'hotbot'); ?></p>
            </div>
          </li>
        </ul>
        <p><?php esc_html_e('Already, this data is semi-revealing but not necessarily a drastic breach of privacy. Fortunately, in most cases, this is all the information your IP will ever reveal about you. However, some websites will use IPs to collect even more information. For example, you sign in to Facebook. Facebook receives your IP address. Using that number and information from your account, they can construct a detailed profile about you, including your name, activities, interests, friends, contact information, and more. All of this data is associated with your IP address and is somewhat more concerning with regards to privacy. However, in this circumstance, Facebook and their affiliates are the only ones with access to this information. Unless they experience a leak or breach, it’s unlikely that any malicious party will be able to get their hands on it, which strengthens your privacy somewhat.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-isp-name.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-isp-name.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-isp-name.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <h3 class="heading"><?php esc_html_e('How Would Someone Find My IP Address?', 'hotbot'); ?></h3>
        <p><?php esc_html_e('In general, your IP address is shared discreetly between websites in order for the internet to function properly. Your internet service provider has access to this number, and the websites you visit can see it as well. We trust them to use that information safely and in our best interests.', 'hotbot'); ?></p>
        <p><?php esc_html_e('But can third-parties, like hackers, find your IP address as well? Unfortunately, yes. These are the most common ways someone can find your IP:', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-torrenting.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-torrenting.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-torrenting.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h3 class="heading"><?php esc_html_e('By Torrenting', 'hotbot'); ?></h3>
        <p><?php esc_html_e('If you torrent files online, your IP address is visible to any member of the “Swarm” or group of torrenters using the same network you are. This is the easiest and most common way for someone to find your address.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-email.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-email.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-email.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <h3 class="heading"><?php esc_html_e('Through Email', 'hotbot'); ?></h3>
        <p><?php esc_html_e('Some email servers will attach your IP address to the header of the email, although this practice is becoming less common.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-ip-tool.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-ip-tool.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-ip-tool.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h3 class="heading"><?php esc_html_e('With an IP Tool', 'hotbot'); ?></h3>
        <p><?php esc_html_e('Some websites offer tools that allow someone to look up a person’s IP address.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-web-logs.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-web-logs.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-web-logs.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <h3 class="heading"><?php esc_html_e('Via Web Server Logs', 'hotbot'); ?></h3>
        <p><?php esc_html_e('When you visit a website, their servers log your IP to keep track of who visits and when. In general, this information can only be accessed by admins and site owners but if the server logs suffer a data breach, others may be able to see the information as well.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-public-forum.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-public-forum.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-public-forum.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h3 class="heading"><?php esc_html_e('Through a Public Discourse Space', 'hotbot'); ?></h3>
        <p><?php esc_html_e('Places like forums, blogs, and online games can see your IP address. This is how they ban unwelcome users.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-ads.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-ads.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-ads.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <h3 class="heading"><?php esc_html_e('From Ads', 'hotbot'); ?></h3>
        <p><?php esc_html_e('If you interact with a digital advertisement, the business behind the ad will be able to see your IP.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-5 pb-5 pt-md-7 text-align-center--md">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10 text-align-center">
        <h2 class="heading"><?php esc_html_e('What Can Someone Do with My IP?', 'hotbot'); ?></h2>
        <p><?php esc_html_e('Although a person can find your IP address in a couple of ways, always keep in mind that the information associated with it is usually basic and doesn’t include much identifying information. In addition, some people fear that their IP address can be “hacked” but your address is just a number, rather than a software or hardware and can’t be hacked, per se. However, there are some ways third-parties, such as hackers, can use it as a way to damage your devices or simply inconvenience you. With your IP, someone may:', 'hotbot'); ?></p>
      </div>  
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-network-attack.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-network-attack.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-network-attack.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h3 class="heading"><?php esc_html_e('Attack Your Network', 'hotbot'); ?></h3>
        <p><?php esc_html_e('DoS (Denial-of-Service) or DDoS (Distributed-Denial-of-Service) attacks occur when a cybercriminal floods your internet network with excess and unwanted traffic. Once your network reaches a certain level of traffic, it might shut down altogether, leaving you without internet access. This type of attack is common in the gaming community, with players trying to sabotage their competitors.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-restricted-access.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-restricted-access.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-restricted-access.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <h3 class="heading"><?php esc_html_e('Restrict Your Access', 'hotbot'); ?></h3>
        <p><?php esc_html_e('Many websites deliberately block devices from accessing them. They do this by banning your IP address. Most often this occurs as a way to geo-block content. For example, people in Canada can’t watch US Netflix because Netflix has blocked their IP address. Your IP address can also be used to ban you from online games or forums, and some governments use IP banning as a way of censoring content.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-5 pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-targeted-ads.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-targeted-ads.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-targeted-ads.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h3 class="heading"><?php esc_html_e('Show You Ads', 'hotbot'); ?></h3>
        <p><?php esc_html_e('If you search for wool socks on Amazon, you might start seeing online ads for socks wherever you go. In some cases, advertisers are able to show you these ads because your IP has been associated with an interest in socks.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-data-collection.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-data-collection.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-data-collection.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <h3 class="heading"><?php esc_html_e('Collect Your Info', 'hotbot'); ?></h3>
        <p><?php esc_html_e('Just as advertisers can use your IP to gauge your interests and show you relevant ads, some websites (like social media and ecommerce platforms) collect
information about you and build profiles associated with your IP address. They can then use it for their own purposes, such as for marketing, or sell it to their affiliates and other third-parties.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-data-sale.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-data-sale.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-data-sale.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h3 class="heading"><?php esc_html_e('Sell It', 'hotbot'); ?></h3>
        <p><?php esc_html_e('Your IP address doesn’t contain much useful information for a hacker. However they may still sell it online or add it to a database. In this case, anyone can see it and add information about you to your database profile as they collect it.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-data-theft.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-data-theft.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-data-theft.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <h3 class="heading"><?php esc_html_e('Steal Your Information', 'hotbot'); ?></h3>
        <p><?php esc_html_e('Most private information associated with your IP remains private. However, if a cybercriminal hacks into a website that collects your data along with your IP, your information may become vulnerable. Sites that collect your data include social media platforms and your internet service provider.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-sue-you.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-sue-you.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-sue-you.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h3 class="heading"><?php esc_html_e('Sue You', 'hotbot'); ?></h3>
        <p><?php esc_html_e('Although torrenting has fallen somewhat out of favour from the rise of streaming services, many users still torrent. However, if you torrent copyrighted content, your IP address may lead lawyers right to your door, to demand fines for stealing digital material.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-3 pb-3 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-swatting.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-swatting.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-swatting.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <h3 class="heading"><?php esc_html_e('Try “Swatting”', 'hotbot'); ?></h3>
        <p><?php esc_html_e('The tactic of “swatting” originated as an online prank, albeit a very serious one. In this case, one user learns the IP address and subsequent location of another user. Then, they make a “prank” call to law enforcement about illegal activities happening at the address of the victim, which can land them in trouble with police and other agencies. Swatting is now generally regarded as a type of criminal cyber harassment, but may still happen.', 'hotbot'); ?></p>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm-8 pt-5">
        <p class="text-align-center"><?php esc_html_e('In addition, a cybercriminal could theoretically hack into your actual device. This will give them access to your IP address and control over your computer. In this case, they could access or download illegal content over your IP which would be traced back to you.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section  pt-3 pb-3 pt-md-7 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10 text-align-center">
        <h2 class="heading"><?php esc_html_e('How Do I Keep My IP Safe?', 'hotbot'); ?></h2>
        <p><?php esc_html_e('All internet users who want to protect their digital privacy should take steps to protect their IP addresses. In addition, IP breaches can result in network attacks, content bans, and other annoying situations. Fortunately, there are few easy methods to protect your IP:', 'hotbot'); ?></p>
      </div>  
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-vpn.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-vpn.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-vpn.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h3 class="heading"><?php esc_html_e('Use a VPN', 'hotbot'); ?></h3>
        <p><?php esc_html_e('A VPN, or virtual private network, is a service that quickly hides a user’s IP address. They do this by replacing it with one from their own servers. This protects your anonymity and privacy when you use the internet. There are dozens of VPNs on the market. However, make sure you choose one with fast speeds, several servers, and a no logs promise, so you know they won’t be collecting your data for themselves.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section  pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-tyhreat-switch-wifi.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-tyhreat-switch-wifi.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-tyhreat-switch-wifi.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <h3 class="heading"><?php esc_html_e('Switch Wi-Fi Networks', 'hotbot'); ?></h3>
        <p><?php esc_html_e('If you can access different wi-fi networks, each network will give you a different IP. In this way, you can compartmentalize your browsing habits and the information each address can associate with you. Switching between wi-fi and mobile data will also change your IP. However, if you suspect someone is tracking or has sold your IP address, this fix is only temporary. It doesn’t address the larger issue.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-proxy.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-proxy.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-proxy.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h3 class="heading"><?php esc_html_e('Use a Proxy Server', 'hotbot'); ?></h3>
        <p><?php esc_html_e('Similar to a VPN, a proxy server will filter your internet activity through their own network, then return your results back to you. The websites you
access will see the proxy’s IP, rather than your own. However, many proxies on the market are slow. They also don’t offer the same level of encryption as a VPN, so they’re not always the best option.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section  pt-3 pb-3 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-isp-chat.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-isp-chat.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-isp-chat.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <h3 class="heading"><?php esc_html_e('Talk to Your ISP', 'hotbot'); ?></h3>
        <p><?php esc_html_e('Your internet service provider is the organization responsible for assigning you an IP address. Normally, your device will keep the same address for as long as you are under contract with that ISP. However, some internet providers will assign you a “dynamic” address, which means it will change with every session. Be wary, however. Many ISPs charge extra for this service, if they offer it at all. They may also ask for extra information about ​why​ you want your IP address changed.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section  pt-3 pb-3 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-tor.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-tor.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-tor.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h3 class="heading"><?php esc_html_e('Try Tor', 'hotbot'); ?></h3>
        <p><?php esc_html_e('Tor is an online service designed to provide its users with anonymity. This anonymity includes user IP addresses. However, Tor is sometimes slow and run by volunteers who may not be held accountable if they misuse your information.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="layout-section layout-section--tertiary-bg pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-breach.webp" type="image/webp">
              <source srcset="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-breach.png" type="image/png"> 
              <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ip-threat-breach.png" class="b-radius-20">
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <h3 class="heading"><?php esc_html_e('What Happens if My IP Address Has Been Breached?', 'hotbot'); ?></h3>
        <p><?php esc_html_e('If you have reason to believe that your IP address is being tracked, has been leaked in a data breached, or was sold online, the most important thing to do is have it changed. You can ask your ISP to change it directly, or you can use a VPN for every online session so you never have the same IP address twice. If you’re concerned about cybercriminals using it for illegal activities, you may also want to consider contacting the authorities and alerting them as soon as possible.', 'hotbot'); ?></p>
        <p><?php esc_html_e('As always, good privacy practices online can help keep your IP and privacy safe from attacks and breaches before they happen.', 'hotbot'); ?></p>
      </div>
    </div>
  </div>
</section>


<?php include 'inc/inc-package-plan.php'; ?>

<?php include 'inc/inc-apps-link.php'; ?>

<?php get_footer();?>