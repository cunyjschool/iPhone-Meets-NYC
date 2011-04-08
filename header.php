<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/print.css" type="text/css" media="print" />
<!--[if IE]><link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/ie.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/ie-nav.css" type="text/css" media="screen, projection" /><![endif]-->
<?php if (is_home()) : ?>
<!--[if IE]><link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/no-scroll.css" type="text/css" media="screen, projection" /><![endif]-->
<?php endif; ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php if(is_home()) { ?>
<style type="text/css"> body {overflow: hidden;} </style>
<?php } ?>
<?php wp_head(); ?>
</head>
<body>

<?php if (is_home()) : ?>	
<div class="home">	
<?php else: ?>

<!-- Begin Interior Page Navigation -->
    <div class="container">
        <!-- Begin Masthead -->
        <div id="masthead">
        <h2><a href="<?php bloginfo('home'); ?>/" title="Home"><?php bloginfo('name'); ?></a></h2>
        <div class="description"><?php bloginfo('description'); ?></div> 
        <?php fullscreen_theme_nav(); ?>
        </div>
<?php endif; ?>