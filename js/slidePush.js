/*
=============================================
  Developed by Code Cobber for your enjoyment
  http://www.codecobber.co.uk
  Licened under the Code Cobber paid-licence:  
  (see www.codecobber.co.uk/paid-terms.php)
=============================================
*/


var menuFlag = 0;

function navFunction() {
	var tp = document.getElementById("topNav");
	if (tp.className === "topNav") {
	  tp.className += " responsive";
	} else {
	  tp.className = "topNav";
	}
}




