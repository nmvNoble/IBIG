/* project description text */


var projDescText = document.querySelector("#projDescText");
var projDescTextToggleOn = document.querySelector(".projDescTextToggleOn");
var projDescTextToggleOff = document.querySelector(".projDescTextToggleOff");
var projDescTextValue = 1;

projDescTextToggleOn.addEventListener("click", function(){
	projDescText.style.display = "inline-block";
	projDescTextToggleOn.style.display = "none";
	projDescTextValue = 1;
	createCookie("projDescText", "1", "1");
});

projDescTextToggleOff.addEventListener("click", function(){
	projDescText.style.display = "none";
	projDescTextToggleOn.style.display = "inline-block";
	projDescTextValue = 0;
	createCookie("projDescText", "0", "1");
});

function createCookie(name, value, days) {
  	var expires;
   	var date = new Date();
   	date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
  	expires = "expires=" + date.toGMTString();
  	document.cookie = name + "=" + value + expires + "; path=/";
}