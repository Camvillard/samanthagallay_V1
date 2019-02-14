<!-- header -->
<header class="header" role="banner" id="main-header">

    <!-- logo -->
    <div class="logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_blanc.svg" alt="Logo" class="logo-img">
      </a>
    </div>
    <!-- /logo -->

    <!-- nav -->
    <nav id="navbar" class="nav" role="navigation">
      <!-- search -->
      <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
        <input class="search-input" type="search" name="s" placeholder="f002">
      </form>
      <!-- /search -->
      <!-- navigation -->
      <?php html5blank_nav(); ?>
      <!-- /navigation -->
    </nav>
    <!-- /nav -->

</header>
<!-- /header -->
