<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage adams
 * @since 1.0
 * @version 1.0
 */
?>
    <?php
    if ( !is_page_template( 'template-request-quote.php' ) && !is_page_template( 'template-join-our-team.php' ) ) : ?>
    <section class="pre-footer-section">
        <div class="container">
            <div class="title-holder">
                <?php if(get_field('pre_headline')) : ?>
                    <h2><?php the_field('pre_headline'); ?></h2>
                <?php elseif(get_field('pre_headline', 'option') && get_field('pre_headline') == ''): ?>
                        <h2><?php the_field('pre_headline', 'option'); ?></h2>
                <?php else: ?>
                    <h2>Ready to work with us?</h2>
                <?php endif; ?>
                <?php if(get_field('pre_subheadline')) : ?>
                    <h5><?php the_field('pre_subheadline'); ?></h5>
                <?php elseif(get_field('pre_subheadline', 'option') && get_field('pre_subheadline') == ''): ?>
                        <h5><?php the_field('pre_subheadline', 'option'); ?></h5>
                <?php else: ?>
                    <h5>Here are three simple ways to get in touch.</h5>
                <?php endif; ?>
            </div>
            <div class="icon-boxes-wrapper">
                <?php if(get_field('icon_box_1_tel', 'option')) : ?>
                    <?php $tel = get_field('icon_box_1_tel', 'option'); ?>
                <?php endif; ?>
                <a href="tel:<?php echo $tel; ?>" class="icon-boxes-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri('/assets/images/phone.svg'); ?>" alt="phone">
                    </div>
                    <?php if(get_field('icon_box_1_headline', 'option')) : ?>
                        <h4>
                            <?php the_field('icon_box_1_headline', 'option'); ?>
                            <span class="desc"><?php echo $tel; ?></span>
                        </h4>
                    <?php endif; ?>
                    <div class="go-to-link"><img src="<?php echo get_theme_file_uri('/assets/images/circle-arrow-right.svg'); ?>" alt="circle-arrow-right"></div>
                </a>

                <?php if(get_field('icon_box_2_email', 'option')) : ?>
                    <?php $mail = get_field('icon_box_2_email', 'option'); ?>
                <?php endif; ?>
                <a href="mailto:<?php echo $mail; ?>" class="icon-boxes-item">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri('/assets/images/envelope.svg'); ?>" alt="envelope">
                    </div>
                    <?php if(get_field('icon_box_2_headline', 'option')) : ?>
                        <h4>
                            <?php the_field('icon_box_2_headline', 'option'); ?>
                            <span class="desc"><?php echo $mail; ?></span>
                        </h4>
                    
                    <?php endif; ?>
                    <div class="go-to-link"><img src="<?php echo get_theme_file_uri('/assets/images/circle-arrow-right.svg'); ?>" alt="circle-arrow-right"></div>
                </a>
                <?php if(get_field('icon_box_3_link', 'option')) : ?>
                    <?php $link = get_field('icon_box_3_link', 'option'); ?>
                    <?php $link_url = $link['url']; ?>
                    <?php $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                <?php endif; ?>
                <a href="<?php echo $link_url; ?>" class="icon-boxes-item" target="<?php echo $link_target; ?>">
                    <div class="img-holder">
                        <img src="<?php echo get_theme_file_uri('/assets/images/pen.svg'); ?>" alt="pen">
                    </div>
                    <?php if(get_field('icon_box_3_headline', 'option')) : ?>
                        <h4>
                            <?php the_field('icon_box_3_headline', 'option'); ?>
                        </h4>
                    <?php endif; ?>
                    <div class="go-to-link"><img src="<?php echo get_theme_file_uri('/assets/images/circle-arrow-right.svg'); ?>" alt="circle-arrow-right"></div>
                </a>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <footer class="main-footer">
        <div class="inner-footer">
            <div class="container">
                <div class="top-footer">
                    <div class="left-col">
                        <?php if(get_field('contact_headline','option')) : ?>
                        <h5><?php the_field('contact_headline', 'option'); ?></h5>
                        <?php endif; ?>
                        <?php if( have_rows('items', 'option') ) : ?>
                        <address>
                            <div>
                                <a href="https://www.google.com/maps/place/8040+Chavenelle+Rd,+Dubuque,+IA+52002,+%D0%A1%D1%98%D0%B5%D0%B4%D0%B8%D1%9A%D0%B5%D0%BD%D0%B5+%D0%94%D1%80%D0%B6%D0%B0%D0%B2%D0%B5/@42.4920439,-90.7847408,17z/data=!3m1!4b1!4m13!1m7!3m6!1s0x87e33248862b334d:0xa41f9658c89b94d7!2zODA0MCBDaGF2ZW5lbGxlIFJkLCBEdWJ1cXVlLCBJQSA1MjAwMiwg0KHRmNC10LTQuNGa0LXQvdC1INCU0YDQttCw0LLQtQ!3b1!8m2!3d42.49204!4d-90.7825521!3m4!1s0x87e33248862b334d:0xa41f9658c89b94d7!8m2!3d42.49204!4d-90.7825521?hl=sr" target="_blank">
                                    <?php while ( have_rows('mitems', 'option' ) ) : the_row(); ?>
                                    <?php if(get_sub_field('description')) : ?>
                                    <?php the_sub_field('description'); ?>
                                    <?php endif; ?>
                                    <?php endwhile; ?>
                                    <span class="address-item">8040 Chavenelle Road</span>
                                    <span class="address-item">Dubuque, IA 52002</span>
                                </a>
                            </div>
                            <?php if(get_field('contact_description','option')) : ?>
                            <?php the_field('contact_description', 'option'); ?>
                            <?php endif; ?>
                        </address>
                        <?php endif; ?>
                    </div>
                    <div class="right-col">
                        <nav>
                            <?php if (has_nav_menu('footer')) :
                                wp_nav_menu( array(
                                    'theme_location'	=> 'footer',
                                    'menu_id'			=> false,
                                    'menu_class'		=> 'footer-nav no-style',
                                    'container'			=> false
                                ));
                            endif; ?>
                        </nav>
                    </div>
                </div>
                <div class="copyright">
                    &copy;<?php date('Y'); ?> The Adams Company. All rights reserved. | <a href="http://195.201.230.88/adams/terms-and-conditions/">Terms and Conditions</a>
                </div>
            </div>
        </div>
    </footer><!-- /.main-footer -->

</div><!-- /.page-wrap -->

<?php wp_footer(); ?>

</body>
</html>