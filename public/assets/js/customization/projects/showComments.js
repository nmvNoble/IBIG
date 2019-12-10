/* userAnonymity */

var userAnonymityOn = document.querySelector("#userAnonymityOn");
var userAnonymityOff = document.querySelector("#userAnonymityOff");
var userAnonymityToggleOn = document.querySelector(".userAnonymityToggleOn");
var userAnonymityToggleOff = document.querySelector(".userAnonymityToggleOff");

// if (userAnonymityVal==0){
// 	userAnonymityOff.style.display = "none";
// 	userAnonymityOn.style.display = "inline-block";
// }else{
// 	userAnonymityOff.style.display = "inline-block";
// 	userAnonymityOn.style.display = "none";
// }


userAnonymityToggleOn.addEventListener("click", function(){
	userAnonymityOn.style.display = "block";
	userAnonymityOff.style.display = "none";
	createCookie("userAnonymity", "1", "1");
});

userAnonymityToggleOff.addEventListener("click", function(){
	userAnonymityOn.style.display = "none";
	userAnonymityOff.style.display = "block";
	createCookie("userAnonymity", "0", "1");
});

function createCookie(name, value, days) {
  	var expires;
   	var date = new Date();
   	date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
  	expires = "expires=" + date.toGMTString();
  	document.cookie = name + "=" + value + expires + "; path=/";
}