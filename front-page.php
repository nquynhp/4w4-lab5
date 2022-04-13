<?php get_header() ?>
<main class="principal">
<h1>Les études en TIM</h1>
        <?php
        /******************************************* menu accueil */
                wp_nav_menu(array("menu"=> "menu_accueil",
                                "container" =>"nav"));
        ?>

        <?php
        /******************************************* menu evenement */
                wp_nav_menu(array("menu"=> "evenement",
                                "container" =>"nav"));
        ?>

        <!-- COEUR -->
        <div class="coeur"></div>
        <div class="coeur"></div>
        <div class="coeur"></div>
        <div class="coeur"></div>
        <div class="coeur"></div>

        <div style="width:50%;height:0;padding-bottom:40%;position:relative;"><iframe src="https://giphy.com/embed/xT0GqjBCkO9BEiSEOk" width="90%" height="90%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
    
        <?php if (have_posts()): the_post() ?>

        <?php the_title();  ?>
        <?php the_content(); ?>
        
        <?php endif ?>

        <?php the_post_thumbnail("thumbnail"); ?>
</main>
<?php get_footer() ?>