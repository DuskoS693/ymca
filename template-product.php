<?php
/**
 * Template Name: Product
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
    <div class="main-content">
        <div class="container">
            <?php custom_breadcrumbs(); ?>
            <?php if(get_field('main_headline')) : ?>
            <h1><?php the_field('main_headline') ?></h1>
            <?php endif; ?>
            <div class="gray-block gray-block-small">
                <div class="inner-box">
                    <?php if(get_field('main_description')) : ?>
                        <?php the_field('main_description') ?>
                    <?php endif; ?>
                </div>
            </div>

            <section class="specification-section">
                <?php if(get_field('specification_headline')) : ?>
                <div class="title-holder">
                    <h3><?php the_field('specification_headline') ?></h3>
                </div>
                <?php endif; ?>
                <div class="specification-wrapper">
                    <div class="secification-inner">
                        <?php if(get_field('box_1_image') && get_field('box_1_headline') && get_field('box_1_subheadline')) : ?>
                        <div class="spec-img-col">
                            <?php $image = wp_get_attachment_image_src( get_field('box_1_image'), '1240x700' ); ?>
                            <div class="img-holder">
                                <img src="<?php echo $image[0]; ?>" alt="<?php thumbnail_alt_text(['thumbnail_id' => get_field('box_1_image'), 'echo' => true]); ?>">
                            </div>
                            <div class="text-holder">
                                <h4><?php the_field('box_1_headline'); ?></h4>
                                <h3><?php the_field('box_1_subheadline'); ?></h3>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(get_field('box_2_image')) : ?>
                        <div class="spec-arrow-col-mobile">
                            <img src="<?php echo get_theme_file_uri('/assets/images/arrow-two-sided-vertical.svg'); ?>" alt="arrow-two-sided-vertical">
                        </div>
                        <?php endif; ?>
                        <div class="spec-img-col">
                            <?php $image = wp_get_attachment_image_src( get_field('box_2_image'), '1240x700' ); ?>
                            <div class="img-holder">
                                <img src="<?php echo $image[0]; ?>" alt="<?php thumbnail_alt_text(['thumbnail_id' => get_field('box_2_image'), 'echo' => true]); ?>">
                            </div>
                            <div class="text-holder">
                                <h4><?php the_field('box_2_headline'); ?></h4>
                                <h3><?php the_field('box_2_subheadline'); ?></h3>
                            </div>
                        </div>
                        <?php ?>
                    </div>
                    <?php if(get_field('box_2_image')) : ?>
                    <div class="spec-arrow-col-desktop">
                        <img src="<?php echo get_theme_file_uri('/assets/images/arrow-two-sided.svg'); ?>" alt="arrow-two-sided">
                    </div>
                    <?php endif; ?>
                </div>

            </section>

        </div>

        <section class="main-slider-section">
            <div class="container">
                <div class="title-holder">
                    <?php if(get_field('main_slider_headline')) : ?>
                    <h3><?php the_field('main_slider_headline'); ?></h3>
                    <?php endif; ?>
                </div>
            </div>
            <?php if( have_rows('main_items' ) ) : ?>
            <div class="main-slider">
            <?php while ( have_rows('main_items' ) ) : the_row(); ?>
                <div class="main-slider-item">
                    <?php $image = wp_get_attachment_image_src(get_sub_field('image'),'1240x700'); ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php thumbnail_alt_text(['thumbnail_id' => get_sub_field('image'), 'echo' => true]); ?>">
                    <?php if(get_sub_field('description')): ?>
                    <div class="subtitle"><?php the_sub_field('description') ?></div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </section>
    </div>


<?php get_footer();
