<?php /* Template Name: Register */ ?>

<?php get_header(); ?>

<img src="<?php bloginfo( 'template_directory' ); ?>/images/register-bg.jpg" class="ban-img">

<div class="container">
    <div class="register-content">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>

          <div class="reg-btn"> <a href="">Register Now</a></div>

            <div class="ticket-prices">
            <h2>Ticket Prices</h2>
            
            <div class="flex">
                <div class="ticket-price-holder">
                    <div class="main-conf">
                        <h3>Main conference</h3>
                        <h3 class="price">£300</h3>
                        <p>Early bird offer until 15.05.2020</p>
                    </div>

                    <div class="main-conf early-bird">
                        <h3>Main conference</h3>
                        <h3 class="price">£350</h3>
                        <p>Full price</p>
                    </div>
                </div>

                <div class="ticket-price-holder">
                    <div class="youngdr-conf">
                        <h3>Young lawyers DR conference</h3>
                        <h3 class="price">£75</h3>
                        <p>Early bird offer until 15.05.2020</p>
                    </div>

                    <div class="youngdr-conf early-bird">
                        <h3>Young lawyers DR conference</h3>
                        <h3 class="price">£100</h3>
                        <p>Full price</p>
                    </div>
                </div>
            </div>

            <div class="corp">
                <h3>Corporate in-house general counsel</h3>
                <h3 class="price">Complimentary</h3>
            </div>

            <p>Registration for any other events taking place during the week is separate – please contact each individual event organiser or visit their websites to register.
<br><br>
<i>Ticket prices are subject to a £10 booking fee and all prices are subject to VAT.</i></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>