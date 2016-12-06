<?php 
/**
* Template Name: projet_iim
*/
get_header();
?>
<h2>
<?php the_title(); ?>
</h2>
<?php
	the_content(); 
	the_excerpt();
	the_post_thumbnail();
	?>


<?php
get_footer();
?>