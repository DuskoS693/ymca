<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div class="home-hero">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Adams
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSS -->
    <?php wp_head(); ?>
</head>
<?php if(is_home()) : ?>
<body <?php body_class('home-page'); ?>>
<?php else : ?>
<body <?php body_class(); ?>>
<?php endif; ?>
<div class="page-wrap">

    <header class="main-header">
        <div class="container">
            <a href="<?php echo get_option("siteurl"); ?>" class="logo"><img src="<?php echo get_theme_file_uri('/assets/images/logo.svg'); ?>" alt="logo"></a>
            <a href="#" class="menu-button"><span></span></a>
            <nav class="main-nav">
                <?php if (has_nav_menu('top')) :
                    wp_nav_menu( array(
                        'theme_location'	=> 'top',
                        'menu_id'			=> false,
                        'menu_class'		=> 'nav-menu no-style',
                        'container'			=> false
                    ));
                endif; ?>
            </nav>
        </div>
    </header>
    <div class="top-space"></div>