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

<!-- get the header without the logo -->
<?php get_template_part('components/header/header', 'homepage'); ?>


  <main role="main" id="frontpage-main">
    <!-- section -->
    <section id="frontpage-section">

      <div id="frontpage-logo">
        <img src="<?php echo get_template_directory_uri() . '/img/logo_blanc.svg'; ?>" />
      </div>

      <div id="frontpage-content">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <?php the_title( '<h1 class="entry-title"><span>', '</span></h1>' ); ?>

          <?php get_template_part('loop-templates/content', 'page') ?>

        <?php endwhile; ?>

        <?php endif; ?>
      </div>

    </section>
    <!-- /section -->

  </main>
  <!-- /main -->



<?php get_footer(); ?>
