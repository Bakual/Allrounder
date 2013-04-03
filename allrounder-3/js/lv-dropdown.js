jQuery(document).ready(function($){
	$("#topmenu ul.menu ul").css({display: "none"}); // Opera Fix
	$("#topmenu ul.menu li").hover(function(){
			$(this).find('ul:first').css({visibility: "visible",display: "none"}).show('fast');
		},function(){
			$(this).find('ul:first').css({visibility: "hidden"});
		}
	);
}