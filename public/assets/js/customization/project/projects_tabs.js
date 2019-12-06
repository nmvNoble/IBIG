/* projDesc */


var projDescTab = document.querySelector("#projDescTab");
var projDescTabToggleOn = document.querySelector(".projDescTabToggleOn");
var projDescTabToggleOff = document.querySelector(".projDescTabToggleOff");
var projDescTabValue = 1;

projDescTabToggleOn.addEventListener("click", function(){
	projDescTab.style.display = "inline-block";
	projDescTabToggleOn.style.display = "none";
	projDescTabValue = 1;
});

projDescTabToggleOff.addEventListener("click", function(){
	projDescTab.style.display = "none";
	projDescTabToggleOn.style.display = "inline-block";
	projDescTabValue = 0;
});


/* projUpdate */


var projUpdateTab = document.querySelector("#projUpdateTab");
var projUpdateTabToggleOn = document.querySelector(".projUpdateTabToggleOn");
var projUpdateTabToggleOff = document.querySelector(".projUpdateTabToggleOff");
var projUpdateTabValue = 1;

projUpdateTabToggleOn.addEventListener("click", function(){
	projUpdateTab.style.display = "inline-block";
	projUpdateTabToggleOn.style.display = "none";
	projUpdateTabValue = 1;
});

projUpdateTabToggleOff.addEventListener("click", function(){
	projUpdateTab.style.display = "none";
	projUpdateTabToggleOn.style.display = "inline-block";
	projUpdateTabValue = 0;
});


/* projComnt */


var projComntTab = document.querySelector("#projComntTab");
var projComntTabToggleOn = document.querySelector(".projComntTabToggleOn");
var projComntTabToggleOff = document.querySelector(".projComntTabToggleOff");
var projComntTabValue = 1;

projComntTabToggleOn.addEventListener("click", function(){
	projComntTab.style.display = "inline-block";
	projComntTabToggleOn.style.display = "none";
	projComntTabValue = 1;
});

projComntTabToggleOff.addEventListener("click", function(){
	projComntTab.style.display = "none";
	projComntTabToggleOn.style.display = "inline-block";
	projComntTabValue = 0;
});


/* projDntn */


var projDntnTab = document.querySelector("#projDntnTab");
var projDntnTabToggleOn = document.querySelector(".projDntnTabToggleOn");
var projDntnTabToggleOff = document.querySelector(".projDntnTabToggleOff");
var projDntnTabValue = 1;

projDntnTabToggleOn.addEventListener("click", function(){
	projDntnTab.style.display = "inline-block";
	projDntnTabToggleOn.style.display = "none";
	projDntnTabValue = 1;
});

projDntnTabToggleOff.addEventListener("click", function(){
	projDntnTab.style.display = "none";
	projDntnTabToggleOn.style.display = "inline-block";
	projDntnTabValue = 0;
});


/*---------------------------------------------------------------------------*/



/* spare */


var spareTab = document.querySelector("#spareTab");
var spareTabToggleOn = document.querySelector(".spareTabToggleOn");
var spareTabToggleOff = document.querySelector(".spareTabToggleOff");
var spareTabValue = 1;

spareTabToggleOn.addEventListener("click", function(){
	spareTab.style.display = "inline-block";
	spareTabToggleOn.style.display = "none";
	spareTabValue = 1;
});

spareTabToggleOff.addEventListener("click", function(){
	spareTab.style.display = "none";
	spareTabToggleOn.style.display = "inline-block";
	spareTabValue = 0;
});
