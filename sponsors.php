<?php /* Template Name: Sponsors */ ?>

<?php get_header(); ?>

<img src="<?php bloginfo( 'template_directory' ); ?>/images/sponsor-bg.jpg" class="ban-img">

<div class="container">
    <div class="sponsorship">
    	<h1><?php the_field('page_title');?></h1>

    	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>

    	<div class="sponsorship-icons-holder">
    		<?php if( have_rows('sponsorship_content_icons') ): ?>
                <div class="flex">
                    <?php while(have_rows('sponsorship_content_icons')): the_row(); ?>
                        <div class="sponsorship-icons">
                            <?php echo wp_get_attachment_image(get_sub_field('sponsorship_icon')); ?>
                            <p><?php the_sub_field('sponsorship_icon_copy'); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
    	</div>

    	<div class="sponsors-additional-copy">
            <?php the_field('additional_copy'); ?>
            
        </div>   
        <a href="<?php the_field('sponsor_brochure', 12); ?>" class="sponsor-download-cta" target="_blank">Sponsorship opportunities</a>
    </div>

<?php get_footer(); ?>