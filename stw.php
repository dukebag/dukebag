<?php
add_action('twentyten_credits', 'stw_credits');

function stw_credits() {
?>    
    <a style="display: inline; background-image: none;" href="<?php echo esc_url( __('http://spintheweb.org/', 'stw') ); ?>"
		    title="<?php esc_attr_e('Spin the Web', 'stw'); ?>" rel="generator">
		    <img src="<?php echo get_bloginfo("stylesheet_directory"); ?>/images/stw-logo-64x40.png" / >
    </a>
<?php
}
?>