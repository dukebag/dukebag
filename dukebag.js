
var mousemoveTimer;
    
var darkenBG	= function() {
    jQuery("body").stop();
    jQuery("body").animate({
       backgroundColor: "#020202" 
    }, 750);
};
var lightenBG	= function() {
    jQuery("body").animate({
       backgroundColor: "#f1f1f1" 
    }, 120);
};

var onMovement	= function() {
    clearTimeout( mousemoveTimer );
    jQuery("body").stop();
    lightenBG();
    mousemoveTimer	= setTimeout( darkenBG, 7200 );
}

jQuery(document).ready(function(){
    onMovement();
    jQuery(document).mousemove( onMovement );
    //jQuery(window).scroll( onMovement );
})