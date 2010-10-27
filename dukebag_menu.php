<?php

add_filter( 'nav_menu_item_id', 'dbag_menu_item_id', 1, 3 );
add_filter( 'nav_menu_css_class', 'dbag_menu_item_class', 1, 2 );

$dbag_menu_items		= array();
$dbag_menu_item_sub_id_prefix	= 'sub-';
$dbag_menu_item_id_prefix	= 'menu-item-';
$dbag_menu_item_link_after	= "<strong>&raquo;</strong>";
$dbag_menu_item_marker		= "#@dbag@#";


function	dbag_menu_item_class($classes, $item) {
    if ( $item->menu_item_parent != 0 )
	array_push( $classes, 'sub-menu-item' );
    
    return $classes;
}

// this assign
function	dbag_menu_item_id( $id, $item, $args ) {
    global $dbag_menu_items;
    global $dbag_menu_item_id_prefix;
    global $dbag_menu_item_marker;
    global $dbag_menu_item_sub_id_prefix;
    
    if ( $item->menu_item_parent == 0 ) {
	$dbag_menu_items[$item->ID]	= array();
	$new_id	= $dbag_menu_item_id_prefix.sizeof($dbag_menu_items);
	$args->link_after	= $dbag_menu_item_marker;
    }
    else {
	$dbag_menu_items[$item->menu_item_parent][$item->ID]	= '';
	// menu-item-3-sub-menu-item-2
	$new_id	= $dbag_menu_item_id_prefix.sizeof($dbag_menu_items).'-'.$dbag_menu_item_sub_id_prefix.sizeof($dbag_menu_items[$item->menu_item_parent]);
	$args->link_after	= '';
    }
	
    return $new_id;
}

function	dbag_menu_item_mark_parents( &$output ) {
    global $dbag_menu_items;
    global $dbag_menu_item_id_prefix;
    global $dbag_menu_item_marker;
    global $dbag_menu_item_link_after;
    
    $i	= 0;
    foreach ( $dbag_menu_items as $dbag_item ) {
	if ( sizeof( $dbag_item) )
	    $replace	= $dbag_menu_item_link_after;
	else
	    $replace	= '';
	
	$output	= preg_replace("/($dbag_menu_item_id_prefix".($i+1).".+)$dbag_menu_item_marker/m", "$1$replace", $output);
	$i++;
    }
    
    print $output;
}

function	the_dukebag_menu() {
    global $dbag_menu_item_link_after;
?>
						<div class="wrapper">
						    <div id="access" style="height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;" role="navigation">
						      <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
							    <div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
							    <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
							    <?php ob_start(); ?>
							    <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'link_after' => $dbag_menu_item_link_after ) ); ?>
							    <?php dbag_menu_item_mark_parents(ob_get_clean()); ?>
							    <?php ob_end_flush(); ?>
						    </div><!-- #access -->
						
						    <img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
						</div><!-- .wrapper -->
<?php
}

?>