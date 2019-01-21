$(document).ready(function (){

});

$(".state").on("click", function (){
	var pos = $(this).position();
	var toX = ($(this).parent().width()/2) - (pos.left + $(this).width());
	var toY = ($(this).parent().height()/2) - (pos.top + $(this).height());
	$(this).css({"transform":"translate(" + toX + "px," + toY +"px) scale(1.6)"});
	$("#state-content").css({"transform":"translateX(0%)"});
	$(".state").not(this).each(function() {
		$(this).addClass("hidden");
	});
});

$("#closeStateDescriptionBtn").click(function (){
	$(".state.hidden").each(function (){
		$(this).removeClass("hidden");
	});
	$(".state:not(.hidden)").each(function (){
		$(this).css({"transform":"translate(0px, 0px)"});
	});
	$("#state-content").css({"transform":"translateX(100%)"});
});