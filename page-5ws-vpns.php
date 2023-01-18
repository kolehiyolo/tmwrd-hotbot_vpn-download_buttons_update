<?php /* Template Name:  The 5WS of VPNS page */ ?>
<?php get_header();?>

<?php include 'inc/inc-header.php'; ?>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div class="video video--bg mb-5 mb-md-0">
          <iframe src="https://www.youtube.com/embed/RdaQUdLzENc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <h1 class="heading mb-5"><?php esc_html_e('What exactly is a VPN', 'hotbot'); ?></h1>
        <p class="mb-5 legend"><?php esc_html_e('What is a VPN? Who do VPNs benefit? Why, where and when should you use one?', 'hotbot'); ?>
        </p>
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get Hotbot VPN', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg>
          </span></a>
      </div>

    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center" id="what">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2 class="heading"><?php _e('What is a <span>VPN?</span>', 'hotbot'); ?></h2>
            <p><?php esc_html_e('When deciding whether or not to use a VPN, the first thing you need to know is what a VPN actually is. The acronym “VPN” is short for “virtual private network.” A virtual private network is a tool that all internet users can access (sometimes for free, sometimes for a monthly fee) to enhance the privacy and security of their actions online. Let’s break down how they work, step-by-step:', 'hotbot'); ?></p>

            <div class="card mb-5">
                <ul class="listing mt-3 mb-3">
                    <li class="center-sm mb-3">
                        <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                        <div class="listing__content">
                            <h5><?php esc_html_e('Step 1.', 'hotbot'); ?></h5>
                            <p><?php esc_html_e('You access a website on the internet. Normally to do this, your device connects to your internet service provider (ISP).', 'hotbot'); ?></p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="card mb-5">
                <ul class="listing mt-3 mb-3">
                    <li class="center-sm mb-3">
                      <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                        <div class="listing__content">
                            <h5><?php esc_html_e('Step 2.', 'hotbot'); ?></h5>
                            <p><?php esc_html_e('Your ISP redirects you to any other websites you want to visit. All of your online activities pass through their servers.', 'hotbot'); ?></p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="card mb-5">
                <ul class="listing mt-3 mb-3">
                    <li class="center-sm mb-3">
                        <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                        <div class="listing__content">
                            <h5><?php esc_html_e('Step 3.', 'hotbot'); ?></h5>
                            <p class="text-color-primary"><?php esc_html_e('With a VPN:', 'hotbot'); ?></p>
                            <p><?php esc_html_e('When you enable a VPN before you begin browsing, the network redirects your internet traffic by creating a secure tunnel between your device and their own servers. Instead of going through your ISP, your activity is funneled through a remote server run by the VPN. This hides or changes your IP address and encrypts any data accessed during your session, meaning that no one (not even the VPN) can see it. Your online privacy remains protected.', 'hotbot'); ?></p>
                            <p class="text-color-primary"><?php esc_html_e('Without a VPN:', 'hotbot'); ?></p>
                            <p><?php esc_html_e('If you aren’t using a VPN, your ISP can see everything you do online. Chances are, they’re logging that activity which can later be handed over to advertisers, governments, and other organizations. Your privacy is compromised.', 'hotbot'); ?></p>
                            <a href="/order/" class="btn btn--primary has-arrow mt-4"><span><?php esc_html_e('Get Started', 'hotbot'); ?>
                            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
                        </div>
                        
                    </li>
                </ul>
            </div>
        
        </div>  
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center" id="who">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2 class="heading mb-5"><?php _e('Who Should Use a <span>VPN?</span>', 'hotbot'); ?></h2>
            <p><?php esc_html_e('Here at HotBot, we believe that privacy is an inviolable right. However, not everyone agrees with that policy. Internet service providers, advertisers, government agencies, and hackers are all clamouring for user data at the expense of their privacy, and no one is safe. That’s why we feel that everyone should use a VPN.', 'hotbot'); ?></p>
            <p><?php esc_html_e('Still not convinced that a virtual private network is right for you? Here are just a few examples of the people using VPNs right now. If you fall into even a single category, consider installing HotBot VPN today:', 'hotbot'); ?></p>
        </div>  
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-media-streamer.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-media-streamer.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/vpn-media-streamer.png" class="b-radius-20 mb-5" alt="Media Streaming" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <svg class="icon icon-60-solid"><use xlink:href="#media-streamer"></use></svg>
        <h4 class="heading mb-4 mt-4"><?php esc_html_e('Media Streamers', 'hotbot'); ?></h4>
        <p><?php esc_html_e('Media streaming services are notorious for releasing content that’s available only in a specific geographic region. It can be endlessly frustrating for a user in a different region to not be able to access that content. For example, you live in Canada and you really want to watch That Really Amazing Show Everyone is Talking AboutTM but, thanks to geo-locking, it’s only available in the United States. Through the power of VPNs, you can actually change your IP address to make it appear as though you’re in the USA, and can now watch your show.', 'hotbot'); ?>
        </p>
        <p><?php esc_html_e('Another added benefit to using a VPN for all media streaming is that it can help you avoid bandwidth throttling. Bandwidth throttling occurs when your internet service provider deliberately slows down the speed of their service. They may do this for a variety of reasons but the result to affected individuals is always the same; frustration and annoyance. However, if you use a VPN and, as a result, their own servers, your ISP cannot slow the service they provide you.', 'hotbot'); ?></p>
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Buy Now', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-online-shoppers.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-online-shoppers.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/vpn-online-shoppers.png" class="b-radius-20 mb-5" alt="Online Shopping" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <svg class="icon icon-60-solid"><use xlink:href="#online-shoppers"></use></svg>
        <h4 class="heading mb-4 mt-4"><?php esc_html_e('Online Shoppers', 'hotbot'); ?></h4>
        <p><?php esc_html_e('Have you ever shopped online? Do you plan to shop online in the future? If your answer is yes, then you should be using a VPN for that task. Hackers are a real and serious threat to your internet safety and one thing they love to steal is financial details. While many online retailers encrypt their transactions, all it takes is one compromised website to cause you any number of problems. After all, one poorly encrypted online sale basically gives a hacker free money for as long as it takes you to notice that they stole your credit card number. Instead of taking that risk and hoping for the best, use a VPN to create a secure connection that allows you to safely pay online.', 'hotbot'); ?>
        </p>
        <p><?php esc_html_e('In addition to protecting your financial details, a VPN can also save you money while online shopping. There are two distinct ways to do this. First, a VPN can actually allow you to shop on websites in different countries. This allows you to compare prices worldwide so you know you’re getting the best deal. Second, your IP address actually contains a lot of information that a website can use to identify you. This allows that site to inflate prices based on what they know about you, rather than based on what a product is actually worth. If you use a VPN to mask your IP address, you can be sure that you’ll always be getting the lowest price instead of a biased one.', 'hotbot'); ?></p>
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Order Now', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>

    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-privacy-conscious-users.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-privacy-conscious-users.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/vpn-privacy-conscious-users.png" class="b-radius-20 mb-5" alt="Privacy Concious Users" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <svg class="icon icon-60-solid"><use xlink:href="#privacy-conscious-users"></use></svg>
        <h4 class="heading mb-4 mt-4"><?php esc_html_e('Privacy Conscious Users', 'hotbot'); ?></h4>
        <p><?php esc_html_e('You should place as much value on your online privacy as you do on your offline privacy. After all, what you do digitally can affect your physical life and vice versa. An unsecure internet connection can be used to spy on you, hijack your devices, pirate your data, and even steal your identity. By using a VPN that encrypts your entire session, you can rest easy knowing that your privacy and security is safe.', 'hotbot'); ?></p>
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get Protection', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-researchers.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-researchers.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/vpn-researchers.png" class="b-radius-20 mb-5" alt="VPN Research" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <svg class="icon icon-60-solid"><use xlink:href="#researchers"></use></svg>
        <h4 class="heading mb-4 mt-4"><?php esc_html_e('Researchers', 'hotbot'); ?></h4>
        <p><?php esc_html_e('Whether you’re a journalist conducting research for an article, a student gathering information for an essay, a scientist collecting background information for an experiment, or just someone in an argument looking for evidence to prove your point, you should be using a VPN when doing your research. Without a VPN, your web browser is biased, meaning your search results will be too. Let us explain.', 'hotbot'); ?>
        </p>
        <p><?php esc_html_e('Every time you log into your browser, that browser knows who you are. It collects information about you from your IP address and from any stored cookies you allow. This data helps the browser to construct a profile about you from your search history.', 'hotbot'); ?></p>
        <p><?php esc_html_e('The more you browse, the more detailed your profile becomes until the browser can guess which search results you’ll be most interested in looking at. In many cases, this makes your search faster and more productive. However, it also means you’re likely being given a biased selection of results to confirm your pre-existing thoughts and ideas. For those doing research that needs to be unbiased, a VPN is the most effective way to ensure you’ll find the fair, impartial data you need.', 'hotbot'); ?></p>
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get Started', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>

    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-working-remotely.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-working-remotely.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/vpn-working-remotely.png" class="b-radius-20 mb-5" alt="Work Remotely" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <svg class="icon icon-60-solid"><use xlink:href="#business-and-employees-working-remotel"></use></svg>
        <h4 class="heading mb-4 mt-4"><?php esc_html_e('Businesses and Employees Working Remotely', 'hotbot'); ?></h4>
        <p><?php esc_html_e('Consumer VPNs are growing swiftly in popularity but did you know they were originally designed to be used by businesses? There are two main reasons for a business (of any size) to use a VPN service in the office.', 'hotbot'); ?></p>
        <p><?php esc_html_e('The first reason is to add an extra layer of encryption to existing security protocols. Businesses, especially small and medium ones, are excellent targets for hackers. They often store very personal details about employees and clients that hackers can exploit, such as credit card information and social security/insurance numbers. By creating secure connections for all employees through VPNs, the chance of a data breach is significantly reduced. A VPN is great for all businesses but is an especially affordable solution for smaller businesses who can’t indulge in high-end, cutting edge security systems.', 'hotbot'); ?></p>
        <p><?php esc_html_e('Businesses can also use VPNs to safely allow employees to work from home or while on a business trip. A virtual private network can give employees secure remote access to data stored on servers used by the business. For employees travelling in countries with strict internet restrictions (such as China), a VPN can also help them access blocked data that they need to do their jobs.', 'hotbot'); ?></p>
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get Hotbot VPN', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-travellers.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-travellers.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/vpn-travellers.png" class="b-radius-20 mb-5" alt="Travellers" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <svg class="icon icon-60-solid"><use xlink:href="#travellers"></use></svg>
        <h4 class="heading mb-4 mt-4"><?php esc_html_e('Travellers', 'hotbot'); ?></h4>
        <p><?php esc_html_e('Whether you love or hate travelling, a VPN can make the experience better for you however you feel about it. If you have to buy airline tickets or rent a car for your trip, a VPN is actually a great way to save you money. When you visit a website, your IP address tells the site where you’re located. Many airlines and car rental businesses charge people from affluent countries more. By using a VPN to disguise or change your IP address, you can search for the lowest possible price to potentially save big bucks.', 'hotbot'); ?>
        </p>
        <p><?php esc_html_e('Another thing travellers might run into is content restrictions in other countries. A website that you’re used to visiting at home turns out to be blocked in the location you’re visiting. You can use a VPN to navigate around the block and freely access any content you want, wherever in the world you may be.', 'hotbot'); ?></p>
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Buy Now', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>

    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-torrenters.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-torrenters.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/vpn-torrenters.png" class="b-radius-20 mb-5" alt="Torrent Users" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <svg class="icon icon-60-solid"><use xlink:href="#torrenters"></use></svg>
        <h4 class="heading mb-4 mt-4"><?php esc_html_e('Torrenters', 'hotbot'); ?></h4>
        <p><?php esc_html_e('Torrenting is a method of sharing files online. It uses peer-to-peer technology, which connects a network of computers to share content without relying on one single download source. Torrenting is an incredibly popular method of accessing digital media including movies, TV shows, and music. What many torrenters may not know is that they should use a VPN every time they want to download content.', 'hotbot'); ?></p>
        <p><?php esc_html_e('On the majority of sites that offer torrenting services (which serve more than 90% of torrenters), your activity is not kept anonymous. In fact, anyone with an internet connection and bittorrent client can trace all of your online activity, including your internet service provider. That activity can be logged and stored for years to come, and even given to other agencies. However, by using a VPN, you safely encrypt all of your activity so no one but you can see what you’re torrenting.', 'hotbot'); ?></p>
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Order Now', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-tor-users.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-tor-users.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/vpn-tor-users.png" class="b-radius-20 mb-5" alt="Tor Users" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <svg class="icon icon-60-solid"><use xlink:href="#tor-users"></use></svg>
        <h4 class="heading mb-4 mt-4"><?php esc_html_e('Tor Users', 'hotbot'); ?></h4>
        <p><?php esc_html_e('Many internet users interested in increasing their online privacy use Tor. Tor is a free software created by The Tor Project. Its purpose is to allow people to increase their anonymity online, bypass censorship, and communicate with like-minded individuals. The internet connection of anyone using Tor is encrypted and bounced between servers to keep it hidden from prying eyes. While Tor is generally regarded as a safe and private way of accessing the internet, there are benefits to using the service in combination with a VPN.', 'hotbot'); ?></p>
        <p><?php esc_html_e('While Tor is a generally safe service, it is possible for hacks to occur. Most of these hacks happen at the place where you enter Tor’s servers (called the entry node). If an entry node is compromised, hackers will be able to reveal your real IP address, thus compromising your privacy. In addition, using a virtual private network along with Tor prevents your internet service provider from knowing you have connected to Tor.', 'hotbot'); ?></p>  
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get Protection', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>

    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-public-wifi.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-public-wifi.jpg" type="image/jpg"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/vpn-public-wifi.jpg" class="b-radius-20 mb-5" alt="Public WIFI" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <svg class="icon icon-60-solid"><use xlink:href="#public-wifi"></use></svg>
        <h4 class="heading mb-4 mt-4"><?php esc_html_e('People Who Use Public Wifi', 'hotbot'); ?></h4>
        <p><?php esc_html_e('Perhaps you like to work in Starbucks on a regular basis, or maybe you just need to connect to public wifi for a split second because you’re out of data. Whatever the reason you use public wifi, you should always be aware that it is the least safe internet connection available to you. Because public wifi is seldom password protected, anyone on the network can see what everyone else does with just a little bit of computer wizardry. However, by using a VPN to encrypt your session, you make public wifi much safer for you and your devices.', 'hotbot'); ?></p>
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get Started', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-internet-using-humans.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-internet-using-humans.png" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/vpn-internet-using-humans.png" class="b-radius-20 mb-5" alt="Internet Users" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <svg class="icon icon-60-solid"><use xlink:href="#internet-using-humans"></use></svg>
        <h4 class="heading mb-4 mt-4"><?php esc_html_e('Internet Using Humans', 'hotbot'); ?></h4>
        <p><?php esc_html_e('If you are a human being and you use the internet, you should use a VPN. If you are a human being who doesn’t use the internet, we don’t really know how you made it to this web page. And if you’re a cat using the internet... well, we’re impressed. We’re very impressed.', 'hotbot'); ?></p>  
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get Hotbot VPN', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
      </div>
    </div>
  </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md" id="where">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-8 col-sm-6 col-md-10">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-where-when-use.webp" type="image/webp">
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/vpn-where-when-use.jpg" type="image/png"> 
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/vpn-where-when-use.png" class="b-radius-20 mb-5" alt="Where and When to use a VPN" >
            </picture>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h4 class="heading mb-4 mt-4"><?php esc_html_e('Where and When Should You Use a VPN?', 'hotbot'); ?></h4>
        <p><?php esc_html_e('There is a simple answer to the question of where and when you should use a virtual private network. Use a VPN every time you connect to the internet, be it through private wi-fi, public wi-fi, or cellular data, no matter where in the world you are. The time for privacy is always, the place for privacy is everywhere.', 'hotbot'); ?></p>
        <a href="/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Buy Now', 'hotbot'); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg>
          </span></a>
      </div>
    </div>
  </div>
</section>


<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center" id="why">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2 class="heading"><?php _e('Why Should You Use a <span>VPN?</span>', 'hotbot'); ?></h2>
            <p class="mb-5"><?php esc_html_e('VPNs are the most important tool internet users have to maintain complete privacy online. They protect you from the prying eyes of internet service providers, advertisers, governments, and hackers. In short, a virtual private network shields you from those dangers.', 'hotbot'); ?></p>
            
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/how-does-big-surveillance-impact-no-logs-policies.svg" alt="No Logs Policy"  />
                </div>
            </div>
        
            <h4 class="mt-5"><?php esc_html_e('In addition to protecting yourself', 'hotbot'); ?></h4>
            <p><?php esc_html_e('you should use a VPN to protect the world at large. In recent years, we’ve seen an increase in privacy breaches from a wide variety of organizations. These breaches have impacted millions. While some changes are beginning to be made surrounding the laws of privacy, the system we use to protect our global citizens is still antiquated when it comes to dealing with our rapidly changing technological landscape. It leaves citizens woefully unprotected from and unprepared for dangerous breaches.', 'hotbot'); ?></p>
            <p><?php esc_html_e('HotBot can’t change that system alone, but with the help of you and VPN users worldwide, we can call for greater change that has a lasting impact on how organizations view privacy.', 'hotbot'); ?></p>
        </div>  
    </div>
  </div>
</section>


<?php include 'inc/inc-security.php'; ?>

<?php include 'inc/inc-package-plan.php'; ?>

<?php include 'inc/inc-apps-link.php'; ?>

<?php get_footer();?>