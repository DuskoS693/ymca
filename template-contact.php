<?php
/**
 * Template Name: Contact
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
    <?php $hero_background = wp_get_attachment_image_src( get_field('hero_background_image'), '1920x900' ); ?>
    <div class="page-background-img" style="background-image: url(<?php echo $hero_background[0]; ?>);">
        <div class="container">
            <?php custom_breadcrumbs(); ?>
            <section class="contact-section">
                <div class="contact-wrapper">
                    <div class="form-holder">
                        <?php gravity_form( 1, true, true, false, '', false ); ?>
                    </div>
                    <div class="text-holder">
                        <h1><?php the_title(); ?></h1>
                        <div class="address-wrapper">
                            <?php if (get_field('description')) : ?>
                            <div class="address-col">
                                <?php the_field('description'); ?>
                            </div>
                            <?php endif; ?>

                            <div class="address-col">
                                <?php if (get_field('phone')) : ?>
                                <strong>Phone:</strong> <?php the_field('phone'); ?><br>
                                <?php endif; ?>
                                <?php if (get_field('fax')) : ?>
                                <strong>Fax:</strong> <?php the_field('fax'); ?><br>
                                <?php endif; ?>
                                <?php if (get_field('email')) : ?>
                                <strong>Email:</strong> <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div>
                            <a href="/adams/join-our-team" class="btn-primary">Join our team</a>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
    <div class="main-content" id="main-content">
        <div class="contact-map" id="contact-map"></div>
    </div>

<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-2Wi4yooNayOqpWXiodGLUgzysDvI5mg&amp;callback=initMap"></script>
<script>
// google map



function initMap() {
    var map_center = {lat: 42.4919804, lng: -90.7827535};
    var map = new google.maps.Map(document.getElementById('contact-map'), {
      zoom: 8,
      center: map_center
    });
    var marker = new google.maps.Marker({
      position: map_center,
      map: map
    });

    google.maps.event.addDomListener(window, "resize", function() { 				
        var center = map.getCenter(); 				
        google.maps.event.trigger(map, "resize"); 				
        map.setCenter(center); 			
    });

}
</script>

<?php get_footer();

