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
	userAnonymityOn.style.display = "inline-block";
	userAnonymityOff.style.display = "none";
	createCookie("userAnonymity", "1", "1");
});

userAnonymityToggleOff.addEventListener("click", function(){
	userAnonymityOn.style.display = "none";
	userAnonymityOff.style.display = "inline-block";
	createCookie("userAnonymity", "0", "1");
});

function createCookie(name, value, days) {
  	var expires;
   	var date = new Date();
   	date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
  	expires = "expires=" + date.toGMTString();
  	document.cookie = name + "=" + value + expires + "; path=/";
}


/* donationNote */


var donationNote = document.querySelector("#donationNote");
var donationNoteToggleOn = document.querySelector(".donationNoteToggleOn");
var donationNoteToggleOff = document.querySelector(".donationNoteToggleOff");

// if (donationNoteVal==0){
// 	donationNote.style.display = "none";
// 	donationNoteToggleOn.style.display = "block";
// }else{
// 	donationNote.style.display = "block";
// 	donationNoteToggleOn.style.display = "none";
// }

donationNoteToggleOn.addEventListener("click", function(){
	donationNote.style.display = "block";
	donationNoteToggleOn.style.display = "none";
	createCookie("donationNote", "1", "1");
});

donationNoteToggleOff.addEventListener("click", function(){
	donationNote.style.display = "none";
	donationNoteToggleOn.style.display = "block";
	createCookie("donationNote", "0", "1");
});