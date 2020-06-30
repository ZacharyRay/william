<?php 
/* 
Template Name: Main Template
*/
get_header();
// call layouts
    if( have_rows('content') ):
    while ( have_rows('content') ) : the_row();
?>


<!-- acf-elements -->

            <?php //slider ?>
      <?php if( get_row_layout() == 'slider' ):?>
          <?php get_template_part('acf-elements/acf', 'home-slider'); ?>
      <?php endif; ?>

      <?php //single image ?>
      <?php if( get_row_layout() == 'single_image' ):?>
          <?php get_template_part('acf-elements/acf', 'single-image'); ?>
      <?php endif; ?>

<?php
  endwhile;  
  endif;
?>


<?php get_footer(); ?>