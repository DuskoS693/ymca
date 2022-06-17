<?php
/**
 * The template used for displaying content single post
 */
?>

    <div class="main-content" id="main-content">
        <div class="container">
            <?php custom_breadcrumbs(); ?>
        </div>
        <div class="container">
            <div class="wp-wrap clearfix">
                <div class="wp-left pull-left grid-tl-nofloat">
                    <?php if ( have_posts() ) : ?>
                        <div id="content" class="post">
                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php if(has_post_thumbnail()): ?>
                                    <?php $image = get_the_post_thumbnail_url(get_the_ID(), '200x200') ?>
                                    <div class="post-img-holder">
                                        <img src="<?php echo $image; ?>" alt="<?php thumbnail_alt_text(['thumbnail_id' => $post->ID, 'echo' => true]); ?>">
                                    </div>
                                <?php endif; ?>
                                <div class="title">
                                    <h1 class="text-center"><?php the_title(); ?></h1>
                                </div>
                                <div class="entry"><?php the_content(); ?></div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
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
