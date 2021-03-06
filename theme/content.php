<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>
    

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="box_header">
        <header class="entry-header">
      		<?php if ( 'post' == $post->post_type ) : ?>
      		<div class="entry-meta">
      			<?php
      				printf( __( '<time class="entry-date" datetime="%2$s" pubdate>%3$s</time>', 'toolbox' ),
      					get_permalink(),
      					get_the_date( 'c' ),
      					get_the_date()
      				);
      			?>
    				<span class="sep"> </span>
      			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'toolbox' ), __( '1 Comment', 'toolbox' ), __( '% Comments', 'toolbox' ) ); ?></span>
      		</div><!-- .entry-meta -->
      		<?php endif; ?>
      	</header><!-- .entry-header -->
      </div>
      <div class="box_content">
        <div class='single_column'>
          <h2 class="post-header"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <?php if ( is_search() ) : // Only display Excerpts for search pages ?>
        	<div class="entry-summary">
        		<?php the_excerpt( __( '', 'toolbox' ) ); ?>
        	</div><!-- .entry-summary -->
        	<?php else : ?>
        	<div class="entry-content">
        		<?php the_content( __( '<span>Read More</span>', 'toolbox' ) ); ?>
        		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
        	</div><!-- .entry-content -->
        	<?php endif; ?>

        	<footer class="entry-meta">
        		<span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links">Categories</span><?php the_category( ', ' ); ?></span>
        		<?php the_tags( '<span class="tag-links">' . __( 'Tagged ', 'toolbox' ) . '</span>', ', ', '' ); ?>
        		<?php edit_post_link( __( 'Edit', 'toolbox' ), '<span class="sep">|</span> <span class="edit-link">', '</span>' ); ?>
        	</footer><!-- #entry-meta -->
        </div>
      </div>

    </article><!-- #post-<?php the_ID(); ?> -->
