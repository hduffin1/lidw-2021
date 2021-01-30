<?php /* Template Name: Agenda */ ?>

<?php get_header(); ?>

<img src="<?php bloginfo( 'template_directory' ); ?>/images/agenda-bg.jpg" class="ban-img">

<div class="container">
    <div class="agenda">
        <h1><?php the_field('page_title'); ?></h1>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</div>

<div class="container">
    <!-- TAB CONTROLLERS -->
<input id="panel-1-ctrl" class="panel-radios" type="radio" name="tab-radios" checked>
<input id="panel-2-ctrl" class="panel-radios" type="radio" name="tab-radios">
<input id="panel-3-ctrl" class="panel-radios" type="radio" name="tab-radios">
<input id="panel-4-ctrl" class="panel-radios" type="radio" name="tab-radios">
<input id="panel-5-ctrl" class="panel-radios" type="radio" name="tab-radios">
<input id="nav-ctrl" class="panel-radios" type="checkbox" name="nav-checkbox">

<!-- TABS LIST -->
<ul id="tabs-list">
    <!-- MENU TOGGLE -->
    <label id="open-nav-label" for="nav-ctrl"></label>
    <li id="li-for-panel-1"><label class="panel-label" for="panel-1-ctrl">10 May</label></li>
    <li id="li-for-panel-2"><label class="panel-label" for="panel-2-ctrl">11 May</label></li>
    <li id="li-for-panel-3"><label class="panel-label" for="panel-3-ctrl">12 May</label></li>
    <li id="li-for-panel-4"><label class="panel-label" for="panel-4-ctrl">13 May</label></li>
    <li id="li-for-panel-5" class="last"><label class="panel-label" for="panel-5-ctrl">14 May</label></li>
    <label id="close-nav-label" for="nav-ctrl">Close</label>
</ul>

<!-- THE PANELS -->
<article id="panels">
  <div class="container">
    <section id="panel-1">
      <main>
        <h2>Monday 10 May 2021</h2>
        <?php if( have_rows('day_1') ): ?>
            <?php while(have_rows('day_1')): the_row(); ?>
                <div class="agenda-content" style="background-color:<?php the_sub_field('bg_colour');?> ">
                    <div class="flex">
                        <div class="time">
                            <h3 class=""><?php the_sub_field('time');?></h3>
                        </div>
                        <div class="title">
                            <a href="<?php the_sub_field('page_link');?>">
                            <h3><?php the_sub_field('title');?></h3>
                            </a>
                            <?php the_sub_field('description');?>
                        </div>
                    
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <section id="panel-2">
      <main>
        <h2>Tuesday 11 May 2021</h2>
        <?php if( have_rows('day_2') ): ?>
            <?php while(have_rows('day_2')): the_row(); ?>
                <div class="agenda-content" style="background-color:<?php the_sub_field('bg_colour');?> ">
                    <div class="flex">
                        <div class="time">
                            <h3 class=""><?php the_sub_field('time');?></h3>
                        </div>
                        <div class="title">
                            <a href="<?php the_sub_field('page_link');?>">
                            <h3><?php the_sub_field('title');?></h3>
                            </a>
                            <?php the_sub_field('description');?>
                        </div>
                    
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </main>
    </section>

    <section id="panel-3">
      <main>
        <h2>Wednesday 12 May 2021</h2>
        <?php if( have_rows('day_3') ): ?>
            <?php while(have_rows('day_3')): the_row(); ?>
                <div class="agenda-content" style="background-color:<?php the_sub_field('bg_colour');?> ">
                    <div class="flex">
                        <div class="time">
                            <h3 class=""><?php the_sub_field('time');?></h3>
                        </div>
                        <div class="title">
                            <a href="<?php the_sub_field('page_link');?>">
                            <h3><?php the_sub_field('title');?></h3>
                            </a>
                            <?php the_sub_field('description');?>
                        </div>
                    
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </main>
    </section>

    <section id="panel-4">
      <main>
        <h2>Thursday 13 May 2021</h2>
        <?php if( have_rows('day_4') ): ?>
            <?php while(have_rows('day_4')): the_row(); ?>
                <div class="agenda-content" style="background-color:<?php the_sub_field('bg_colour');?> ">
                    <div class="flex">
                        <div class="time">
                            <h3 class=""><?php the_sub_field('time');?></h3>
                        </div>
                        <div class="title">
                            <a href="<?php the_sub_field('page_link');?>">
                            <h3><?php the_sub_field('title');?></h3>
                            </a>
                            <?php the_sub_field('description');?>
                        </div>
                    
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </main>
    </section>

    <section id="panel-5">
      <main>
        <h2>Friday 14 May 2021</h2>
        <?php if( have_rows('day_5') ): ?>
            <?php while(have_rows('day_5')): the_row(); ?>
                <div class="agenda-content" style="background-color:<?php the_sub_field('bg_colour');?> ">
                    <div class="flex">
                        <div class="time">
                            <h3 class=""><?php the_sub_field('time');?></h3>
                        </div>
                        <div class="title">
                            <a href="<?php the_sub_field('page_link');?>">
                            <h3><?php the_sub_field('title');?></h3>
                            </a>
                            <?php the_sub_field('description');?>
                        </div>
                    
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </main>
    </section>
  </div>
</article>
</div>

<?php get_footer(); ?>