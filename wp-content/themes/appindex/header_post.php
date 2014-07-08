<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/toggle-switch.css">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700,400italic' rel='stylesheet' type='text/css'>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery.infinitescroll.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lib/isotope.pkgd.js" type="text/javascript"></script>
    <script type="text/javascript" src="//use.typekit.net/bla4spa.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

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
    <!-- wrapper -->
    <div class="wrapper">


      <div id="about" class="about-wrapper" style="display: none;">
        <div class="about">
          <h6>What this site is about:</h6>
          <h1>All the good apps. None of the dumb apps.</h1>
          <h6>Made by the friendly folks who run this <a href="https://photojojo.com">photography store</a>.</h6>
        </div>
      </div>

      <div class="about-show" id="showAbout">?</div>

      <!-- header -->
      <header class="header clear" role="banner">
        <div class="logo-wrap">
          <a class="logo" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-posts.png" alt="Logo" class="logo-img">
          </a>
        </div>

        <div class="search-wrap">
          <?php # get_template_part('searchform'); ?>
          <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="text" name="s" id="s" class="search-input" placeholder="<?php esc_attr_e( 'What do you want to do?', 'appindex' ); ?>" onFocus="if (this.placeholder=='What do you want to do?'){this.placeholder='';}" onBlur="if (this.placeholder==''){this.placeholder='What do you want to do?';}" /><span>
            <input type="submit" name="submit" class="search-submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'appindex' ); ?>" />
          </form>
        </div>

      </header>
      <!-- /header -->


















