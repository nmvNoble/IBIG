/* userOwnedTab */


var userOwnedTab = document.querySelector("#userOwnedTab");
var userOwnedTabToggleOn = document.querySelector(".userOwnedTabToggleOn");
var userOwnedTabToggleOff = document.querySelector(".userOwnedTabToggleOff");


if (userOwnedTabVal==0){
	userOwnedTab.style.display = "none";
	userOwnedTabToggleOn.style.display = "inline-block";
}else{
	userOwnedTab.style.display = "inline-block";
	userOwnedTabToggleOn.style.display = "none";
}
userOwnedTabToggleOn.addEventListener("click", function(){
	userOwnedTab.style.display = "inline-block";
	userOwnedTabToggleOn.style.display = "none";
	createCookie("userOwnedTab", "1", "1");

});

userOwnedTabToggleOff.addEventListener("click", function(){
	userOwnedTab.style.display = "none";
	userOwnedTabToggleOn.style.display = "inline-block";
	createCookie("userOwnedTab", "0", "1");
});


/* userDonatedTab */


var userDonatedTab = document.querySelector("#userDonatedTab");
var userDonatedTabToggleOn = document.querySelector(".userDonatedTabToggleOn");
var userDonatedTabToggleOff = document.querySelector(".userDonatedTabToggleOff");


if (userDonatedTabVal==0){
	userDonatedTab.style.display = "none";
	userDonatedTabToggleOn.style.display = "inline-block";
}else{
	userDonatedTab.style.display = "inline-block";
	userDonatedTabToggleOn.style.display = "none";
}
userDonatedTabToggleOn.addEventListener("click", function(){
	userDonatedTab.style.display = "inline-block";
	userDonatedTabToggleOn.style.display = "none";
	createCookie("userDonatedTab", "1", "1");

});

userDonatedTabToggleOff.addEventListener("click", function(){
	userDonatedTab.style.display = "none";
	userDonatedTabToggleOn.style.display = "inline-block";
	createCookie("userDonatedTab", "0", "1");
});





