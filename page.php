<?php get_header(); ?>

	<main role="main" id="main">
		<!-- section -->
		<section>

      <header class="entry-header">

        <?php the_title( '<h1 class="entry-title"><span>', '</span></h1>' ); ?>

      </header><!-- .entry-header -->

  		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <?php get_template_part('loop-templates/content', 'page') ?>

  		<?php endwhile; ?>

  		<?php else: ?>

  			<!-- article -->
  			<article>

  				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

  			</article>
  			<!-- /article -->

		  <?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
