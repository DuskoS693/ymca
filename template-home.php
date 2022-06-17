<?php
/**
 * Template Name: Home
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
    <div class="home-hero" style="background-image: url(<?php echo $hero_background[0]; ?>);">
        <div class="hero-inner">
            <div class="container">
                <?php if(get_field('hero_headline')) : ?>
                    <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('hero_headline'); ?></h1>
                <?php endif; ?>
                <?php if(get_field('hero_link') && get_field('hero_link_title')) : ?>
                <?php $link = get_field('hero_link'); ?>
                <?php $link_url = $link['url']; ?>
                <?php $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                <a href="<?php echo $link_url; ?>" class="learn-more-link wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s" target="<?php echo $link_target; ?>"><?php the_field('hero_link_title'); ?></a>
                <?php endif; ?>
            </div>
        </div>
        
    </div>

    <div class="main-content" id="main-content">
        <div class="container">
            <section class="gray-block-section gray-block-homepage">
                <div class="gray-block">
                    <div class="inner-box">
                        <?php if(get_field('main_description')) : ?>
                            <?php the_field('main_description'); ?>
                        <?php endif; ?>
                        <?php if(get_field('main_headline')) : ?>
                        <h5><?php the_field('main_headline'); ?></h5>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </div>
    </div>


<?php get_footer();
