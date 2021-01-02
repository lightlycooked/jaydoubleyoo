(function($) {
	/*
		jquery.twitter.js v1.0
		Last updated: 26 October 2008

		Created by Damien du Toit
		http://coda.co.za/blog/2008/10/26/jquery-plugin-for-twitter

		Licensed under a Creative Commons Attribution-Non-Commercial 3.0 Unported License
		http://creativecommons.org/licenses/by-nc/3.0/
	*/

	$.fn.getTwitter = function(options) {
		var o = $.extend({}, $.fn.getTwitter.defaults, options);
	
		// hide container element
		$(this).hide();
	
		// add heading to container element
		if (o.showHeading) {
			$(this).append('<h2>'+o.headingText+'</h2>');
		}

		// add twitter list to container element
		$(this).append('<ul id="twitter_update_list"><li></li></ul>');

		// hide twitter list
		$("ul#twitter_update_list").hide();

		// add preLoader to container element
		var pl = $('<p id="'+o.preloaderId+'">'+o.loaderText+'</p>');
		$(this).append(pl);

		// add Twitter profile link to container element
		if (o.showProfileLink) {
			$(this).append('<span><a id="profileLink" href="http://twitter.com/'+o.userName+'">http://twitter.com/'+o.userName+'</a></span>');
		}

		// show container element
		$(this).show();
	
		$.getScript("http://twitter.com/javascripts/blogger.js");
		$.getScript("https://api.twitter.com/1/statuses/user_timeline.json?screen_name="+o.userName+"&count="+o.numTweets, function() {
			// remove preLoader from container element
			$(pl).remove();

			// show twitter list
			if (o.slideIn) {
				$("ul#twitter_update_list").slideDown(1000);
			}
			else {
				$("ul#twitter_update_list").show();
			}

			// give first list item a special class
			$("ul#twitter_update_list li:first").addClass("firstTweet");

			// give last list item a special class
			$("ul#twitter_update_list li:last").addClass("lastTweet");
			
			// give first list item a special class
			$("ul#twitter_update_list li a").removeAttr("style");
		});
	};

	// plugin defaults
	$.fn.getTwitter.defaults = {
				userName: "jdubcreative",
				numTweets: 2,
				preloaderId: "preloader",
				loaderText: "Retrieving tweets...",
				slideIn: false,
				showHeading: false,
				headingText: "Latest Tweets",
				showProfileLink: false
	};
	
	
		
			
			
})(jQuery);