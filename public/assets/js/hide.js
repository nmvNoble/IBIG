var count = 0;
var oHide = document.querySelector(".o-hide");
var toggleOn = document.querySelector(".toggleOn");
var toggleOff = document.querySelector(".toggleOff");


toggleOn.addEventListener("mouseover", function(){
    count++;
    //oHide.innerHTML = '<p>' + count + '</p>';
	toggleOn.style.background = "white";
});

toggleOn.addEventListener("click", function(){
	oHide.style.display = "block";
	toggleOn.style.display = "none";
});

toggleOff.addEventListener("click", function(){
	oHide.style.display = "none";
	toggleOn.style.display = "block";
});