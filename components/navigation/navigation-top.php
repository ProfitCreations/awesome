<nav id="site-navigation" class="main-navigation" role="navigation">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'awesome' ); ?></button>
	<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'top-menu' ) ); ?>
</nav><!-- #site-navigation -->


 <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" alt="Basica"></a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#">Dropdown Menu 1</a></li>
              <li><a href="#">Dropdown Menu 2</a></li>
              <li><a href="#">Dropdown Menu 3</a></li>
              <li><a href="#">Dropdown Menu 4</a></li>
              <li><a href="#">Dropdown Menu 5</a></li>
              <li class="divider"></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms of Use</a></li>
            </ul>
          </li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact-us.html">Contact</a></li>
        </ul>
      </div>
    </div>
  </header><!--/header-->