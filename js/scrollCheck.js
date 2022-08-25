/*
==================================================================================
Name: ScrollCheck.js

Function: on scroll, add class to element that has the attribute 'data-scroll'


Simple explanation:
-------------------
when addAmination link (tickbox) is clicked, the data-bool attribute is set to true
therefore allowing the addition of an attribute 'data-scroll' to selected elements 
===================================================================================
*/

   


	  $(document).ready(function(){


	  	$(function(){

	  		// centerScreen = offset - (winHeight/2) to position element in center of screen

            $(window).scroll(function(){
              $('[data-scroll]').each(function() {
	  			var scrollVal = $(window).scrollTop();
	  			var elemHeight = $(this).height();
				var elementOffset = $(this).offset().top;
				var halfWayPoint = $(window).height()/2;
				var go = elementOffset - halfWayPoint;
				
               
					if(scrollVal > go){
						$(this).addClass($(this).attr('data-scroll'));
						return true;
					}

				});
		  	  });
            });	
		});  

	 

  	


// When the user scrolls down resize the navbar's padding by adding a class

window.addEventListener("load", scrollFunction);
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
	document.querySelector(".navContainer").classList.add("navShrink");
  } else { 
	document.querySelector(".navContainer").classList.remove("navShrink");
  }
}


  








