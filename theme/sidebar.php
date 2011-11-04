<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

    <div id="sidebar">
      <h1 id="logo"><a href="http://accessstorage.ca/">Access Storage - your commercial storage or residential storage needs for Toronto</a></h1>
	
			<div class="social">
        <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
          <a class="addthis_button_twitter" href=""></a>
          <a class="addthis_button_facebook" href=""></a>
          <a class="addthis_button_email" href=""></a>
          <a class="addthis_button_google" href=""></a>
          <a class="addthis_button_compact" href=""></a>
          <a class="addthis_counter addthis_bubble_style" href=""></a>
				</div>
      </div>

      <div id="secondary" class="widget-area" role="complementary">
  			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
          
				
          <div class="content_box ">
          <div class="content_box_header">
            <div class="content_box_header_corner"></div>
          </div>
          <div class="content_box_content">
            <aside id="search" class="widget widget_search">
    				  <h2>Search</h2>
    					<?php get_search_form(); ?>
    				</aside>
  				<aside id="archives" class="widget">
  					<h2 class="widget-title"><?php _e( 'Archives', 'toolbox' ); ?></h2>
  					<ul>
  						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
  					</ul>
  				</aside>
        				</div>
            <div class="content_box_footer">
              <div class="content_box_footer_corner"></div>
            </div>
          </div>

  			<?php endif; // end sidebar widget area ?>
  		</div><!-- #secondary .widget-area -->
          
      
  		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
  		<div id="tertiary" class="widget-area" role="complementary">
  			<?php dynamic_sidebar( 'sidebar-2' ); ?>
  		</div><!-- #tertiary .widget-area -->
  		<?php endif; ?>
                
 
                  <div class="content_box ">
                  <div class="content_box_header">
                    <div class="content_box_header_corner"></div>
                  </div>
                  <div class="content_box_content">
                    <div id="van">
                <p class="italic">
                  Access Storage is home of the
                </p>
                <h2>
                  FREE move-in van
                </h2>
                <p>
                  Book a storage unit and get free use of our cargo van. Call us at
                  <strong>
                    1 877 217 8673
                  </strong>
                  for van offer details, and to book your space.
                </p>
              </div>

                  </div>
                  <div class="content_box_footer">
                    <div class="content_box_footer_corner"></div>
                  </div>
                </div>

                <ul>
                  <li>8 Convenient Locations in Toronto and the GTA</li>
                  <li>24-hour Access 7 days a week</li>
                  <li>Custom Sized Storage Units</li>
                  <li>Affordable, Clean, Safe and Secure Storage</li>
                  <li>Canadian Owned and Operated</li>
                  <li>Boxes and Moving Supplies</li>
                </ul>
                <div class="testimonial"></div>
      
    </div>
