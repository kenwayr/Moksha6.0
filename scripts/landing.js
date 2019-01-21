/*
	@author - Sagnik Modak
*/
$(document).ready(function (){
	syncTimer();
});

function pad(n, width, z) {
  z = z || '0';
  n = n + '';
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}

function syncTimer(){
		var countDownDate = new Date("February 13, 2019 09:30:00").getTime(); //Moksha Date
		var timer = setInterval(function() {
		  var now = new Date().getTime();
		  var distance = countDownDate - now; //time left before Moksha is live
		  var days = pad(Math.floor(distance / (1000 * 60 * 60 * 24)), 2);
		  var hours = pad(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),2);
		  var minutes = pad(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),2);
		  var seconds = pad(Math.floor((distance % (1000 * 60)) / 1000),2);
		  if(days < 1){
		  	//when < 1 day left
			$(".timer > .days").text("");
		  }else{
			$(".timer > .days").text(days);
		  }
			$(".timer > .hours").text(hours);
			$(".timer > .minutes").text(minutes);
			$(".timer > .seconds").text(seconds);
		  // If the count down is finished, write some text 
		  if (distance < 0) {
			clearInterval(x);
			$(".big-timer").html("ADVAITAM 4.0 IS LIVE"); //when Moksha is live
		  }
		}, 1000);
	}