<?php /* Template Name: Login */ ?>

<?php get_header(); ?>

<div class="about-banner"></div>

<div class="container">
    <div class="login-wrapper">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>w