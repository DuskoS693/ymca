<?php
/**
 * The template used for displaying page content in page.php
 *
 */
?>

<?php while(have_posts()) : the_post(); ?>
    
    <div class="wp-wrap container clearfix" id="main-content">
        <div class="container">
        <?php custom_breadcrumbs(); ?>
            <?php $image = get_the_post_thumbnail_url(get_the_ID(), '200x200') ?>
            <?php if($image): ?>
                <img src="<?php echo $image; ?>" alt="<?php thumbnail_alt_text(['thumbnail_id' => $post->ID, 'echo' => true]); ?>">
            <?php endif; ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; ?>
