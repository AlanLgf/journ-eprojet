<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <link href="<?php bloginfo('url'); ?>/wp-content/themes/journ-eprojet/css/bootstrap.min.css" type="text/css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">

  <script src="<?php bloginfo('url');?>/wp-content/themes/journ-eprojet/js/jquery-2.1.3.js"></script>
  <script src="<?php bloginfo('url');?>/wp-content/themes/journ-eprojet/js/bootstrap.js"></script>
  <script src="<?php bloginfo('url');?>/wp-content/themes/journ-eprojet/js/smooth_scrolling.js"></script>

  <title>Journée Projet</title>

</head>
<body>	

    <nav class="navbar navbar-default ">

      <?php $defaults = array(
        'theme_location' => '',
        'menu' => 'menu-general',
        'container' => '',
        'container_class' => 'navbar navbar-default navbar-fixed-top',
        'container_id' => '',
        'menu_class' => 'menu',
        'menu_id' => '',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'items_wrap' => '<ul class="nav navbar-nav navbar-right" style="padding:0 50px 0 10px">%3$s</ul>',
        'depth' =>'',
        'walker' => ''
        );
      wp_nav_menu($defaults);
      ?>
</nav>

<!--<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">

      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projet <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">IIM</a></li>
                <li><a href="#">ESILV</a></li>
              </ul>
            </li>
            <li><a href="#presentation" class="mon_scroll">Présentation</a></li>
            <li><a href="#planning" class="mon_scroll">Planning</a></li>
            <li><a href="#plan" class="mon_scroll">Plan</a></li>
            <li><a href="#client" class="mon_scroll">Clients</a></li>
          </ul>
        </div> 
      </div>
    </nav>
--> 
