<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4eb1a07f1285e203" type="text/javascript"></script>
<script type='text/javascript'>
  //<![CDATA[
    var addthis_config = {
      username: "accessstorage",
      ui_cobrand: "Access Storage",
      ui_header_color: "#ffffff",
      ui_header_background: "#8BC502",
      data_track_linkback: "true",
      data_ga_tracker: "pageTracker",
      data_ga_social : true
    }
  //]]>
</script>
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php bloginfo( 'template_directory' ); ?>/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body>
<div id="container">
  <div id="content_header">
    <div id="content_header_corner"></div>
  </div>
  <div id="content_container">
    <div id="content_corner">
      