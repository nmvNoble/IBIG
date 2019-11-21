
/* Unordered */


var unordered = document.querySelector("#unordered");
var unorderedToggleOn = document.querySelector(".unorderedToggleOn");
var unorderedToggleOff = document.querySelector(".unorderedToggleOff");


unorderedToggleOn.addEventListener("mouseover", function(){
	unorderedToggleOn.style.background = "white";
});

unorderedToggleOn.addEventListener("click", function(){
	unordered.style.display = "block";
	unorderedToggleOn.style.display = "none";
});

unorderedToggleOff.addEventListener("click", function(){
	unordered.style.display = "none";
	unorderedToggleOn.style.display = "block";
});


/* alternate */


var alternate = document.querySelector("#alternate");
var alternateToggleOn = document.querySelector(".alternateToggleOn");
var alternateToggleOff = document.querySelector(".alternateToggleOff");


alternateToggleOn.addEventListener("mouseover", function(){
	alternateToggleOn.style.background = "white";
});

alternateToggleOn.addEventListener("click", function(){
	alternate.style.display = "block";
	alternateToggleOn.style.display = "none";
});

alternateToggleOff.addEventListener("click", function(){
	alternate.style.display = "none";
	alternateToggleOn.style.display = "block";
});


/* ordered */


var ordered = document.querySelector("#ordered");
var orderedToggleOn = document.querySelector(".orderedToggleOn");
var orderedToggleOff = document.querySelector(".orderedToggleOff");


orderedToggleOn.addEventListener("mouseover", function(){
	orderedToggleOn.style.background = "white";
});

orderedToggleOn.addEventListener("click", function(){
	ordered.style.display = "block";
	orderedToggleOn.style.display = "none";
});

orderedToggleOff.addEventListener("click", function(){
	ordered.style.display = "none";
	orderedToggleOn.style.display = "block";
});


/* phpLeft */


var phpLeft = document.querySelector("#phpLeft");
var phpLeftToggleOn = document.querySelector(".phpLeftToggleOn");
var phpLeftToggleOff = document.querySelector(".phpLeftToggleOff");


phpLeftToggleOn.addEventListener("mouseover", function(){
	phpLeftToggleOn.style.background = "white";
});

phpLeftToggleOn.addEventListener("click", function(){
	phpLeft.style.display = "block";
	phpLeftToggleOn.style.display = "none";
});

phpLeftToggleOff.addEventListener("click", function(){
	phpLeft.style.display = "none";
	phpLeftToggleOn.style.display = "block";
});


/* curOverGoal */


var curOverGoal = document.querySelector("#curOverGoal");
var curOverGoalToggleOn = document.querySelector(".curOverGoalToggleOn");
var curOverGoalToggleOff = document.querySelector(".curOverGoalToggleOff");


curOverGoalToggleOn.addEventListener("mouseover", function(){
	curOverGoalToggleOn.style.background = "white";
});

curOverGoalToggleOn.addEventListener("click", function(){
	curOverGoal.style.display = "block";
	curOverGoalToggleOn.style.display = "none";
});

curOverGoalToggleOff.addEventListener("click", function(){
	curOverGoal.style.display = "none";
	curOverGoalToggleOn.style.display = "block";
});



/* projProg ================================== NOT WORKING!!! DO NOT PUT WORKING CODE UNDER THIS */


var projProg = document.querySelector(".projProg");
var projProgToggleOn = document.querySelector(".projProgToggleOn");
var projProgToggleOff = document.querySelector(".projProgToggleOff");


projProgToggleOn.addEventListener("mouseover", function(){
	projProgToggleOn.style.background = "white";
});

projProgToggleOn.addEventListener("click", function(){
	projProg.style.display = "block";
	projProgToggleOn.style.display = "none";
});

projProgToggleOff.addEventListener("click", function(){
	alert("projProg");
	projProg.style.display = "none";
	projProgToggleOn.style.display = "block";
});


/*---------------------------------------------------------------------------*/


/* spare */


var spare = document.querySelector("#spare");
var spareToggleOn = document.querySelector(".spareToggleOn");
var spareToggleOff = document.querySelector(".spareToggleOff");


spareToggleOn.addEventListener("mouseover", function(){
	spareToggleOn.style.background = "white";
});

spareToggleOn.addEventListener("click", function(){
	spare.style.display = "block";
	spareToggleOn.style.display = "none";
});

spareToggleOff.addEventListener("click", function(){
	spare.style.display = "none";
	spareToggleOn.style.display = "block";
});