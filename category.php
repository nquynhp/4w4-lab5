<?php get_header() ?>
<main class="principal">
    <h1>----- category.php -----</h1>
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
                    $categories = get_the_category();
                    // var_dump($categories);
                    // echo $categories[1] -> slug;
                ?>
                <article class="formation__cours <?php echo $categories[1] -> slug; ?>">
                        <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 7, -6);
                        $nbHeures = substr($titre, -6);
                        $sigleCours = substr($titre, 0, 7);
                        $descCours = get_the_excerpt();
                        ?>
                        <a href="<?php the_permalink(); ?>"> <?php echo $titreFiltreCours ?></a>
                        <h3 class="cours__titre"> <?= $titreFiltreCours; ?></h3>
                        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                        <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <p class="cours__desc"> <?= $descCours; ?></p>
                    </article>
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>