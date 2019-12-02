/* donateNotif */


var donateNotif = document.querySelector("#donateNotif");
var donateNotifToggleOn = document.querySelector(".donateNotifToggleOn");
var donateNotifToggleOff = document.querySelector(".donateNotifToggleOff");
var donateNotifToggleValue = 1;

donateNotifToggleOn.addEventListener("click", function(){
	donateNotif.style.display = "inline-block";
	donateNotifToggleOn.style.display = "none";
	donateNotifToggleValue = 1;
});

donateNotifToggleOff.addEventListener("click", function(){
	donateNotif.style.display = "none";
	donateNotifToggleOn.style.display = "inline-block";
	donateNotifToggleValue = 0;
});