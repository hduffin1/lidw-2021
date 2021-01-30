<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div class="home-banner">
    <div class="container">
        <div class="logo-details">
            <img src="<?php bloginfo( 'template_directory' ); ?>/images/LIDW-LOGO.svg" class="lidw-logo-large" alt="LIDW 2020 event hoempage logo large">
            <div class="underline"></div>

            <div class="details-holder flex">
                <a href="programme" class="home-cta">Event programme</a>
                <a href="<?php the_field('sponsor_brochure', 12); ?>" target="_blank" class="home-cta">Sponsorship opportunites</a>
            </div>

            <div class="details-holder">
                <h2>10 – 14 May 2021</h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="homepage-sponsor-carousel">
        <h2>LIDW2021 is proudly sponsored by</h2>
        <div class="sponsor-carousel">
            <?php if( have_rows('sponsor_carousel')): ?>
                <?php while(have_rows('sponsor_carousel')): the_row(); ?>
                    <div>
                        <?php echo wp_get_attachment_image(get_sub_field('logo'), 'full'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="welcome">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>