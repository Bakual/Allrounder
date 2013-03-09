function lvdropdown(){
	jQuery("#topmenu ul.menu ul").css({display: "none"}); // Opera Fix
	jQuery("#topmenu ul.menu li").hover(function(){
		jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).show('fast');
		},function(){
			jQuery(this).find('ul:first').css({visibility: "hidden"});
	});
}
 
jQuery(document).ready(function(jQuery){
	lvdropdown();
});