/* projProg */


var projProg = document.querySelectorAll("#projProg");
var projProgToggleOn = document.querySelectorAll(".projProgToggleOn");
var projProgToggleOff = document.querySelectorAll(".projProgToggleOff");
var projProgToggleValue = 1;
//alert(projProg);


projProgToggleOn.addEventListener("mouseover", function(){
	projProgToggleOn.style.background = "white";
});

projProgToggleOn.addEventListener("click", function(){
	for(var i = 0; i < projProg.length; i++){
	  projProg[i].style.display = "block";
	}
	for(var i = 0; i < projProg.length; i++){
	  projProgToggleOn[i].style.display = "none";
	}
	for(var i = 0; i < projProg.length; i++){
	  projProgToggleValue[i] = 1;
	}
	createCookie("projectProgess", "1", "1");
});

projProgToggleOff.addEventListener("click", function(){
	for(var i = 0; i < projProg.length; i++){
	  projProg[i].style.display = "none";
	}
	for(var i = 0; i < projProg.length; i++){
	  projProgToggleOn[i].style.display = "block";
	}
	for(var i = 0; i < projProg.length; i++){
	  projProgToggleValue[i] = 0;
	}
	createCookie("projectProgess", "0", "1");
});

function createCookie(name, value, days) {
  	var expires;
   	var date = new Date();
   	date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
  	expires = "expires=" + date.toGMTString();
  	document.cookie = name + "=" + value + expires + "; path=/";
}
