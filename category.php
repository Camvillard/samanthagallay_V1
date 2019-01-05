<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
      <h3>salut</h3>

			<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

			<?php get_template_part('components/content/loop'); ?>

			<?php get_template_part('components/content/pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
