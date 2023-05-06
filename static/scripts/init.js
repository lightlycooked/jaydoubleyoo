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
   // $('#mylastfm').mylastfm(); 



  let endpoint = 'https://api.spotify.com/v1/me/player/recently-played?limit=1';
  let token = 'BQC8CfcAGrwMN_0YNQieXNTg9joA86wwSCkZLmkZ8hkQdE-8P6BCUHa9haBFKi5TX_BbBF7pWmlzI7ZVXsiW6jt7V2NCrZnO3Ifv36QJDkVvvCrXSPr3EoRQ4A7KNCSIBRTn2TzBnwswf8S7h8UrTG1ROum_q-deUfIKUVlvtRXFAu72dNc_C4g';
  $.ajax({
    url: endpoint,
    type: 'GET',
    headers: {
        'Authorization' : 'Bearer ' + token
    },
    success: function(data) {

      $.each(data, function(index, item) {
        console.log("item: ", item.context.type);
        //now you can access properties using dot notation
      });


    }
  });


});
