<?php get_header() ?>
<main class="principal">
    <h1>----- category.php -----</h1>
    <?php  ?>
    <sction class="formation"></sction>
    <?php wp_nav_menu(array(
                "menu"=>"categorie_cours",
                "container"=>"nav"
    )) ?>

    <h1>Liste des cours</h1>
    <!-- le fichier doit exactement comme spécifier dans wordpress, soit category-cours(nom de catégorie) -->
    <section class="formation">
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>

                <?php 
                    if(is_category(array('cours', 'creation-3d', 'web', 'jeu', 'design', 'video', 'utilitaire'))):
                        get_template_part('gabarit/content', 'cours');
                    else:
                        get_template_part('gabarit/content', 'macrame');
                    endif; ?>
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>