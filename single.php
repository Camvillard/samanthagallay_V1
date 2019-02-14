<?php
/**
*
* template for a single page
*
* @package cdltbisou
*
*/
?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <?php wp_head(); ?>
    <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

  </head>

  <body <?php body_class(); ?>>




  <?php get_template_part('components/header/header', 'general'); ?>

  	<main role="main">
  	<!-- section -->
  	<section>

  	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  		<!-- article -->
  		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

  			<!-- post thumbnail -->
  			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
  				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
  					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
  				</a>
  			<?php endif; ?>
  			<!-- /post thumbnail -->

        <!-- post-details -->
        <div class="post-details">
    			<div class="date">publié le <?php the_time('j F Y'); ?></div>
    			<div class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></div>
        </div>
        <!-- /post-details -->

        <!-- post title -->
        <h1>
          <?php the_title(); ?>
        </h1>
        <!-- /post title -->

        <!-- content -->
        <div class="content">
  			 <?php the_content(); // Dynamic Content ?>
        </div>
        <!-- /content -->

        <!-- post-footer -->
        <div class="post-footer">
          <p class="post-tags">
  			   <?php the_tags( __( 'Étiquettes : ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
          </p>

          <p class="post-categories">
  			   <?php _e( 'Catégories : ', 'html5blank' ); the_category(', '); // Separated by commas ?>
          </p>
        </div>
        <!-- /post-footer -->


        <?php comments_template(); ?>

  		</article>
  		<!-- /article -->

  	<?php endwhile; ?>

  	<?php else: ?>

  		<!-- article -->
  		<article>

  			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

  		</article>
  		<!-- /article -->

  	<?php endif; ?>

  	</section>
  	<!-- /section -->
  	</main>

      <?php wp_footer(); ?>

      <!-- analytics -->
      <script>
      (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
      (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
      l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
      ga('send', 'pageview');
      </script>

    </body>
  </html>
