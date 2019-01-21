
$("#menubtn").click(function(){
	$(this).toggleClass("close");
	$("#menu").toggleClass("active");
	if($("#menu").hasClass("active"))
		ExpandMenu();
	else
		CollapseMenu();
});

$("#menu").on("close", function (){
	$("#menu").removeClass("active");
	$("#menubtn").removeClass("close");
	CollapseMenu();
});

$(document).on("keydown", function (e){
	if(e.keyCode == 27 && $("#menu").hasClass("active"))
		$("#menu").trigger("close");
});

function ExpandMenu()
{
	$("#menu > .menu-items-container .menu-item").each(function (){
		var order = $(this).attr("data-order");
		var width = $(this).outerWidth();
		var height = $(this).outerHeight();
		if(order < 4)
			$(this).css({"transform":"translateX(-" + (width * order) + "px) translateZ(0)"});
		else
			$(this).css({"transform":"translate(-" + (width * (order % 4)) + "px, " + (height) + "px) translateZ(0)"});
	});
}

function CollapseMenu()
{
	$("#menu > .menu-items-container .menu-item").each(function (){
		$(this).css({"transform":"translateX(0px) translateZ(0)"});
	});
}