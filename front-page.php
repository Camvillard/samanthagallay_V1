<?php
/**
* Template Name: Front page
*
* This template is for the front page
*
* @package cdltbisou
*
*/
?>

<?php get_template_part('components/header/header', 'homepage'); ?>

  <main role="main" id="main">
    <!-- section -->
    <section>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <?php get_template_part('loop-templates/content', 'page') ?>

      <?php endwhile; ?>

      <?php endif; ?>

    </section>
    <!-- /section -->

  </main>
  <!-- /main -->



<?php get_footer(); ?>
