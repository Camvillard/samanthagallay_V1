<!-- content for homepage only -->

<main role="main" id="frontpage-main">
  <!-- section -->
  <section id="frontpage-section">

    <div id="frontpage-logo">
      <img src="<?php echo get_template_directory_uri() . '/img/logo_blanc.svg'; ?>" />
    </div>

    <div id="frontpage-content">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <?php the_title( '<h1 class="entry-title"><span>', '</span></h1>' ); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php the_content(); ?>

        </article>
        <!-- /article -->

      <?php endwhile; ?>

      <?php endif; ?>
    </div>

  </section>
  <!-- /section -->

</main>
<!-- /main -->
