<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>

<img src="<?php bloginfo( 'template_directory' ); ?>/images/contact-bg-3.jpg" class="ban-img">


<div class="container">
    <div class="flex">
        <div class="contact-us">
            <h1><?php the_field('page_title'); ?></h1>

                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>

            <div class="event-contact-box">
                <h3><a href="https://www.lidw.co.uk">If your query is non-event related, please head to the LIDW website.</a></h3>
            </div>
        </div>

        <div class="contact-form">
            <?php the_field('contact_form');?>
        </div>
    </div>
</div>

<?php get_footer(); ?>