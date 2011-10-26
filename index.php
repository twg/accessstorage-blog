<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>
    

    <?php get_sidebar(); ?> 
    <div id="main_content">
      <h2 id="header">the best solution for commercial storage and residential storage in Southern Ontario</h2>
      <? include 'navigation.php'; ?>
      <div class="clearfloat"></div>
      <div class="page-content">
  				<?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
  				<?php endwhile; ?>

  				<?php /* Display navigation to next/previous pages when applicable */ ?>
  				<div class="divider"></div>
  			  <?php wp_pagenavi(); ?>
        <div class="clearfloat"></div>
      </div>


<?php get_footer(); ?>