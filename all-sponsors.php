<?php /* Template Name: All Sponsors */ ?>

<?php get_header(); ?>

<img src="<?php bloginfo( 'template_directory' ); ?>/images/sponsor-bg.jpg" class="ban-img">

<div class="container">
    <div class="sponsorship-all">
        <h1><?php the_field('page_title');?></h1>

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>

        <div class="sponsors-holder">
            <h3>Gold Sponsors</h3>
                <?php if( have_rows('gold_sponsorship_repeater') ): ?>
                <div class="flex">
                    <?php while(have_rows('gold_sponsorship_repeater')): the_row(); ?>
                        <div class="sponsors-holder-element">
                            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
                                <?php echo wp_get_attachment_image(get_sub_field('sponsor_logo'), 'full'); ?>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
        </div>

        <div class="sponsors-holder">
            <h3>Silver Sponsors</h3>
                <?php if( have_rows('silver_sponsorship_repeater') ): ?>
                <div class="flex">
                    <?php while(have_rows('silver_sponsorship_repeater')): the_row(); ?>
                        <div class="sponsors-holder-element">
                            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
                                <?php echo wp_get_attachment_image(get_sub_field('sponsor_logo'), 'full'); ?>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
        </div>

        <a href="<?php the_field('sponsor_brochure', 12); ?>" class="sponsor-download-cta" target="_blank">Download the LIDW2021 sponsorship pack</a>
    </div>
</div>

<?php get_footer(); ?>