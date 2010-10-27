<?php
    header("Content-type: text/css");
    $dbag_access_width	= "10.75em";
    $dbag_access_highlight_bgcolor	= "#333";
    $dbag_access_menu_item1_color	= "#198bf6";
    $dbag_access_menu_item2_color	= "#e646ba";
    $dbag_access_menu_item3_color	= "#5be525";
    $dbag_access_menu_item4_color	= "#faf850";
?>

/* the menu */
#access {
    display: table-cell; width: auto; float: none; height: auto; vertical-align: top; 
}

#access * {
    text-align: left;
}

/* positioning, width and that fun stuff */
#access div.menu,
#access div.menu-header {
    width: auto;
    clear: left;
    vertical-align: top;
    margin: 0em;
    width: <?php echo $dbag_access_width; ?>;
}

#access div.menu li,
#access div.menu-header li	{ float: none; }
#access li:hover		{ background-color: <?php echo $dbag_access_highlight_bgcolor; ?>; }

#access div.menu ul li ul.sub-menu,
#access ul ul {
    position: absolute;
    left: <?php echo $dbag_access_width; ?>;
    top: 0em;
}

#access a		{ padding-left: 1.25em; }
#access a strong	{ position: absolute; right: 1em; } /* the &raquo;'s */


/* all the pretty colored nav menu items */
#access ul li#menu-item-1 a {
    color: <?php echo $dbag_access_menu_item1_color; ?>;
}
#access ul li#menu-item-2 a {
    color: <?php echo $dbag_access_menu_item2_color; ?>;
}
#access ul li#menu-item-3 a {
    color: <?php echo $dbag_access_menu_item3_color; ?>;    
}
#access ul li#menu-item-4 a {
    color: <?php echo $dbag_access_menu_item4_color; ?>;    
}

/* rules for the active menu item */
ul#menu-main>li.current-menu-item a {
    color: #fff !important;
}
ul#menu-main>li#menu-item-1.current-menu-item,
ul#menu-main>li#menu-item-1.current-menu-parent,
ul#menu-main>li#menu-item-1.current-menu-item a,
ul#menu-main>li#menu-item-1.current-menu-parent a {
    #color: #fff;
    background-color: <?php echo $dbag_access_menu_item1_color; ?>;
}
ul#menu-main>li#menu-item-2.current-menu-item,
ul#menu-main>li#menu-item-2.current-menu-parent,
ul#menu-main>li#menu-item-2.current-menu-item a,
ul#menu-main>li#menu-item-2.current-menu-parent a {
    #color: #fff;
    background-color: <?php echo $dbag_access_menu_item2_color; ?>;
}
ul#menu-main>li#menu-item-3.current-menu-item,
ul#menu-main>li#menu-item-3.current-menu-parent,
ul#menu-main>li#menu-item-3.current-menu-item a,
ul#menu-main>li#menu-item-3.current-menu-parent a {
    background-color: <?php echo $dbag_access_menu_item3_color; ?>;
    color: #000 !important;
}
ul#menu-main>li#menu-item-4.current-menu-item,
ul#menu-main>li#menu-item-4.current-menu-parent,
ul#menu-main>li#menu-item-4.current-menu-item a,
ul#menu-main>li#menu-item-4.current-menu-parent a {
    background-color: <?php echo $dbag_access_menu_item4_color; ?>;
    color: #000 !important;
}

ul#menu-main>li.current-menu-item ul li,
ul#menu-main>li.current-menu-item ul li a,
#menu-main .sub-menu,
#menu-main .sub-menu *,
#menu-main .sub-menu li  a,
ul#menu-main>li#menu-item-3.current-menu-item .sub-menu-item a, 
ul#menu-main>li#menu-item-4.current-menu-item .sub-menu-item a, 
ul#menu-main>li#menu-item-3.current-menu-parent .sub-menu-item a, 
ul#menu-main>li#menu-item-4.current-menu-parent .sub-menu-item a {
    color: #ccc !important;
    background-color: #333 !important;
}
 
.menu-item a strong {
    color: #ccc;    
}
.sub-menu-item {
    color: #ccc;
}

#branding .wrapper { display: table; text-align: center; margin: auto; clear: both;  }
#branding img { }

/* This is the custom header image */
#branding img, #access {
	border-top: 4px solid #000;
	border-bottom: 1px solid #000;
}

#site-title,#site-info {
font-family:droid-sans-1,droid-sans-2;
}

#site-title a {
font-weight:normal;
}

/* typekit rules */

.entry-title {
font-family:apolline-1,apolline-2;
font-weight:400;
}

.widget-title {
font-family:droid-sans-1,droid-sans-2;
font-weight:bold;
font-size: 1.15em;
}

h2 {
font-family:droid-sans-1,droid-sans-2;
font-weight:bold;
font-size: 0.9em;
}

/* the posts */

.post img {
    border: solid 0.25em #000;
}

.post img.wp-smiley,
.post a img {
    border: 0em;
}

#site-generator {
    width: auto;
    vertical-align: top;
    position: relative;
    text-align: right;
    top: -1.0em;
    padding: 0em;
    margin: 0em;
}

#site-generator * {
    padding: 0em;
    margin: 0em;
}
#site-generator a {
    margin-left: 2em;
}