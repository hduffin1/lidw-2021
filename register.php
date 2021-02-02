<?php /* Template Name: Register */ ?>

<?php get_header(); ?>

<img src="<?php bloginfo( 'template_directory' ); ?>/images/register-bg.jpg" class="ban-img">

<div class="container">
    <div class="register-content">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>

          <div class="reg-btn"> <a href="https://eu.eventscloud.com/ereg/index.php?eventid=200218974&">Register Now</a></div>

            <div class="ticket-prices">
            <h2>Ticket Prices</h2>
            
            <div class="flex">
                <div class="ticket-price-holder">
                    <div class="main-conf">
                        <h3>Standard ticket</h3>
                        <h3 class="price">£160</h3>
                        <p>Early bird offer until 31.03.2021</p>
                    </div>

                    <div class="main-conf early-bird">
                        <h3>Main conference</h3>
                        <h3 class="price">£200</h3>
                        <p>Full price</p>
                    </div>
                </div>

                <div class="ticket-price-holder">
                    <div class="youngdr-conf">
                        <h3>Young lawyers</h3>
                        <h3 class="price">£120</h3>
                        <p>Early bird offer until 31.03.2021</p>
                    </div>

                    <div class="youngdr-conf early-bird">
                        <h3>Young lawyers</h3>
                        <h3 class="price">£150</h3>
                        <p>Full price</p>
                    </div>
                </div>
            </div>

            <div class="corp">
                <h3>Corporate in-house general counsel</h3>
                <h3 class="price">Complimentary</h3>
            </div>

            <p>Registration for any events outside of the main conference programme will need to be done separately and information regarding these can be found within the event programme. 
            <br><br>
            <i>Ticket prices are subject to a £10 booking fee and all prices are subject to VAT.</i></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>