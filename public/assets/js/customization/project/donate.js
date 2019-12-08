var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    	
// var donateComputed = <?php echo $donateComp ?>;
// var donateProgress= <?php echo $donateProg ?>;
// var donateAlternate= <?php echo $donateAlt ?>;
// var donateOrdered= <?php echo $donateOrd ?>;
// var donateUnordered= <?php echo $donateUno ?>;
// var id =1;
/* phpLeft */


var phpLeft = document.querySelector("#phpLeft");
var phpLeftToggleOn = document.querySelector(".phpLeftToggleOn");
var phpLeftToggleOff = document.querySelector(".phpLeftToggleOff");
//var phpLeftToggleValue = 1;


// if (donateComputed=0){
// 	phpLeft.style.display = "none";
// 	phpLeftToggleOn.style.display = "block";
// 	phpLeftToggleValue = 0;
// }else{
// 	phpLeft.style.display = "block";
// 	phpLeftToggleOn.style.display = "none";
// 	phpLeftToggleValue = 1;
// }


phpLeftToggleOn.addEventListener("mouseover", function(){
	phpLeftToggleOn.style.background = "white";
});

		

phpLeftToggleOn.addEventListener("click", function(){
	phpLeft.style.display = "block";
	phpLeftToggleOn.style.display = "none";
	phpLeftToggleValue = 1;
	createCookie("donateComputed", "1", "1");
});

phpLeftToggleOff.addEventListener("click", function(){
	phpLeft.style.display = "none";
	phpLeftToggleOn.style.display = "block";
	phpLeftToggleValue = 0;
	createCookie("donateComputed", "0", "1");
});


/* curOverGoal */


var curOverGoal = document.querySelector("#curOverGoal");
var curOverGoalToggleOn = document.querySelector(".curOverGoalToggleOn");
var curOverGoalToggleOff = document.querySelector(".curOverGoalToggleOff");
var curOverGoalToggleValue = 1;


curOverGoalToggleOn.addEventListener("click", function(){
	curOverGoal.style.display = "block";
	curOverGoalToggleOn.style.display = "none";
	curOverGoalToggleValue = 1;
	createCookie("donateProgress", "1", "1");
});

curOverGoalToggleOff.addEventListener("click", function(){
	curOverGoal.style.display = "none";
	curOverGoalToggleOn.style.display = "block";
	curOverGoalToggleValue = 0;
	createCookie("donateProgress", "0", "1");
});




/* Unordered */


var unordered = document.querySelector("#unordered");
var unorderedToggleOn = document.querySelector(".unorderedToggleOn");
var unorderedToggleOff = document.querySelector(".unorderedToggleOff");
var unorderedToggleValue = 1;

unorderedToggleOn.addEventListener("mouseover", function(){
	unorderedToggleOn.style.background = "white";
});
		

unorderedToggleOn.addEventListener("click", function(){
	unordered.style.display = "block";
	unorderedToggleOn.style.display = "none";
	unorderedToggleValue = 1;
	createCookie("donateUnordered", "1", "1");
});

unorderedToggleOff.addEventListener("click", function(){
	unordered.style.display = "none";
	unorderedToggleOn.style.display = "block";
	unorderedToggleValue = 0;
	createCookie("donateUnordered", "0", "1");
});


/* alternate */


var alternate = document.querySelector("#alternate");
var alternateToggleOn = document.querySelector(".alternateToggleOn");
var alternateToggleOff = document.querySelector(".alternateToggleOff");
var alternateToggleValue = 1;

alternateToggleOn.addEventListener("mouseover", function(){
	alternateToggleOn.style.background = "white";
});

alternateToggleOn.addEventListener("click", function(){
	alternate.style.display = "block";
	alternateToggleOn.style.display = "none";
	alternateToggleValue = 1;
	createCookie("donateAlternate", "1", "1");
});
		

alternateToggleOff.addEventListener("click", function(){
	alternate.style.display = "none";
	alternateToggleOn.style.display = "block";
	alternateToggleValue = 0;
	createCookie("donateAlternate", "0", "1");
});


/* ordered */


var ordered = document.querySelector("#ordered");
var orderedToggleOn = document.querySelector(".orderedToggleOn");
var orderedToggleOff = document.querySelector(".orderedToggleOff");
var orderedToggleValue = 1;


orderedToggleOn.addEventListener("mouseover", function(){
	orderedToggleOn.style.background = "white";
});

orderedToggleOn.addEventListener("click", function(){
	ordered.style.display = "block";
	orderedToggleOn.style.display = "none";
	orderedToggleValue = 1;
	createCookie("donateOrdered", "1", "1");
});
		

orderedToggleOff.addEventListener("click", function(){
	ordered.style.display = "none";
	orderedToggleOn.style.display = "block";
	orderedToggleValue = 0;
	createCookie("donateOrdered", "0", "1");
});

function createCookie(name, value, days) {
  	var expires;
   	var date = new Date();
   	date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
  	expires = "expires=" + date.toGMTString();
  	document.cookie = name + "=" + value + expires + "; path=/";
}