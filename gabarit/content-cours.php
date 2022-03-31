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