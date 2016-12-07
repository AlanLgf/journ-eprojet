<?php
get_header();
?>


<div id="main">
    <section class="container-fluid">
        <div class="row">
            <h1>Journée Projets</h1>
            <div class="col-md-2 col-sm-2 col-xs-2" 
        </div>
        <div class="col-md-8 col-sm-8 col-xs-8" style="margin-top: 30%;">
            <div style="height: 50px; width: 50px; border-radius: 100px; border: 1px solid #444;margin:150px 0 0 50%;">
            </div>
            <h6 style="text-align: center; font-size: 20px; padding-left:50px; margin-bottom: 100px;"> Compte à rebours</h6>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-2" style="margin-top: 30%;">
            <div style="height: 200px; width: 200px; border-radius: 200px; border: 1px solid #444;">
                <h6 style="text-align: center;padding: 60px 0 0 0; font-size: 50px;">ESILV</h6>
            <div class="col-md-8 col-sm-8 col-xs-8" style="margin-top: 30%;">
                <div style="height: 50px; width: 50px; border-radius: 100px; border: 1px solid #444;margin:150px 0 0 50%;">
                </div>
                <h6 style="text-align: center; font-size: 20px; padding-left:50px; margin-bottom: 100px;"> Compte à rebours</h6>
                <div id="compte_a_rebours">
                    <script type="text/javascript">
                        var compte_a_rebours = document.getElementById("compte_a_rebours");
                        var date_actuelle = new Date();
                        var date_evenement = new Date("Jan 14 00:00:00 2017");

                        var total_secondes = (date_evenement - date_actuelle) / 1000;
                        var prefixe = "Compte à rebours terminé dans ";
                        if (total_secondes < 0)
                        {
                            prefixe = "Compte à rebours terminé il y a "; // On modifie le préfixe si la différence est négatif
                            total_secondes = Math.abs(total_secondes); // On ne garde que la valeur absolue
                        }
                        if (total_secondes > 0)
                        {
                            // A faire, tous nos calculs
                        }
                        else // Si total_secondes == 0 (puisqu'on a pris sa valeur absolue)
                        {
                            compte_a_rebours.innerHTML = 'Compte à rebours terminé.';
                        }

                        //calcul nombre de jours, d'heures, de minutes et de secondes restants
                        var jours = Math.floor(total_secondes / (60 * 60 * 24));

                        //Heures, minutes, secondes restantes
                        var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
                        var minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
                        var secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));

                        //afficher
                        compte_a_rebours.innerHTML = prefixe + jours + ' jours ' + heures + ' heures ' + minutes + ' minutes et ' + secondes + ' secondes.';
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<div id="presentation">
    <div class="container-fluid" >
       <div class="row">
           <h2>Presentation</h2>
           <div class="col-md-6 col-sm-12 col-xs-12">
               <div class="video_presentation">
                   <iframe width="500" height="280" src="https://www.youtube.com/embed/cRSQ9vB-hxk" frameborder="0" allowfullscreen></iframe>
               </div>
           </div>

           <div class="col-md-6 col-sm-12 col-xs-12">
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
                <h2>Planning</h2>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <p>Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                        Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                        Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.</p>
                        <p>Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                           Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.
                           Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam.</p>
                       </div>

                       <div class="col-md-6 col-sm-12 col-xs-12" >
                        <div class="img_planning">
                            <img src="<?php echo get_template_directory_uri();?>/img/bleu.jpg">
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
                <h2>Clients</h2>
                <div class="col-md-3 col-sm-4 col-xs-6" >
                   <div class="img_client">
                       <img src="<?php echo get_template_directory_uri();?>/img/logo_sg.jpg">
                   </div>
               </div>
               <div class="col-md-3 col-sm-4 col-xs-6" >
                   <div class="img_client">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo_sg.jpg">
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6" >
               <div class="img_client">
                <img src="<?php echo get_template_directory_uri();?>/img/logo_sg.jpg">
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6" >
           <div class="img_client">
            <img src="<?php echo get_template_directory_uri();?>/img/logo_sg.jpg">
        </div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6" >
       <div class="img_client">
        <img src="<?php echo get_template_directory_uri();?>/img/logo_sg.jpg">
    </div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6" >
   <div class="img_client">
    <img src="<?php echo get_template_directory_uri();?>/img/logo_sg.jpg">
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6" >
   <div class="img_client">
    <img src="<?php echo get_template_directory_uri();?>/img/logo_sg.jpg">
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6" >
   <div class="img_client">
    <img src="<?php echo get_template_directory_uri();?>/img/logo_sg.jpg">
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6" >
   <div class="img_client">
    <img src="<?php echo get_template_directory_uri();?>/img/logo_sg.jpg">
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6" >
   <div class="img_client">
    <img src="<?php echo get_template_directory_uri();?>/img/logo_sg.jpg">
</div>
</div>
</div>
</div>
</div>

<?php
get_footer();
?>
