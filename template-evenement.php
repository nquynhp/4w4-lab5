<?php
/**
 * Template name: Évenement
 *
 * @package WordPress
 * @subpackage cidw_4w4
 */

?>

<?php get_header() ?>
<main class="site__main">

<h1> --------- Template Evenement --------- </h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>        
   <?php endif ?>

   <img src="images/ecole.jpg">
</main>
<?php get_footer() ?>