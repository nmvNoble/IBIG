/* projDesc */


var projDescTab = document.querySelector("#projDescTab");
var projDescTabToggleOn = document.querySelector(".projDescTabToggleOn");
var projDescTabToggleOff = document.querySelector(".projDescTabToggleOff");


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
	createCookie("projDescTab", "1", "1");

});

projDescTabToggleOff.addEventListener("click", function(){
	projDescTab.style.display = "none";
	projDescTabToggleOn.style.display = "inline-block";
	createCookie("projDescTab", "0", "1");
});


/* projUpdate */


var projUpdateTab = document.querySelector("#projUpdateTab");
var projUpdateTabToggleOn = document.querySelector(".projUpdateTabToggleOn");
var projUpdateTabToggleOff = document.querySelector(".projUpdateTabToggleOff");

if (projUpdateTabVal==0){
	projUpdateTab.style.display = "none";
	projUpdateTabToggleOn.style.display = "inline-block";
}else{
	projUpdateTab.style.display = "inline-block";
	projUpdateTabToggleOn.style.display = "none";
}

projUpdateTabToggleOn.addEventListener("click", function(){
	projUpdateTab.style.display = "inline-block";
	projUpdateTabToggleOn.style.display = "none";
	createCookie("projectUpdateTab", "1", "1");
});

projUpdateTabToggleOff.addEventListener("click", function(){
	projUpdateTab.style.display = "none";
	projUpdateTabToggleOn.style.display = "inline-block";
	createCookie("projectUpdateTab", "0", "1");
});


/* projComnt */


var projComntTab = document.querySelector("#projComntTab");
var projComntTabToggleOn = document.querySelector(".projComntTabToggleOn");
var projComntTabToggleOff = document.querySelector(".projComntTabToggleOff");

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
	createCookie("projComntTab", "1", "1");
});

projComntTabToggleOff.addEventListener("click", function(){
	projComntTab.style.display = "none";
	projComntTabToggleOn.style.display = "inline-block";
	createCookie("projComntTab", "0", "1");
});


/* projDntn */


var projDntnTab = document.querySelector("#projDntnTab");
var projDntnTabToggleOn = document.querySelector(".projDntnTabToggleOn");
var projDntnTabToggleOff = document.querySelector(".projDntnTabToggleOff");

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
	createCookie("projDntnTab", "1", "1");
});

projDntnTabToggleOff.addEventListener("click", function(){
	projDntnTab.style.display = "none";
	projDntnTabToggleOn.style.display = "inline-block";
	createCookie("projDntnTab", "0", "1");
});


/*---------------------------------------------------------------------------*/



/* spare */


var spareTab = document.querySelector("#spareTab");
var spareTabToggleOn = document.querySelector(".spareTabToggleOn");
var spareTabToggleOff = document.querySelector(".spareTabToggleOff");

spareTabToggleOn.addEventListener("click", function(){
	spareTab.style.display = "inline-block";
	spareTabToggleOn.style.display = "none";
	createCookie("spareTab", "1", "1");
});

spareTabToggleOff.addEventListener("click", function(){
	spareTab.style.display = "none";
	spareTabToggleOn.style.display = "inline-block";
	createCookie("spareTab", "0", "1");
});


function createCookie(name, value, days) {
  	var expires;
   	var date = new Date();
   	date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
  	expires = "expires=" + date.toGMTString();
  	document.cookie = name + "=" + value + expires + "; path=/";
}