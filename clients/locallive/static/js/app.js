jQuery(function($) {
    var $twitterLink = $('.twitter-nav-link');
    var $scheduleContent = $('.schedule-content');
    var $scheduleFeed = $('.schedule-feed');
    var $twitterFeed = $('.twitter-feed');

	function feedToggle() {
    	console.log('twitter link click');
    	
    	if( $twitterFeed.hasClass('active') ) {
    		$scheduleContent.find('section').removeClass('active');
       		$scheduleContent.find($scheduleFeed).addClass('active');
    	} else {
    		$scheduleContent.find('section').removeClass('active');
    	 	$scheduleContent.find($twitterFeed).addClass('active');
		}
	}
	
    $twitterLink.on('click', function(e){
    	e.preventDefault();
    	feedToggle();
    });
});