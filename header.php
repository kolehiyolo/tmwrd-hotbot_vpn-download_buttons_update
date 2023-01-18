<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hotbot
 */
// hb_ensure_nats_cookies();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <?php
    include 'inc/inc-tune.php';
    $requri = $_SERVER['REQUEST_URI'] ?? "";
    if (strpos($requri, 'confirmation') === false) : ?>
        <!-- BEGIN CJ TRACKING CODE -->
        <script type='text/javascript'>
            if (!window.cj) window.cj = {};
            cj.sitePage = {
                enterpriseId: '<?=config(CJ_ENTERPRISE_ID)?>',
                pageType: 'homepage',
                userId: '',
                emailHash: '',
                referringChannel: hasCJ ? 'Affiliate' : 'Direct_Navigation'
            };
        </script>
        <script type='text/javascript'>
            (function(a,b,c,d){
                a='https://www.mczbf.com/tags/<?=config(CJ_TAG_ID)?>/tag.js';
                b=document;c='script';d=b.createElement(c);d.src=a;
                d.type='text/java'+c;d.async=true;
                d.id='cjapitag';
                a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a)
            })();
        </script>
        <!-- END CJ TRACKING CODE -->
	<?php endif; ?>


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<?php if (is_page_template( 'page-order-app.php' ) ) : ?>
	<meta name="robots" content="noindex">
	<?php endif; ?>

	<!-- TrustBox script -->
	<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
	<!-- End TrustBox script -->

	<?php
		if (preg_match("#^/($|\?|blog($|\?|/))#", $requri)) {
			echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6222298804642104" crossorigin="anonymous"></script>'."\n";
		}
		wp_head();
	?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<main class="main">
	<div class="svg-sprite" id="svg-icons"></div>
	
	<?php
	if (!is_page_template( 'page-order-tpl.php' ) ) :
		if (get_field('ribbon_toggle', 'option') == 'show' ) {
			include 'inc/inc-ribbon.php';
		} else if( get_field('ribbon_toggle', 'option') == 'main' ) {
			include 'inc/inc-ribbon.php';
		}
	endif;

	

	
	

	

