<?php /* Template Name: Social Media */ ?>

<?php get_header(); ?>

<img src="<?php bloginfo( 'template_directory' ); ?>/images/contact-bg.jpg" class="ban-img">

<div class="container">
	<div class="social-content">
		<h1><?php the_field('page_title'); ?></h1>
        <h2>Twitter</h2>
            <a class="twitter-timeline" href="https://twitter.com/LIDW_?ref_src=twsrc%5Etfw">Tweets by LIDW_</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div>
</div>

<?php get_footer(); ?>