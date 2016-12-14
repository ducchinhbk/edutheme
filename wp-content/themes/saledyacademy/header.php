<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?></title>
    <?php if( is_single() ){?>
        <meta name="description" content="<?php echo get_the_excerpt(); ?>"/>
        <meta name="keywords" content="<?php echo get_tag_keyword(); ?>"/>
        <meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
        <meta property="og:title" content="<?php echo get_the_title(); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo get_the_permalink(); ?>" />
        <meta property="og:image" content="<?php echo get_bg_image( get_the_ID() ); ?>" />
    <?php } else{?>
        <meta name="description" content="<?php bloginfo('name'); ?>"/>
        <meta name="keywords" content="<?php bloginfo('keyword'); ?>"/>
		<meta property="og:site_name" content="SALEDYMEDIA.COM"/>
		<meta property="og:description" content="<?php bloginfo('name'); ?>" />
        <meta property="og:title" content="<?php bloginfo('name'); ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo site_url(); ?>" />
        <meta property="og:image" content="<?php echo site_url(); ?>/wp-content/themes/uplabmedia/images/hero-img9.jpg" />
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png"/>
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png"/>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700" rel="stylesheet" type="text/css"/>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
		<![endif]-->
    <?php wp_head(); ?>
    <style>html{margin-top: 0 !important;}</style>
    </head>
   