<!DOCTYPE html>
<html>
<head>

  <?php wp_head(); ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/journ-eprojet/css/flipclock.css" />
  <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/wp-content/themes/journ-eprojet/img/favicon-16x16.png" />
  <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/journ-eprojet/js/smooth_scrolling.js"></script>
  <meta charset="utf-8"/>



  <title>Journée Projet</title>


  

</head>

<body>



  <nav class="navbar navbar-default navbar-fixed-top">

    <div class="container-fluid">
      <div class="navbar-header hidden-sm">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand " style="position:relative;top:-10px" href="http://localhost:8888/bap2016/" style=""> <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/jp.png" width="80" ></a>

      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <div class="img-navbar">
          <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/degrade-navbar.jpg" alt="">
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

         </div>

       </div>

     </nav>




   </div> 
 </div>
</nav>

