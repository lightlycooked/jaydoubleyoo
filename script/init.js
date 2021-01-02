$(document).ready(function(){

// hide #back-top first
	$('.back-top').hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 300) {
				$('.back-top').fadeIn();
			} else {
				$('.back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('.back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0,
				easing: 'ease-out'
			}, 5000);
			return false;
		});
	});
	
	// SPONSORS SHUFFLE ON HOMEPAGE
	
	function shuffle(array) {
	  var m = array.length, t, i;

	  // While there remain elements to shuffle…
	  while (m) {

	    // Pick a remaining element…
	    i = Math.floor(Math.random() * m--);

	    // And swap it with the current element.
	    t = array[m];
	    array[m] = array[i];
	    array[i] = t;
	  }

	  return array;
	}

	if( $('section').hasClass('testimonials')) {
	    var $all = $(".testimonials .testimonial").removeClass("selected");
	    $(shuffle($all).slice(0, 1)).addClass("selected");
	}

	// SPONSORS SHUFFLE ON HOMEPAGE

	// Lightbox
	
	 $('.project .internal').magnificPopup({type:'image'});

	 // MyLast.FM
	// $('#mylastfm').mylastfm();
	 
	 // Twitter Feed
//	$('#mytwitter').getTwitter();



(function(){

  var parallax = document.querySelectorAll(".parallax"),
      speed = 0.1;

  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){

      var windowYOffset = window.pageYOffset,
          elBackgrounPos = "50% -" + (windowYOffset * speed) + "px";
      
      el.style.backgroundPosition = elBackgrounPos;

    });
  };

})();



	// var paraLacks = function(){
	// 	var s = $(window).scrollTop();
	// 	$('.parallax .container').css({
	// 		'transform' :'translateY(' + (s/6) + 'px)',
	// 		'opacity' : 1-(s/600),
	// 	});
	// };


	// paraLacks();

	// $(window).scroll(function() {
	// 	paraLacks();
	// });

});