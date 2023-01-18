<?php
/* Template Name: Home page */

$geo = hb_get_geoinfo();
$value = ht_get_geo_currency($geo['country_code']);
setcookie("defCurrencyTest", $value, 0, '/');

get_header();
?>
    <script src="https://cdn.jsdelivr.net/npm/vue@legacy"></script>
    <script src="https://unpkg.com/axios@0.27.2/dist/axios.min.js"></script>
    <section class="layout-section text-align-center--md hero">
        <?php include 'inc/inc-header.php'; ?>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 order-md-1" id="app2">
                    <h1 class="heading mb-4"><?php esc_html_e('Security for your digital world.', 'hotbot' ); ?></h1>
                    
                    <?php /*<p class="legend mb-4"><span class="high-light"><?php echo sprintf( __( 'SAVE %s OFF 2 Years, PLUS+ 2 Years Free!', 'hotbot' ), '50%'); ?></span></p> */?>
                    <p class="legend mb-4"><span class="high-light"><?php echo sprintf( __( 'Special Offer: %s discount on 1 year of HotBot VPN', 'hotbot' ), '66%'); ?></span></p>
                    
                    <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
                    <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>

                    <ul class="listing mt-4 mt-md-5 mb-3">
                        <li class="center-sm align-items-center">
                            <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
                            <div class="listing__content">
                                <p><?php esc_html_e('30-day money-back guarantee', 'hotbot' ); ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 order-md-2">

                <div class="hero__app hidden <?php if ( !wp_is_mobile() ){ echo "desktop"; }?>" id="heroAppWrap">
                    <?php if ( wp_is_mobile() ) : ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/hero-device.png" width="300" height="608" class="device" alt="Mobile" />
                    <?php else : ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/index_hero_desktop.png" width="1258" height="723" class="device-desktop" alt="Desktop" />
                    <?php endif; ?> 
                    
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/hero-connect-app.svg" width="150" height="150" class="hero-connect-app" alt="Fast Connection" />
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/hero-settings-app.svg" width="150" height="150" class="hero-settings-app" alt="Settings" />
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/hero-cloud-app.svg" width="150" height="150" class="hero-cloud-app" alt="Cloud" />
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/hero-shield-app.svg" width="150" height="150" class="hero-shield-app" alt="Security" />
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/hero-signal-app.svg" width="150" height="150" class="hero-signal-app" alt="Signal" />
                </div>

                </div>
                <script>
                    let app2 = new Vue({
                        el: '#app2',
                        data:{
                            valueBtn: '$2.99',
                            allValue:{},
                            localValue:[]
                        },
                        async beforeCreate(){
                            let getAllPlans = '<?=config(HOTBOT_API_URL)?>v1/superadmin/getPlanLocalCurrency'; // production
                            try{
                                const allPlans2 = await axios.get(getAllPlans);
                                // console.log('allPlans',allPlans2);
                                let lcur2 = document.cookie
                                    .split('; ')
                                    .find(row => row.startsWith('defCurrencyTest'))
                                    .split('=')[1];
                                if(allPlans2.data){
                                    if(typeof allPlans2.data === "object"){
                                        if(Object.keys(allPlans2.data).includes('response')){
                                            if(allPlans2.data.response){
                                                this.allValue = allPlans2.data.response.plans ? allPlans2.data.response.plans : this.allValue;
                                                if(this.allValue[lcur2]){
                                                    let userLang2 = navigator.language || navigator.userLanguage;
                                                    let formatterCur = new Intl.NumberFormat(
                                                        userLang2,
                                                        {
                                                            style: "currency",
                                                            currency: lcur2
                                                        });
                                                    let gPlans = this.allValue[lcur2].sort((a, b) => b.planPrice - a.planPrice);
                                                    let btnVal = Math.round((gPlans[0].planPrice/36)*100)/100;
                                                    this.valueBtn = formatterCur.format(btnVal);

                                                }
                                            }
                                        }else{
                                            this.valueBtn = '$2.99';
                                        }
                                    }
                                }
                            }catch (e) {
                                console.log('err',e);
                                this.valueBtn = '$2.99';
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </section>

    <section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-8 col-sm-6 col-md-10">
                            <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/stable-connection.svg" width="553" height="711" class="layout-section__img" alt="Stable connection">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <h2 class="heading mb-5"><?php esc_html_e('Enjoy a fast and stable connection from anywhere.', 'hotbot' ); ?></h2>
                    <p class="mb-5"><?php esc_html_e('Connect up to 6 devices on one account. Protect your IP address
          and personal data. With our total privacy guarantee, no one can
          see which websites you visit or what files you download. Make use
          of our lightning fast servers in many countries around the world.
          With HotBot VPN, you are covered with one click, no matter where
          you are.', 'hotbot' ); ?></p>
                    <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
                </div>

            </div>
        </div>
    </section>

    <section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1">
                    <div class="row justify-content-center">
                        <div class="col-8 col-sm-6 col-md-10">
                            <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/secure-internet.svg" width="553" height="430" class="layout-section__img" alt="Secure internet">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <h2 class="heading mb-5"><?php esc_html_e('Private and secure internet access. Safe from hacking.', 'hotbot' ); ?></h2>
                    <p class="mb-5"><?php esc_html_e('HotBot VPN connects you to a hacker-proof, encrypted tunnel for
          all your internet activity. Browsing, streaming and downloading
          are all secure using our anonymous worldwide VPN network. Because
          we never track or log your internet data, it is hidden from
          everyone, even us. HotBot VPN protects your devices and data on
          public wi-fi. Securely connect to personal or work data while you
          travel. Are you exposed?', 'hotbot' ); ?></p>
                    <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
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
                            <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/internet-restrictions.svg" width="553" height="382" class="layout-section__img" alt="Internet restrictions">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="heading mb-5"><?php esc_html_e('Keep using the internet without restrictions.', 'hotbot' ); ?></h2>
                    <p class="mb-5"><?php esc_html_e('One of the top 10 things to bring on a vacation or business trip
          is a VPN. Whether you\'re a student studying or an employee working
          abroad, don\'t lose access to your favourite websites and
          entertainment content. Enjoy the freedom from censorship and data
          limits.', 'hotbot' ); ?></p>
                    <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
            <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
                </div>
            </div>
        </div>
    </section>



<?php include 'inc/inc-showcase.php'; ?>

<?php include 'inc/inc-user-testament.php'; ?>

<?php include 'inc/inc-guarantee.php'; ?>

<?php include 'inc/inc-package-plan.php'; ?>

<?php include 'inc/inc-apps-link.php'; ?>

<?php get_footer();?>
