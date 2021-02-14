/* eslint-env jquery */

$(document).ready(function(){


  // BACK TO TOP
	$(function() {
    let toTop = $('.back-top');

    // hide #back-top first
    toTop.hide();
		
    $(window).scroll(function () {
			if ($(this).scrollTop() > 300) {
				toTop.fadeIn();
			} else {
				toTop.fadeOut();
			}
		});

		toTop.click(function () {
			$('body,html').animate({
				scrollTop: 0,
				easing: 'ease-in-out'
			}, 1000);
			return false;
		});
	});

  // HEADER BLUR EFFECT ON SCROLL
  $(function() {
    let header = $('.header');

    $(window).scroll(function () {
      if ($(this).scrollTop() > 180) {
        header.addClass('has-backdrop');
      } else {
        header.removeClass('has-backdrop');
      }
    });
  });
  
  // TESTIMONIALS RANDOMIZER
  $(function() {
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
  	if( $('section').hasClass('section-testimonials')) {
  	    var $all = $('.section-testimonials .card');
  	    $all.removeClass('selected');
  	    $(shuffle($all).slice(0, 1)).addClass('selected');
  	}
  });

  // Lightbox
	$('.card .internal').magnificPopup({type:'image'});

   // MyLast.FM
   $('#mylastfm').mylastfm();
   
});
