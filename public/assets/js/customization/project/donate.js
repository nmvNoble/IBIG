var donateComputed;
var donateProgress;
var donateAlternate;
var donateOrdered;
var donateUnordered;

$.ajax({
    url: 'getUser',
    type :'get',
    dataType: 'json',
    success: function (response) {
        donateComputed = response['data'].donateComputed;
        alert("gud");
    },
    error: function (response) {
        alert("ded " + response);
        }
});

function myCallback(response) {
  result = response;
  console.log("Inside ajax: "+result);                
  // Do whatever you need with result variable
  alert(result.donateComputed)
}
var id =1;
$.ajax({
  type: "GET",
  url: 'getUser',
  datatype: "json",
  success: myCallback,
});
/* phpLeft */


var phpLeft = document.querySelector("#phpLeft");
var phpLeftToggleOn = document.querySelector(".phpLeftToggleOn");
var phpLeftToggleOff = document.querySelector(".phpLeftToggleOff");
var phpLeftToggleValue = 1;


phpLeftToggleOn.addEventListener("mouseover", function(){
	phpLeftToggleOn.style.background = "white";
});

$(document).on("click",".phpLeftToggleOn", function(){
	phpLeft.style.display = "block";
	phpLeftToggleOn.style.display = "none";
	phpLeftToggleValue = 1;
	$.ajax({
      url: 'updateUser',
      type: 'post',
      data: {editid : id,type: 1, update: phpLeftToggleValue},
      success: function(response){
        alert(response);
        alert(phpLeftToggleValue +'ded');
      },
      error: function (ex) {
        alert("ded error");
      }
    });
	

});

// phpLeftToggleOn.addEventListener("click", function(){
// 	phpLeft.style.display = "block";
// 	phpLeftToggleOn.style.display = "none";
// 	phpLeftToggleValue = 1;
// });

phpLeftToggleOff.addEventListener("click", function(){
	phpLeft.style.display = "none";
	phpLeftToggleOn.style.display = "block";
	phpLeftToggleValue = 0;
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
});

curOverGoalToggleOff.addEventListener("click", function(){
	curOverGoal.style.display = "none";
	curOverGoalToggleOn.style.display = "block";
	curOverGoalToggleValue = 0;
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
});

unorderedToggleOff.addEventListener("click", function(){
	unordered.style.display = "none";
	unorderedToggleOn.style.display = "block";
	unorderedToggleValue = 0;
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
});

alternateToggleOff.addEventListener("click", function(){
	alternate.style.display = "none";
	alternateToggleOn.style.display = "block";
	alternateToggleValue = 0;
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
});

orderedToggleOff.addEventListener("click", function(){
	ordered.style.display = "none";
	orderedToggleOn.style.display = "block";
	orderedToggleValue = 0;
});


