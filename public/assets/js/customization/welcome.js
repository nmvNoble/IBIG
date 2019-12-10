/* compareLocation */


var compareLocation = document.querySelector("#compareLocation");
var compareLocationToggleOn = document.querySelector(".compareLocationToggleOn");
var compareLocationToggleOff = document.querySelector(".compareLocationToggleOff");

if (compareLocationVal==0){
	compareLocation.style.display = "none";
	compareLocationToggleOn.style.display = "block";
}else{
	compareLocation.style.display = "block";
	compareLocationToggleOn.style.display = "none";
}

compareLocationToggleOn.addEventListener("click", function(){
	compareLocation.style.display = "block";
	compareLocationToggleOn.style.display = "none";
	createCookie("compareLocation", "1", "1");
});

compareLocationToggleOff.addEventListener("click", function(){
	compareLocation.style.display = "none";
	compareLocationToggleOn.style.display = "block";
	createCookie("compareLocation", "0", "1");
});


/* benefactorSpotLight */


var benefactorSpotLight = document.querySelector("#benefactorSpotLight");
var benefactorSpotLightToggleOn = document.querySelector(".benefactorSpotLightToggleOn");
var benefactorSpotLightToggleOff = document.querySelector(".benefactorSpotLightToggleOff");

if (benefactorSpotLightVal==0){
	benefactorSpotLight.style.display = "none";
	benefactorSpotLightToggleOn.style.display = "block";
}else{
	benefactorSpotLight.style.display = "block";
	benefactorSpotLightToggleOn.style.display = "none";
}

benefactorSpotLightToggleOn.addEventListener("click", function(){
	benefactorSpotLight.style.display = "block";
	benefactorSpotLightToggleOn.style.display = "none";
	createCookie("benefactorSpotLight", "1", "1");
});

benefactorSpotLightToggleOff.addEventListener("click", function(){
	benefactorSpotLight.style.display = "none";
	benefactorSpotLightToggleOn.style.display = "block";
	createCookie("benefactorSpotLight", "0", "1");
});


/* compareGender */


var compareGender = document.querySelector("#compareGender");
var compareGenderToggleOn = document.querySelector(".compareGenderToggleOn");
var compareGenderToggleOff = document.querySelector(".compareGenderToggleOff");

if (compareGenderVal==0){
	compareGender.style.display = "none";
	compareGenderToggleOn.style.display = "block";
}else{
	compareGender.style.display = "block";
	compareGenderToggleOn.style.display = "none";
}


compareGenderToggleOn.addEventListener("click", function(){
	compareGender.style.display = "block";
	compareGenderToggleOn.style.display = "none";
	createCookie("compareGender", "1", "1");
});

compareGenderToggleOff.addEventListener("click", function(){
	compareGender.style.display = "none";
	compareGenderToggleOn.style.display = "block";
	createCookie("compareGender", "0", "1");
});

function createCookie(name, value, days) {
  	var expires;
   	var date = new Date();
   	date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
  	expires = "expires=" + date.toGMTString();
  	document.cookie = name + "=" + value + expires + "; path=/";
}