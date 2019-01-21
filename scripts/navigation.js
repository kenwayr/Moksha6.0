$("#topnav").css({"transform":"translateY(-" + $("#topnav").outerHeight() + "px)"});
$("#map-section").css({"transform":"translateY(100vh)"});

var currentScroll = $(document).scrollTop();

$(document).on("move", function (event, direction = 1){
	
	/* TOPNAV NAVIGATION */

	if($("#topnav").hasClass("visible") && direction === -1 && !$("#menubtn").hasClass("close"))
	{
		$("#topnav").css({"transform":"translateY(-" + $("#topnav").outerHeight() + "px)"});
		$("#topnav").removeClass("visible");
		$("#social-icons-fixed-panel").fadeIn(500);
	}
	else if(!$("#topnav").hasClass("visible") && direction === 1)
	{
		if($("#map-section").hasClass("open"))
		{
			//only slide down menubtn
		}
		else
		{
			//slide down all of topnav
		}
		$("#topnav").css({"transform":"translateY(0px)"});
		$("#topnav").addClass("visible");
		$("#social-icons-fixed-panel").fadeOut(500);
	}
	else if(!$("#topnav").hasClass("visible") && direction === -1)
	{
		$("#map-section").css({"transform":"translateY(0vh)"});
		$("#map-section").addClass("open");
	}
	else if($("#topnav").hasClass("visible") && direction === 1)
	{
		$("#map-section").css({"transform":"translateY(100vh)"});
		$("#map-section").removeClass("open");
	}

});

$(document).on("keydown", function (e){
	if(e.keyCode == 38)
		$(document).trigger("move");
	else if(e.keyCode == 40)
		$(document).trigger("move", [-1]);
});

//Firefox
 $(document).bind('DOMMouseScroll', function(e){
     if(e.originalEvent.detail > 0) {
         //scroll down
         $(document).trigger("move");
     }else {
         //scroll up
         $(document).trigger("move", [-1]);
     }
     //prevent page fom scrolling
     return false;
 });

 $("#down-arrow").click(function (){
 	$(document).trigger("move",[-1]);
 });
 $("#up-arrow").click(function (){
 	$(document).trigger("move");
 });
 //IE, Opera, Safari
 $(document).bind('mousewheel', function(e){
     if(e.originalEvent.wheelDelta < 0) {
         //scroll down
         $(document).trigger("move", [-1]);
     }else {
         //scroll up
         $(document).trigger("move");
     }
     //prevent page fom scrolling
     return false;
 });