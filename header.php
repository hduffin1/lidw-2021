<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="London Disputes Week - Event 2020">
    <title>London Disputes Week - Event 2021 | <?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/sass/slick-theme.css" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/sass/slick.css" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/sass/css.css?v=23457" />
    <script>(function(H){H.className=H.className+="js"})(document.documentElement)</script>
</head>

<body>
<header class="page-header">
    <div class="container">
        <div class="flex">
        <a href="<?php the_permalink(); ?>/home/"><img src="<?php bloginfo( 'template_directory' ); ?>/images/LIDW2021.svg" class="header-logo" alt="LIDW event navigation website logo"/></a>
            <nav class="nav">
            <a class="skip" href="#menu">Menu</a>
                <ul id="menu">
                    <li><a href="<?php the_permalink(); ?>/home/">Home</a></li>
                    <li><a href="<?php the_permalink(); ?>/programme/">Event programme</a></li>

                    <div class="dropdown">
                        <button class="dropbtn">Sponsors<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="dropdown-arrow" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg></button>

                        <div class="dropdown-content">
                            <a href="<?php the_permalink(); ?>/all-sponsors/">Our sponsors</a>
                        	<a href="<?php the_field('sponsor_brochure', 12); ?>" target="_blank">Sponsorship opportunities</a>
                        </div>
                    </div>

                    <li><a href="<?php the_permalink(); ?>/contact-us/">Contact LIDW</a></li>

                    <div class="dropdown">
                        <button class="dropbtn">Social media<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="dropdown-arrow" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg></button>

                        <div class="dropdown-content">
                            <a href="https://lidw.co.uk/blog/" target="_blank">Blog</a>
                            <a href="https://lidw.co.uk/social-media/" target="_blank">Social media feeds</a>
                            <div class="flex">
                            <a href="https://twitter.com/LIDW_"><img src="<?php bloginfo( 'template_directory' ); ?>/images/twitter-white.svg" class="nav-icon"></a>
                            <a href="https://www.linkedin.com/company/35454241/"><img src="<?php bloginfo( 'template_directory' ); ?>/images/linkedin-white.svg" class="nav-icon"></a>
                            <a href="https://www.youtube.com/channel/UClYlWViyi4yoF7I90tnoMYw/about"><img src="<?php bloginfo( 'template_directory' ); ?>/images/youtube-white.svg" class="nav-icon"></a>
                        </div>
                        </div>

                    </div>

                    <li><a href="https://lidw.co.uk/become-a-member/">LIDW Membership</a></li>
                    <li class="reg-btn"><a href="<?php the_permalink(); ?>/register/">Register</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
