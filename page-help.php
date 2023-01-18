<?php /* Template Name: Help page */ ?>
<?php get_header();?>

<?php include 'inc/inc-header.php'; ?>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">
    <div class="container text-align-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="heading"><?php esc_html_e('Help', 'hotbot' ); ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 ">
  <div class="container">
    <div class="row text-align-center justify-content-center">
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/troubleshooting-now.svg" class="mt-5" />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Help Desk', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('Find solutions to questions you may have about your HotBot VPN account, connection, privacy, or billing. Info on how to troubleshoot problems with your connection.', 'hotbot' ); ?></p>
            <a href="https://help.hotbotvpn.com/" class="btn btn--primary btn--block-sm mt-3 mb-3"><span>Troubleshooting & F.A.Q</span></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/support-ticket.svg" class="mt-5" />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Create a Support ticket', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('Having issues? Create a support ticket and one of our friendly staff will get back to as soon as possible.', 'hotbot' ); ?>
            </p>
            <a href="https://help.hotbotvpn.com/hc/en-us/requests/new" class="btn btn--primary btn--block-sm mt-3 mb-3"><span><?php esc_html_e('Create a Support Ticket Now', 'hotbot' ); ?></span></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="row justify-content-center">
          <div class="col-9 col-sm-11">
            <div class="row justify-content-center">
              <div class="col-6 col-sm-7 col-md-5">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/set-up-hotbotvpn.svg" class="mt-5" />
              </div>
            </div>
            <h5 class="heading"><?php esc_html_e('Set up HotBotVPN', 'hotbot' ); ?></h5>
            <p><?php esc_html_e('Access our "How-To" section. Tips & information on how to setup, use & configure HotBot to get the most out of our VPN service.', 'hotbot' ); ?></p>
            <a href="/vpn-guides/" class="btn btn--primary btn--block-sm mt-3 mb-3"><span><?php esc_html_e('Read our VPN Guides', 'hotbot' ); ?></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php /*
<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-align-center">
        <h2 class="heading mb-5">Other ways to contact <span>HotBotVPN Support</span></h2>
      </div>
    </div>

    <div class="row text-align-center justify-content-center">
      <div class="col-sm-6 col-lg-4">
        
        <div class="card pl-5 pr-5 pb-5 pt-5 mt-5">
            <div class="row text-align-center justify-content-center">
                <div class="col-3 col-sm-4">
                    <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/send-a-email.svg" class="mb-3" />
                </div>
            </div>
            <h4>Send a Email:</h4>
            <a href="mailto:help@hotbotvpn.com" class="text-color-primary">help@hotbotvpn.com</a>
        </div>
        
      </div>
    </div>
  </div>
</section>

*/ ?>


<?php include 'inc/inc-package-plan.php'; ?>

<?php include 'inc/inc-apps-link.php'; ?>

<?php get_footer();?>