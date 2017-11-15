<?php
/**
 * The header for the betprop theme
 *
 * This is the template that displays all of the <head> section and everything up until <body>
 *
 * @package BetProp
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Blog - Better Proposals</title>

    <!-- HEAD -->

    <link href="https://betterproposals.io/css/normalize-min.css" rel="stylesheet" type="text/css" />
    <link href="https://betterproposals.io/css/grid.css" rel="stylesheet" type="text/css" />
    <link href="https://betterproposals.io/css/style.css" rel="stylesheet" type="text/css" />

    <!-- Icons -->
    <link rel="shortcut icon" href="https://betterproposals.io/img/icons/favicon.png" type="image/x-icon">
    <link rel="icon" href="https://betterproposals.io/img/icons/favicon.png" type="image/x-icon">

    <!-- First Promoter -->
    <script type="text/javascript">
        (function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://cdn.firstpromoter.com/fprom.js',t.onload=t.onreadystatechange=function(){var t=this.readyState;if(!t||"complete"==t||"loaded"==t)try{$FPROM.init("d83zlqh9",".betterproposals.io")}catch(t){}};var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)})();</script>

    <link href="/wp-content/themes/betprop/style.css" rel="stylesheet" type="text/css" />
    <link rel="canonical" href="https://betterproposalstest.martabeveridge.uk" />
    <script src="https://use.typekit.net/ivt4obp.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.min.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
