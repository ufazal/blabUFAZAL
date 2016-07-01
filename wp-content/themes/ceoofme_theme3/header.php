<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php if (wp_version()=='21') language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


 <!--[if lte IE 7]>
   <link href="<?php bloginfo("home"); ?>/wp-content/themes/ceoofme_theme3/ceoofme_iefix.css" rel="stylesheet" type="text/css">
  <![endif]-->

<?php wp_head(); ?>
</head>

<body>

<!-- 
show static sidetab if javascript is off.
edit line 15 in footer.php for the scrolling sidetab
-->
<div id="logo" style="margin-bottom:40px; margin-top:30px"><h3><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name') ?></a><!--alternative color <a class="logoalt" href="<?php //echo get_settings('home'); ?>/"></a> --></h3></div>
<div id="wrap">