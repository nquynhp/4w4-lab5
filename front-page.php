<?php get_header() ?>
<main class="principal">
<h1>Page d'accueil</h1>
        <!-- <section class="animation">
                <div>1</div> -->
                <!-- div.animation__bloc{$}*5 -->
                <!-- <div class="animation__bloc">1</div>
                <div class="animation__bloc">2</div>
                <div class="animation__bloc">3</div>
                <div class="animation__bloc">4</div>
                <div class="animation__bloc">5</div> -->
        <!-- </section> -->
        
        <?php
                wp_nav_menu(array("menu"=> "menu_accueil",
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
</main>
<?php get_footer() ?>