<?php
/**
 * Template Name: Évenement
 *
 * @package WordPress
 * @subpackage cidw_4w4
 */

?>

<?php get_header() ?>
<main class="site__main">

<!-- <h1> --------- Template Evenement --------- </h1> -->
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_field('product_description'); ?>       
   <?php endif ?>

   <?php the_post_thumbnail("thumbnail"); ?>
   
</main>
<?php get_footer() ?>