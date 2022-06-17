<?php
/**
 * The template used for displaying content post
 */
?>

    <div class="main-content" id="main-content">
        <div class="container">
            <?php custom_breadcrumbs(); ?>
        </div>
        <div class="container">
            <div class="wp-wrap clearfix">
                <div class="wp-left pull-left grid-tl-nofloat">
                    <?php if(is_home()) : ?>
                        <?php $page_for_posts = get_option( 'page_for_posts' ); ?>
                        <?php $background_image = get_the_post_thumbnail_url($page_for_posts, '200x200'); ?>
                        <?php if($background_image): ?>
                        <img src="<?php echo $background_image ; ?>" alt="<?php thumbnail_alt_text(['thumbnail_id' => $page_for_posts, 'echo' => true]); ?>">
                        <?php endif; ?>
                        <h1><?php wp_title(''); ?></h1>
                    <?php endif; ?>
                    <?php
                    if ( is_archive() ) : ?>
                        <h1><?php the_archive_title(); ?></h1>
                    <?php endif ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="post type-page">
                            <?php if(has_post_thumbnail()) : ?>
                                <?php $background_image = get_the_post_thumbnail_url($post->ID, '200x200') ?>
                                <div class="post-img-holder">
                                    <img src="<?php echo $background_image; ?>" alt="<?php thumbnail_alt_text(['thumbnail_id' => $post->ID, 'echo' => true]); ?>">
                                </div>
                            <?php endif; ?>
                            
                            <div class="entry">
                                <div class="category">Gears</div>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <div class="pagination pagination-full">
                        <?php the_posts_pagination( array(
                            'mid_size'  => 5,
                            'prev_text' => '«',
                            'next_text' => '»',
                        ) ); ?>
                    </div>
                </div>
                <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
                <div class="wp-right pull-right grid-tl-nofloat">
                    <aside>
                    <?php dynamic_sidebar( 'primary-sidebar' ); ?>
                    </aside>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>