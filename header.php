<!DOCTYPE html>
<html>
<head>
  <?php wp_head(); ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">

  <title>Journée Projet</title>


  

</head>

<body>



  <nav class="navbar navbar-default navbar-fixed-top">

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
        <div class="img-navbar">
          <img  src="<?php echo get_template_directory_uri();?>/img/degrade-navbar.jpg" alt="">
        </div>

        <?php   
           /**
           * Displays a navigation menu
           * @param array $args Arguments
           */
           $args = array(
            'theme_location' => 'primaire',
            'menu_class' => 'nav navbar-nav navbar-right navbar-default',
            'menu_id' => '',
            'before' => '',
            'after' => '',
            'depth' => 0,
            'walker' => new wp_bootstrap_navwalker()
            );

           wp_nav_menu( $args ); 
           ?>



      <!--
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
      </ul> -->
    </div>

  </div>

</nav>



