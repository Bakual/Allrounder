function lvdropdown(){

	jq("#topmenu ul.menu ul").css({display: "none"}); // Opera Fix
	jq("#topmenu ul.menu li").hover(function(){
		jq(this).find('ul:first').css({visibility: "visible",display: "none"}).show('fast');
		},function(){
			jq(this).find('ul:first').css({visibility: "hidden"});
	});
}
 
jQuery(document).ready(function(jq){					
	lvdropdown();
});