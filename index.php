<?php
get_header();
?>


<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <H1>Journée projet</H1>
            </div>
        </div>

         <div class="row">

      <div class="col-md-6 col-md-offset-3" id="main_row">
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
            var countdown = 1484690460 - ((new Date().getTime())/1000); // from: 03/04/2017 10:52 pm +0100
            countdown = Math.max(1, countdown);
            $('.clock-builder-output').FlipClock(countdown, opts);
          });
          </script>
    </div>
    </div>
     <div class="row">
                <div class="col-md-3" id="main_row">
              <div class="bouton_ecole">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri();?>/img/logo_iim.png">
                </a>
              </div>
            </div>
    <div class="col-md-3 col-md-offset-6" id="main_row">
      <div class="bouton_ecole">
        <a href="#">
          <img src="<?php echo get_template_directory_uri();?>/img/logo_esilv.png">
      </a>
  </div>
</div>
</div>
</div>
</div>


<div id="presentation">
    <div class="container-fluid">
       <div class="row">
           <h2>Présentation de la journée projet</h2>
           <div class="col-md-7 col-sm-12 col-xs-12">
               <div class="video_presentation">
                   <iframe width="500" height="280" src="https://www.youtube.com/embed/cRSQ9vB-hxk" frameborder="0" allowfullscreen></iframe>
               </div>
           </div>

           <div class="col-md-5 col-sm-12 col-xs-12">
               <p>Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                   Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                   Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.</p>
                   <p>Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                       Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                       Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.</p>
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
                        <p>Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                            Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                            Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                            Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                            Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                            Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                            Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                            Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                            Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.</p>
                            <p>Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                                Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                                Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.</p>
                            </div>
                            <div class="fond_planning">
                                <img src="<?php echo get_template_directory_uri();?>/img/fond_planning2.png">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12"  id="imgduplanning">
                            <div class="img_planning">
                                <img src="<?php echo get_template_directory_uri();?>/img/img_planning.png">
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
                      <p> Cumque ptinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                       Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                       Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.</p>
                       <p> Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                           Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                           Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.</p>
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


