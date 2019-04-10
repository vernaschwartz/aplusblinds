<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscoretheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	 <!--Required Meta Tags-->
	 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Font awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
            crossorigin="anonymous">
        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
            crossorigin="anonymous">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,500|Noto+Serif+TC:500,600" rel="stylesheet">
		
		<!-- core CSS -->
		<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/animate.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/icomoon.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet">
		
		<!--CSS-->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<?php wp_head(); ?>
</head>
<body>
<!-- Standard Bootstrap Navigation -->
<nav class="navbar navbar-expand-md navbar-inverse navbar-dark fixed-top">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" class="img-fluid"></a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php
        wp_nav_menu([
            'menu'            => 'primary',
            'container'       => 'div',
            'container_id'    => 'bs4navbar',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav',
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
        ]);
    ?>
</nav>

