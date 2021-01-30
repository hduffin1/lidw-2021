
<footer>
  <div class="footer container">
    <div class="flex">

      <div class="fe-footer-details">
        <div class="flex">
          <p>Designed by First Event 2020</p>
          <a href="https://www.firstevent.co.uk/privacy-policy" target="_blank"><p>Privacy Policy</p></a>
          <a href="https://www.firstevent.co.uk/terms-and-conditions" target="_blank"><p>Terms & Conditions</p></a>
        </div>
      </div>

      <div class="footer-social-media">
        <div class="flex">
          <a href="https://twitter.com/LIDW_" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/twitter.svg" alt="twitter icon"></a>

          <a href="https://www.linkedin.com/company/35454241/admin/" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/linkedin.svg" alt="linkedin icon"></a>

          <a href="https://www.youtube.com/channel/UClYlWViyi4yoF7I90tnoMYw/about"><img src="<?php bloginfo( 'template_directory' ); ?>/images/youtube.svg"></a>
          <a href="<?php the_permalink(); ?>/register/" class="reg-btn">Register</a>
        </div>
      </div>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/nav.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/slick.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/dropdown.js"></script>

    <script type="text/javascript"> // slick carousel
        $('.sponsor-carousel').slick({ //add in your correct containing element
            slidesToShow: 4,
            prevArrow:"<img class='a-left control-c prev slick-prev left' src='<?php bloginfo('template_directory'); ?>/images/left.svg'>",
            nextArrow:"<img class='a-right control-c next slick-next right' src='<?php bloginfo('template_directory'); ?>/images/right.svg'>",
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>

</body>
</html>