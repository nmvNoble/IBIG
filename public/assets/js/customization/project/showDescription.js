/* description */


var projDescTab = document.querySelector("#projDescTab");
var projDescTabToggleOn = document.querySelector(".projDescTabToggleOn");
var projDescTabToggleOff = document.querySelector(".projDescTabToggleOff");

projDescTabToggleOn.addEventListener("click", function(){
	projDescTab.style.display = "inline-block";
	projDescTabToggleOn.style.display = "none";
});

projDescTabToggleOff.addEventListener("click", function(){
	projDescTab.style.display = "none";
	projDescTabToggleOn.style.display = "inline-block";
});


/* description */


var projDescText = document.querySelector("#projDescText");
var projDescTextToggleOn = document.querySelector(".projDescTextToggleOn");
var projDescTextToggleOff = document.querySelector(".projDescTextToggleOff");

projDescTextToggleOn.addEventListener("click", function(){
	projDescText.style.display = "block";
	projDescTextToggleOn.style.display = "none";
});

projDescTextToggleOff.addEventListener("click", function(){
	projDescText.style.display = "none";
	projDescTextToggleOn.style.display = "block";
});


/*---------------------------------------------------------------------------*/


/* spare */


var spare = document.querySelector("#spare");
var spareToggleOn = document.querySelector(".spareToggleOn");
var spareToggleOff = document.querySelector(".spareToggleOff");


spareToggleOn.addEventListener("mouseover", function(){
	spareToggleOn.style.background = "white";
});

spareToggleOn.addEventListener("click", function(){
	spare.style.display = "block";
	spareToggleOn.style.display = "none";
});

spareToggleOff.addEventListener("click", function(){
	spare.style.display = "none";
	spareToggleOn.style.display = "block";
});