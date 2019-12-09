/* donateNotif */


var donateNotif = document.querySelector("#donateNotif");
var donateNotifToggleOn = document.querySelector(".donateNotifToggleOn");
var donateNotifToggleOff = document.querySelector(".donateNotifToggleOff");
var donateNotifToggleValue = 1;


if (donateNotifVal==0){
	donateNotif.style.display = "none";
	donateNotifToggleOn.style.display = "inline-block";
}else{
	donateNotif.style.display = "inline-block";
	donateNotifToggleOn.style.display = "none";
}

donateNotifToggleOn.addEventListener("click", function(){
	donateNotif.style.display = "inline-block";
	donateNotifToggleOn.style.display = "none";
	donateNotifToggleValue = 1;
	createCookie("donateNotif", "1", "1");
});

donateNotifToggleOff.addEventListener("click", function(){
	donateNotif.style.display = "none";
	donateNotifToggleOn.style.display = "inline-block";
	donateNotifToggleValue = 0;
	createCookie("donateNotif", "0", "1");
});


function createCookie(name, value, days) {
  	var expires;
   	var date = new Date();
   	date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
  	expires = "expires=" + date.toGMTString();
  	document.cookie = name + "=" + value + expires + "; path=/";
}