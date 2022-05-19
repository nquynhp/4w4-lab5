<?php get_header() ?>
<main class="site__main">
<h1>Les études en TIM</h1>

        <h2>Les études en TIM</h2>
        <?php
        /******************************************* menu accueil */
                wp_nav_menu(array("menu"=> "menu_accueil",
                                "container" =>"nav"));
        ?><br>

        <h2>Les événements cette année</h2>
        <?php
        /******************************************* menu evenement */
                wp_nav_menu(array("menu"=> "evenement",
                                "container" =>"nav"));
        ?><br>

        <h2>Les ateliers à venir</h2>
        <?php
        /******************************************* menu atelier */
                wp_nav_menu(array("menu"=> "ateliers",
                                "container" =>"nav"));
        ?>

        <!-- COEUR -->
        <div class="coeur"></div>
        <!-- <div class="coeur"></div>
        <div class="coeur"></div>
        <div class="coeur"></div>
        <div class="coeur"></div> -->

        <div style="width:50%;height:0;padding-bottom:40%;position:relative;"><iframe src="https://giphy.com/embed/xT0GqjBCkO9BEiSEOk" width="90%" height="90%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
    
        <?php if (have_posts()): the_post() ?>
                <h1><?php the_title();  ?></h1>
                        <?php the_content(); ?>
        <?php endif ?>

        <?php the_post_thumbnail("thumbnail"); ?>
</main>
<?php get_footer() ?>