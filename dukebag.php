<?php
define( "DBAGS_HEADER_WIDTH", 800 );
define( "DBAGS_HEADER_HEIGHT", 250 );
add_filter( 'twentyten_header_image_width', create_function('$w', 'return '.DBAGS_HEADER_WIDTH.';') );
add_filter( 'twentyten_header_image_height', create_function('$h', 'return '.DBAGS_HEADER_HEIGHT.';') );

// categories to display on front page
$dbag_home_categories	= array(
    'featured'
);

add_action( 'wp_head', 'dbag_styles' );
function	dbag_styles() {
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('stylesheet_directory').'/'; ?>dukebag.css.php" / >
<script type="text/javascript" src="wp-includes/js/jquery/jquery.js"></script>
<script type="text/javascript" src="wp-includes/js/jquery/jquery.color.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('stylesheet_directory').'/'; ?>dukebag.js"></script>
<script type="text/javascript" src="http://use.typekit.com/yzp7hoq.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19339693-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<?php
}
?>