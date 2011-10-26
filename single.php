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
  			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', 'single' ); ?>
        
				<nav id="nav-below">
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'toolbox' ) . '</span>' ); ?></div>
				  <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'toolbox' ) . '</span> %title' ); ?></div>
				</nav><!-- #nav-below -->
				
        <div id="comments"></div>
				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>
    </div>

<?php get_footer(); ?>