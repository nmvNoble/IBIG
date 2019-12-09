/* projDesc */


var projDescTab = document.querySelector("#projDescTab");
var projDescTabToggleOn = document.querySelector(".projDescTabToggleOn");
var projDescTabToggleOff = document.querySelector(".projDescTabToggleOff");
var projDescTabValue = 1;


if (projDescTabVal==0){
	projDescTab.style.display = "none";
	projDescTabToggleOn.style.display = "inline-block";
}else{
	projDescTab.style.display = "inline-block";
	projDescTabToggleOn.style.display = "none";
}
projDescTabToggleOn.addEventListener("click", function(){
	projDescTab.style.display = "inline-block";
	projDescTabToggleOn.style.display = "none";
	projDescTabValue = 1;
	createCookie("projDescTab", "1", "1");

});

projDescTabToggleOff.addEventListener("click", function(){
	projDescTab.style.display = "none";
	projDescTabToggleOn.style.display = "inline-block";
	projDescTabValue = 0;
	createCookie("projDescTab", "0", "1");
});


/* projUpdate */


var projUpdateTab = document.querySelector("#projUpdateTab");
var projUpdateTabToggleOn = document.querySelector(".projUpdateTabToggleOn");
var projUpdateTabToggleOff = document.querySelector(".projUpdateTabToggleOff");
var projUpdateTabValue = 1;

if (projectUpdateTabVal==0){
	projectUpdateTab.style.display = "none";
	projUpdateTabToggleOn.style.display = "inline-block";
}else{
	projectUpdateTab.style.display = "inline-block";
	projUpdateTabToggleOn.style.display = "none";
}

projUpdateTabToggleOn.addEventListener("click", function(){
	projUpdateTab.style.display = "inline-block";
	projUpdateTabToggleOn.style.display = "none";
	projUpdateTabValue = 1;
	createCookie("projectUpdateTab", "1", "1");
});

projUpdateTabToggleOff.addEventListener("click", function(){
	projUpdateTab.style.display = "none";
	projUpdateTabToggleOn.style.display = "inline-block";
	projUpdateTabValue = 0;
	createCookie("projectUpdateTab", "0", "1");
});


/* projComnt */


var projComntTab = document.querySelector("#projComntTab");
var projComntTabToggleOn = document.querySelector(".projComntTabToggleOn");
var projComntTabToggleOff = document.querySelector(".projComntTabToggleOff");
var projComntTabValue = 1;

if (projComntTabVal==0){
	projComntTab.style.display = "none";
	projComntTabToggleOn.style.display = "inline-block";
}else{
	projComntTab.style.display = "inline-block";
	projComntTabToggleOn.style.display = "none";
}

projComntTabToggleOn.addEventListener("click", function(){
	projComntTab.style.display = "inline-block";
	projComntTabToggleOn.style.display = "none";
	projComntTabValue = 1;
	createCookie("projComntTab", "1", "1");
});

projComntTabToggleOff.addEventListener("click", function(){
	projComntTab.style.display = "none";
	projComntTabToggleOn.style.display = "inline-block";
	projComntTabValue = 0;
	createCookie("projComntTab", "0", "1");
});


/* projDntn */


var projDntnTab = document.querySelector("#projDntnTab");
var projDntnTabToggleOn = document.querySelector(".projDntnTabToggleOn");
var projDntnTabToggleOff = document.querySelector(".projDntnTabToggleOff");
var projDntnTabValue = 1;

if (projDntnTabVal==0){
	projDntnTab.style.display = "none";
	projDntnTabToggleOn.style.display = "inline-block";
}else{
	projDntnTab.style.display = "inline-block";
	projDntnTabToggleOn.style.display = "none";
}

projDntnTabToggleOn.addEventListener("click", function(){
	projDntnTab.style.display = "inline-block";
	projDntnTabToggleOn.style.display = "none";
	projDntnTabValue = 1;
	createCookie("projDntnTab", "1", "1");
});

projDntnTabToggleOff.addEventListener("click", function(){
	projDntnTab.style.display = "none";
	projDntnTabToggleOn.style.display = "inline-block";
	projDntnTabValue = 0;
	createCookie("projDntnTab", "0", "1");
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
	createCookie("spareTab", "1", "1");
});

spareTabToggleOff.addEventListener("click", function(){
	spareTab.style.display = "none";
	spareTabToggleOn.style.display = "inline-block";
	spareTabValue = 0;
	createCookie("spareTab", "0", "1");
});


function createCookie(name, value, days) {
  	var expires;
   	var date = new Date();
   	date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
  	expires = "expires=" + date.toGMTString();
  	document.cookie = name + "=" + value + expires + "; path=/";
}