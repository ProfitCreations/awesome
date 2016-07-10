/*

<nav id="site-navigation" class="main-navigation" role="navigation">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'awesome' ); ?></button>

</nav><!-- #site-navigation -->

*/

 <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url'); ?> ">
          <?php awesome_the_site_logo(); ?>

        </a>
      </div>
      <div class="collapse navbar-collapse">

        <?php
        wp_nav_menu( array(
            'menu'              => 'menu-1',
            'theme_location'    => 'menu-1',
            'menu_id'           => 'top-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'nav navbar-nav navbar-right',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
        );
        ?>

      </div>
    </div>
  </header><!--/header-->

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'awesome' ); ?></a>








<?php awesome_social_menu(); ?>

<?php get_template_part( 'components/header/header', 'image' ); ?>

