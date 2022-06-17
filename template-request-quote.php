<?php
/**
 * Template Name: Request a Quote
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
    <div class="page-background-img" style="background-image: url(<?php echo $hero_background[0]; ?>);">
        <div class="container">
            <?php custom_breadcrumbs(); ?>
            <div class="form-two-col-wrapper">
                <div class="form-holder wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <?php gravity_form( 2, true, true, false, '', false ); ?>
                </div>
                <div class="text-holder">
                    <?php if (get_field('hero_headline')) : ?>
                    <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('hero_headline'); ?></h1>
                    <?php endif; ?>
                    <?php if (get_field('hero_subheadline')) : ?>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s"><?php the_field('hero_subheadline'); ?></p>
                    <?php endif; ?>
                </div>
                
            </div>
        </div>
        
    </div>



<?php get_footer();
