<?php
/**
* Template Name: index
*/
get_header();
?>


<div id="main">
  <div class="container">
    <div class="titre">
      <div class="row">
        <div class="col-md-12">
          <H1>Journée projet</H1>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-lg-12 col-md-12   hidden-xs" id="main_row">
        <div class="clock-builder-output"></div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/journ-eprojet/js/flipclock.js"></script>
        <style text="text/css">body .flip-clock-wrapper ul li a div div.inn, body .flip-clock-small-wrapper ul li a div div.inn { color: #CCCCCC; background-color: #333333; } body .flip-clock-dot, body .flip-clock-small-wrapper .flip-clock-dot { background: #323434; } body .flip-clock-wrapper .flip-clock-meridium a, body .flip-clock-small-wrapper .flip-clock-meridium a { color: #323434; }</style>
        <script type="text/javascript">
          $(function(){
            FlipClock.Lang.Custom = { days:'Jours', hours:'Heures', minutes:'Minutes', seconds:'Secondes' };
            var opts = {
              clockFace: 'DailyCounter',
              countdown: true,
              language: 'Custom'
            };  
            var countdown = 1485442800 - ((new Date().getTime())/1000); // from: 03/04/2017 10:52 pm +0100
            countdown = Math.max(1, countdown);
            $('.clock-builder-output').FlipClock(countdown, opts);
          });
        </script>
      </div>
    </div>
    <div class="logos-projets">
      <div class="row">
        <div class="col-md-3  col-sm-3 col-xs-12" id="main_row">
          <div class="bouton_ecole">
            <a href="#">
              <img src="<?php echo get_template_directory_uri();?>/img/iim-logo.png">
            </a>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-6 col-sm-3 col-sm-offset-6 col-xs-12 " id="main_row">
          <div class="bouton_ecole">
            <a href="#">
              <img src="<?php echo get_template_directory_uri();?>/img/logo_esilv.png">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="presentation">
  <div class="container-fluid">
   <div class="row">
     <h2>Présentation de la journée projet</h2>
     <div class="col-md-6">
       <div class="video_presentation">
         <iframe width="80%" height="350px" src="https://www.youtube.com/embed/SxxVIrQdFwQ" frameborder="0" allowfullscreen=""></iframe>
       </div>
     </div>

     <div class="col-md-6">
       <p>La journée projet est un événement annuel interne au Pôle Léonard de Vinci, visant à exposer
        aux professionnels mais également aux particuliers les projets réalisés par nos étudiants.  </p>
        <p> Lors de cette journée vous pourrez découvrir les expositions des projets, poser vos questions
          et interagir avec nos étudiants.  </p>
          <p>Au total, une trentaine de projets diversifiés relatifs aux projets de l’IIM et de l’ESILV domaines
            confondus seront exposés.  </p>
            <p>  En quelques chiffres la Journée Projet du Pôle Universitaire Léonard de Vinci c’est :<br/>
              - 800 étudiants travaillant sur un projet professionnel<br/>
              - 24 entreprises professionnelles<br/>
              - 6 spécialisations exposées par l’IIM (communication digitale, communication visuelle, web
              & e-business, jeux vidéo, cinéma d’animation, design interactif)<br/>
              - 4 spécialisations exposées par l’ESILV (informatique, big data & objets connectés,
              ingénierie financière, mécanique numérique et modélisation, nouvelles énergies) </p>
            </div>

          </div>
        </div>
      </div>

      <div id="planning">
       <div class="container-fluid" >
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">

            <h2>Planning</h2>
            <div class="texte_planning">
              <p>L’évènement Journée Projet se déroulera en deux temps :</p>
              <p>- De 16h à 18h30 les étudiants exposeront leurs projets en Rue Haute et à
                l’Infothèque. (Voir Guide de l’établissement) </p>
                <p>- Un buffet à partager et des activités à découvrir </p>
                <p>- De 18h30 à 19h : Une remise de prix est organisée, les meilleures équipes seront
                  sélectionnées et récompensées. </p>
                </div>

              </div>
              <div class="col-md-6 col-sm-6 col-xs-12"  id="imgduplanning">
                <div class="img_planning">
                  <img src="<?php echo get_template_directory_uri();?>/img/img_planning.png"  class="img-responsive" >
                </div>
              </div>

            </div>
          </div>
        </div>

        <div id="plan">
          <div class="container-fluid" >
           <div class="row">
             <div class="col-md-6 col-sm-12 col-xs-12">
               <div class="img_plan">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.025458436362!2d2.234220316029438!3d48.89585197929128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e665002d2c6665%3A0x9595552cb384bd7!2sP%C3%B4le+Universitaire+L%C3%A9onard+de+Vinci!5e0!3m2!1sfr!2sfr!4v1481122429648" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">
              <h2>Plan</h2>
              <p> "Rendez-vous au Pôle Léonard de Vinci situé à la Défense. Dès votre arrivée, un guide sera
                présent pour vous aider et vous accompagner à travers le pôle pour découvrir tous les projets
                et activités.</p>
                <p>
                  Au besoin, un vestiaire sera à disposition. » </p>
                </div>

              </div>
            </div>
            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/degrade-navbar.jpg" alt="">

          </div>

          <div id="client">
           <div class="container-fluid" >
            <div class="row">
              <h2>Partenaires</h2>
            </div>
          </div>

          <div class="tech-slideshow">
            <div class="mover-1"></div>
          </div>
        </div>

        <?php get_footer();?>


