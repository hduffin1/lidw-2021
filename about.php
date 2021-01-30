<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div class="about-banner"></div>

<div class="container">
    <div class="flex">
        <div class="about-content">
            <h1><?php the_field('page_title'); ?></h1>

                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
        </div>

        <div class="about-content-box">
            <?php the_field('about_lidw_box_title');?>
            <div class="about-lidw-figures flex">
                <?php the_field('about_lidw_figure_1');?>
                <?php the_field('about_lidw_figure_2');?>
            </div>
            <?php the_field('about_lidw_box_content');?>
        </div>
    </div>
</div>

<?php get_footer(); ?>