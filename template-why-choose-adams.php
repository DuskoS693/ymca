<?php
/**
 * Template Name: Why Choose Adams
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
        <?php if(get_field('hero_headline') && get_field('hero_underline')) : ?>
        <div class="hero-inner">
            <div class="container">
                <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('hero_headline'); ?><br><span class="underline"><?php the_field('hero_underline'); ?></span></h1>
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
                        <?php the_field('gray_headline'); ?>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <?php if (get_field('entry_description')) : ?>
            <div class="entry page-entry">
                <?php the_field('entry_description'); ?>
            </div>
            <?php endif; ?>
            <?php if (get_field('left_col_headline') && get_field('right_col_headline')) : ?>
            <div class="quallity-assurance-block wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="plus-sign-holder">
                    <div class="plus-sign"></div>
                </div>
                <div class="inner-wrapper">
                    <div class="left-col">
                        <?php the_field('left_col_headline'); ?>
                    </div>
                    <div class="right-col">
                        <?php the_field('right_col_headline'); ?>
                    </div>
                </div>
                
            </div>
            <?php endif; ?>
        </div>
    </div>


<?php get_footer();
