<?php
/**
 * Template name: Atelier
 *
 * @package WordPress
 * @subpackage cidw_4w4
 */

?>

<?php get_header() ?>
<main class="site__main">

<h1> --------- Template Atelier --------- </h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>

        <!-- Description de l'atelier -->
        <section class="atelier__description">
            <h2>Description de l'atelier</h2><?php the_field('description_de_l’atelier_'); ?>   
        </section>

        <!-- L'animateur responsable de l'atelier -->
        <p class="atelier__animateur">
        L'animateur de l'atelier : <?php the_field('animateur'); ?>   
        </p>

        <!-- Date de début de l'atelier -->
        <p class="atelier__dateDebut">
        Date de début : <?php the_field('date_de_debut_de_l’atelier_'); ?>   
        </p>

        <!-- Date de fin de l'atelier -->
        <p class="atelier__dateFin">
        Date de fin : <?php the_field('date_de_fin_de_l’atelier_'); ?>   
        </p>

        <!-- Les jours de la semaine lorsqu'il y a l'atelier -->
        <p class="atelier__joursSemaine">
        La formation se donnera : <?php the_field('jours_de_la_semaine_de_l’atelier_'); ?>   
        </p>

        <!-- Quand l'atelier débute -->
        <p class="atelier__heureDebut">
        L'heure de début : <?php the_field('heure_de_debut_'); ?>   
        </p>

        <!-- Quand l'atelier se termine -->
        <p class="atelier__heureFin">
        L'heure de fin : <?php the_field('heure_de_fin'); ?>   
        </p>

        <!-- La durée de l'atelier -->
        <p class="atelier__duree">
        Durée de chacune des séances est de <?php the_field('duree_d’une_seance_d’atelier_'); ?>   
        </p>

        <!-- Local où se déroulera l'atelier -->
        <p class="atelier__local">
        <?php the_field('local_ou_se_deroulera_l’atelier_'); ?>   
        </p>

   <?php endif ?>
</main>
<?php get_footer() ?>