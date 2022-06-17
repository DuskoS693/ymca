<?php
/**
 * Template Name: Gears Overview
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage adams
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <?php $hero_background = wp_get_attachment_image_src( get_field('hero_image'), '1920x900' ); ?>
    <div class="inner-page-hero" style="background-image: url(<?php echo $hero_background[0]; ?>);">
        <div class="container">
            <?php custom_breadcrumbs(); ?>
        </div>
        <?php if(get_field('hero_headline')) : ?>
        <div class="hero-inner">
            <div class="container">
                <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('hero_headline'); ?></h1>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="main-content" id="main-content">
        <div class="container">
            <?php if (get_field('gray_headline')) : ?>
            <section class="gray-block-section gray-block-innerpage">
                <div class="gray-block">
                    <div class="inner-box">
                        <h2><?php the_field('gray_headline'); ?></h2>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <?php if (get_field('entry_description')) : ?>
            <div class="entry page-entry">
                <h3><?php the_field('entry_description'); ?></h3>
            </div>
            <?php endif; ?>
            <?php if( have_rows('items') ) : ?>
            <div class="two-cols-images-wrapp">
                <?php while( have_rows('items') ) : the_row(); ?>
                <?php if ( get_sub_field('image') && get_sub_field('headline')) : ?>
                <a href="<?php the_sub_field('link'); ?>" class="img-item">
                    <?php $hero_background = wp_get_attachment_image_src( get_sub_field('image'), '1920x900' ); ?>
                    <div class="img-holder" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/img-background-1.jpg'); ?>);">
                        <div><img src="<?php echo $hero_background[0]; ?>"></div>
                    </div>
                    <div class="img-caption"><?php the_sub_field('headline'); ?></div>
                </a>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer();

