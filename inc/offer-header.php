<?php
/**
 * The header for offers
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
    <?php include 'inc-tune.php'; ?>
	<?php if (strpos($_SERVER['REQUEST_URI'], 'confirmation') === false) : ?>
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

    <script>
		dataLayer = [];
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="theme-color" content="#ffffff">
	<title>Hotbot VPN: <?php wp_title('', true, 'left'); ?></title> 

    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/offers/<?php echo esc_html( $template ); ?>/assets/css/style.css"/>
    <script src="<?php bloginfo('template_url'); ?>/offers/<?php echo esc_html( $template ); ?>/assets/js/common.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" id="jquery-js"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<main class="main landerMain">
	<div class="svg-sprite" id="svg-icons"></div>


    
