<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage adams
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="main-content" id="main-content">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </div>

<?php get_footer();
