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
      <div id="location_listing">
      <div class="location">
			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title">Page not found</h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'toolbox' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<div class="widget">
						<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'toolbox' ); ?></h2>
						<ul>
						<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 'TRUE', 'title_li' => '', 'number' => '10' ) ); ?>
						</ul>
					</div>

					<?php
					$archive_content = '<p>Try looking in the monthly archives.</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=0', "after_title=</h2>$archive_content" );
					?>

				</div><!-- .entry-content -->
			</article><!-- #post-0 -->
      </div>
      </div>
    </div>


<?php get_footer(); ?>