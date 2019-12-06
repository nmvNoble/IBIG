/* project description text */


var projDescText = document.querySelector("#projDescText");
var projDescTextToggleOn = document.querySelector(".projDescTextToggleOn");
var projDescTextToggleOff = document.querySelector(".projDescTextToggleOff");
var projDescTextValue = 1;

projDescTextToggleOn.addEventListener("click", function(){
	projDescText.style.display = "inline-block";
	projDescTextToggleOn.style.display = "none";
	projDescTextValue = 1;
});

projDescTextToggleOff.addEventListener("click", function(){
	projDescText.style.display = "none";
	projDescTextToggleOn.style.display = "inline-block";
	projDescTextValue = 0;
});