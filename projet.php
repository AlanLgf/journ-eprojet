<?php 
/**
* Template Name: projet_iim
*/
get_header();
?>


<section class="header">
	<div class="container-fluid">
		<div class="row">
			<div class ="logo">
				<div class=" col-sm-offset-2 col-sm-4  col-xs-6">
					<img src="img/iim-logo.png" alt="">
				</div>
				<div class="title">
					<div class="col-sm-6">
						<h1> Les projets </h1>
					</div>
				</div>
			</div>
		</div>
	</div>




</section>


<section>
	<div class ="année">
		<div class="container-fluid">

			<div class="row">
				<div class=" col-sm-offset-2 col-sm-4 col-xs-offset-2 col-xs-4">
					<a href=""><h2>2016</h2></a>
				</div>
				<div class=" col-sm-upset-2 col-sm-4 col-xs-upset-2 col-xs-4">
					<a href=""><h2>2015</h2></a>

				</div>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="projets">
		<div class="container-fluid">
			<div class="row">
				<div class="align">
					<div class="col-sm-12">
						<div class="main">
							<div class="view view-first" style="visibility: visible;">

								<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/altran.jpg" alt="">
								<div class="mask">
									<h2>Altran</h2>
									<a target="_blank" title="Boutique en ligne guitar picks" href="#" class="info">Plus d'info</a>
								</div>
							</div>
						</div>
						<div class="view view-first" style="visibility: visible;">
							<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/awwwards.png" alt="">
							<div class="mask">
								<h2>Awwwards</h2>
								<a target="_blank" title="Boutique en ligne guitar picks" href="#" class="info">Plus d'info</a>
							</div>
						</div>
						<div class="view view-first" style="visibility: visible;">

							<img class="img-responsive" src=" <?php echo get_template_directory_uri();?>/img/societe.jpg" alt="">
							<div class="mask">
								<h2>Société général</h2>
								<a target="_blank" title="Boutique en ligne guitar picks" href="#" class="info">Plus d'info</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>



<?php
get_footer();
?>