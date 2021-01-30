<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<img src="<?php bloginfo( 'template_directory' ); ?>/images/agenda-bg.jpg" class="ban-img">


<div class="container">
    <div class="agenda-single">
    	<a href="programme" class="back-btn">Go back</a>
        <h1><?php the_title();?></h1>

        <?php if( have_rows('member_events_repeater') ): ?>
            <?php while(have_rows('member_events_repeater')): the_row(); ?>
                <div class="agenda-content">
                    <?php the_sub_field('content');?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <h2 class="date-time"><?php the_field('date_and_time');?></h2>
        <h3><?php the_field('hosts_title');?></h3>
        <?php the_field('hosts_content');?>
        <h3><?php the_field('session_description_title');?></h3>
        <?php the_field('session_description_content');?>
        <?php the_field('add_to_calendar');?>
    </div>
</div>

<?php
get_footer();
