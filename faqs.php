<?php /* Template Name: FAQs */ ?>

<?php get_header(); ?>

<img src="<?php bloginfo( 'template_directory' ); ?>/images/faq-bg2.jpg" class="ban-img">

<div class="container">
    <div class="faqs-content">
        <h1><?php the_field('page_title'); ?></h1>

        <div class="flex">
            <div class="faq-repeater-holder">
                <h2>General FAQs</h2>
                <?php if( have_rows('general_faqs') ): ?>
                    <?php while(have_rows('general_faqs')): the_row(); ?>
                        <button class="accordion">
                            <?php the_sub_field('faq_question'); ?>
                        </button>

                        <div class="panel">
                            <?php the_sub_field('faq_answer'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="faq-repeater-holder">
                <h2>Event FAQs</h2>
                <?php if( have_rows('event_faqs') ): ?>
                    <?php while(have_rows('event_faqs')): the_row(); ?>
                        <button class="accordion">
                            <?php the_sub_field('faq_question'); ?>
                        </button>

                        <div class="panel">
                            <?php the_sub_field('faq_answer'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="flex">
            <div class="faq-repeater-holder">
                <h2>Registration FAQs</h2>
                <?php if( have_rows('registration_faqs') ): ?>
                    <?php while(have_rows('registration_faqs')): the_row(); ?>
                        <button class="accordion">
                            <?php the_sub_field('faq_question'); ?>
                        </button>

                        <div class="panel">
                            <?php the_sub_field('faq_answer'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="faq-repeater-holder">
                <h2>Travel FAQs</h2>
                <?php if( have_rows('travel_faqs') ): ?>
                    <?php while(have_rows('travel_faqs')): the_row(); ?>
                        <button class="accordion">
                            <?php the_sub_field('faq_question'); ?>
                        </button>

                        <div class="panel">
                            <?php the_sub_field('faq_answer'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>