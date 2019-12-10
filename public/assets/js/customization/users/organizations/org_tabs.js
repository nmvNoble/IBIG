/* orgOwnedTab */


var orgOwnedTab = document.querySelector("#orgOwnedTab");
var orgOwnedTabToggleOn = document.querySelector(".orgOwnedTabToggleOn");
var orgOwnedTabToggleOff = document.querySelector(".orgOwnedTabToggleOff");


// if (orgOwnedTabVal==0){
// 	orgOwnedTab.style.display = "none";
// 	orgOwnedTabToggleOn.style.display = "inline-block";
// }else{
// 	orgOwnedTab.style.display = "inline-block";
// 	orgOwnedTabToggleOn.style.display = "none";
// }
orgOwnedTabToggleOn.addEventListener("click", function(){
	orgOwnedTab.style.display = "inline-block";
	orgOwnedTabToggleOn.style.display = "none";
	createCookie("orgOwnedTab", "1", "1");

});

orgOwnedTabToggleOff.addEventListener("click", function(){
	orgOwnedTab.style.display = "none";
	orgOwnedTabToggleOn.style.display = "inline-block";
	createCookie("orgOwnedTab", "0", "1");
});


/* orgDonatedTab */


var orgDonatedTab = document.querySelector("#orgDonatedTab");
var orgDonatedTabToggleOn = document.querySelector(".orgDonatedTabToggleOn");
var orgDonatedTabToggleOff = document.querySelector(".orgDonatedTabToggleOff");


// if (orgDonatedTabVal==0){
// 	orgDonatedTab.style.display = "none";
// 	orgDonatedTabToggleOn.style.display = "inline-block";
// }else{
// 	orgDonatedTab.style.display = "inline-block";
// 	orgDonatedTabToggleOn.style.display = "none";
// }
orgDonatedTabToggleOn.addEventListener("click", function(){
	orgDonatedTab.style.display = "inline-block";
	orgDonatedTabToggleOn.style.display = "none";
	createCookie("orgDonatedTab", "1", "1");

});

orgDonatedTabToggleOff.addEventListener("click", function(){
	orgDonatedTab.style.display = "none";
	orgDonatedTabToggleOn.style.display = "inline-block";
	createCookie("orgDonatedTab", "0", "1");
});


/* orgAboutUsTab */


var orgAboutUsTab = document.querySelector("#orgAboutUsTab");
var orgAboutUsTabToggleOn = document.querySelector(".orgAboutUsTabToggleOn");
var orgAboutUsTabToggleOff = document.querySelector(".orgAboutUsTabToggleOff");


// if (orgAboutUsTabVal==0){
// 	orgAboutUsTab.style.display = "none";
// 	orgAboutUsTabToggleOn.style.display = "inline-block";
// }else{
// 	orgAboutUsTab.style.display = "inline-block";
// 	orgAboutUsTabToggleOn.style.display = "none";
// }
orgAboutUsTabToggleOn.addEventListener("click", function(){
	orgAboutUsTab.style.display = "inline-block";
	orgAboutUsTabToggleOn.style.display = "none";
	createCookie("orgAboutUsTab", "1", "1");

});

orgAboutUsTabToggleOff.addEventListener("click", function(){
	orgAboutUsTab.style.display = "none";
	orgAboutUsTabToggleOn.style.display = "inline-block";
	createCookie("orgAboutUsTab", "0", "1");
});


/* orgAffiliatesTab */


var orgAffiliatesTab = document.querySelector("#orgAffiliatesTab");
var orgAffiliatesTabToggleOn = document.querySelector(".orgAffiliatesTabToggleOn");
var orgAffiliatesTabToggleOff = document.querySelector(".orgAffiliatesTabToggleOff");


// if (orgAffiliatesTabVal==0){
// 	orgAffiliatesTab.style.display = "none";
// 	orgAffiliatesTabToggleOn.style.display = "inline-block";
// }else{
// 	orgAffiliatesTab.style.display = "inline-block";
// 	orgAffiliatesTabToggleOn.style.display = "none";
// }
orgAffiliatesTabToggleOn.addEventListener("click", function(){
	orgAffiliatesTab.style.display = "inline-block";
	orgAffiliatesTabToggleOn.style.display = "none";
	createCookie("orgAffiliatesTab", "1", "1");

});

orgAffiliatesTabToggleOff.addEventListener("click", function(){
	orgAffiliatesTab.style.display = "none";
	orgAffiliatesTabToggleOn.style.display = "inline-block";
	createCookie("orgAffiliatesTab", "0", "1");
});