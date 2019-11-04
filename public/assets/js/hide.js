var count = 0;
var oHide = document.querySelector(".o-hide");
var toggle = document.querySelector(".toggle");


toggle.addEventListener("mouseover", function(){
    count++;
    //oHide.innerHTML = '<p>' + count + '</p>';
	toggle.style.background = "white";
});

toggle.addEventListener("click", function(){
	oHide.style.display = "block";
	//alert("hide");
});