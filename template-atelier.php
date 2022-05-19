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
            <?php the_field('description'); ?>   
        </section>

        <!-- L'animateur responsable de l'atelier -->
        <p class="atelier__animateur">
        <?php the_field('animateur'); ?>   
        </p>

        <!-- Date de début de l'atelier -->
        <p class="atelier__dateDebut">
        <?php the_field('dateDebut'); ?>   
        </p>

        <!-- Date de fin de l'atelier -->
        <p class="atelier__dateFin">
        <?php the_field('dateFin'); ?>   
        </p>

        <!-- Les jours de la semaine lorsqu'il y a l'atelier -->
        <p class="atelier__joursSemaine">
        <?php the_field('joursSemaine'); ?>   
        </p>

        <!-- Quand l'atelier débute -->
        <p class="atelier__heureDebut">
        <?php the_field('heureDebut'); ?>   
        </p>

        <!-- Quand l'atelier se termine -->
        <p class="atelier__heureFin">
        <?php the_field('heureFin'); ?>   
        </p>

        <!-- La durée de l'atelier -->
        <p class="atelier__duree">
        <?php the_field('duree'); ?>   
        </p>

        <!-- Local où se déroulera l'atelier -->
        <p class="atelier__local">
        <?php the_field('local'); ?>   
        </p>

        <p><?php the_field('organisateur'); ?></p>      
   <?php endif ?>
</main>
<?php get_footer() ?>