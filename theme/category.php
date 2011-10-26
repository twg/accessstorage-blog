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

				<nav id="nav-above">
					<h2 class="page-header">   <?php printf( __( 'Category Archives: %s', 'toolbox' ), '<span>' . single_cat_title( '', false ) . '</span>' );	?></h2>
          <?php $categorydesc = category_description(); if ( ! empty( $categorydesc ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>
					<div class="nav-home"><a href="/">see all posts</a></div>
				</nav><!-- #nav-above -->

				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
				
				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<div class="divider"></div>
			  <?php wp_pagenavi(); ?>
			  <div class="clearfloat"></div>
      </div> 

<?php get_footer(); ?>