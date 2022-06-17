<?php
/**
 * Template Name: Capabilites
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
    <div class="main-content" id="main-content">
        <div class="container">
        <?php custom_breadcrumbs(); ?>
            
        <h1><?php the_title(); ?></h1>
            
        <section class="gray-block-section">
            <div class="gray-block">
                <div class="inner-box">
                    <?php if(get_field('headline')): ?>
                    <h3><?php the_field('headline'); ?></h3>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="product-boxes-section">
            <div class="product-boxes-wrapper">

                <a href="<?php the_field('product_box_1_link'); ?>" class="product-box-item">
                    <?php if(get_field('product_box_1_image')): ?>
                    <div class="img-holder">
                        <?php $image = wp_get_attachment_image_src( get_field('product_box_1_image'), '200x200' ); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php thumbnail_alt_text([ 'thumbnail_id' => get_field('product_box_1_image'), 'echo' => true]); ?>">
                    </div>
                    <?php endif; ?>
                    <?php if(get_field('product_box_1_headline')): ?>
                    <h4><?php the_field('product_box_1_headline'); ?></h4>
                    <?php endif; ?>
                </a>

                <a href="<?php the_field('product_box_2_link'); ?>" class="product-box-item">
                    <?php if(get_field('product_box_2_image')): ?>
                    <div class="img-holder">
                        <?php $image = wp_get_attachment_image_src( get_field('product_box_2_image'), '200x200' ); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php thumbnail_alt_text([ 'thumbnail_id' => get_field('product_box_2_image'), 'echo' => true]); ?>">
                    </div>
                    <?php endif; ?>
                    <?php if(get_field('product_box_2_headline')): ?>
                    <h4><?php the_field('product_box_2_headline'); ?></h4>
                    <?php endif; ?>
                </a>

                <a href="<?php the_field('product_box_3_link'); ?>" class="product-box-item">
                    <?php if(get_field('product_box_3_image')): ?>
                    <div class="img-holder">
                        <?php $image = wp_get_attachment_image_src( get_field('product_box_3_image'), '200x200' ); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php thumbnail_alt_text([ 'thumbnail_id' => get_field('product_box_3_image'), 'echo' => true]); ?>">
                    </div>
                    <?php endif; ?>
                    <?php if(get_field('product_box_3_headline')): ?>
                    <h4><?php the_field('product_box_3_headline'); ?></h4>
                    <?php endif; ?>
                </a>

            </div>
        </section>
        <?php if(get_field('entry_description')): ?>
        <div class="entry page-entry">
            <?php the_field('entry_description'); ?>
        </div>
        <?php endif; ?>
        </div>
    </div>


<?php get_footer();