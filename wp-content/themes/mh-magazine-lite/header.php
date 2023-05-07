<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php if (is_singular() && pings_open(get_queried_object())) : ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">-->
<!--<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
<?php endif; ?>
	
	<!--<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">-->
	
<?php wp_head(); ?>
	
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-251665165-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-251665165-1');
</script>
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FHBTRSEYDN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FHBTRSEYDN');
</script>
	
</head>
<body id="mh-mobile" <?php body_class(); ?> itemscope="itemscope" itemtype="https://schema.org/WebPage">
	
	<header itemscope="itemscope" itemtype="https://schema.org/WPHeader">
	<div class="mh-site-identity">
		<div class="gggg">
			<div class="mh-container">
<div class="mh-site-logo" role="banner" itemscope="itemscope" itemtype="https://schema.org/Brand">
<a href="https://uzhgorod24.com" class="custom-logo-link" rel="home" aria-current="page"><img width="398" height="96" src="https://uzhgorod24.com/wp-content/uploads/2022/08/uz24-logo_398x69.png" class="custom-logo" alt="uzhgorod24" srcset="https://uzhgorod24.com/wp-content/uploads/2022/08/uz24-logo_398x69.png 398w, https://uzhgorod24.com/wp-content/uploads/2022/08/uz24-logo_398x69.png 300w" sizes="(max-width: 398px) 100vw, 398px"></a></div>
<!-- https://uzhgorod24.com/wp-content/uploads/2022/07/cropped-cropped-24logo.png -->

<div class="mh-main-nav-wrap">
		<nav class="mh-navigation mh-main-nav mh-container mh-container-inner mh-clearfix" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
			<?php wp_nav_menu(array('theme_location' => 'main_nav')); ?>
		</nav>
	</div></div></div></div>
		</header>
<?php wp_body_open(); ?>
<?php mh_before_header();
get_template_part('content', 'header');
mh_after_header(); ?>