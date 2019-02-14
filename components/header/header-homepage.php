<!-- partial for homepage header content -->


<!-- header -->
<header class="header" role="banner" id="homepage-header">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="true">
    <span class="navbar-toggler-icon"></span>
  </button>

    <!-- nav -->
    <nav id="homepage-navbar" class="nav" role="navigation">
      <!-- search -->
      <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
        <input class="search-input" type="search" name="s" placeholder="search">
      </form>
      <!-- /search -->
      <!-- navigation -->
      <?php html5blank_nav(); ?>
      <!-- /navigation -->
    </nav>
    <!-- /nav -->

</header>
<!-- /header -->
