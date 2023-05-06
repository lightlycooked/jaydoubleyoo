/*
    jquery.mylastfm.js v1.0
    Last updated: November 6 2011

    Created by Jason A. White 
    http://jasonawhite.com

    Licensed under a Creative Commons Attribution-Non-Commercial 3.0 Unported License
    http://creativecommons.org/licenses/by-nc/3.0/
    
    (The above CC license may change)
*/
(function($) {
  $.fn.mylastfm = function(type, options) { // Default Settings
    var defaults = {
      user: 'jdubcreative',
      limit: '5',
      type: 'recenttracks',
      key: 'fd869a3a97b51892ce73b5f32b9d2167',
      coverartsize: 'large',
      coverart: true,
      nocoverart: '',
      nowplaying: false,
      error: true
    } // Options Settings
    var options = $.extend(defaults, options);
    return this.each(function(i, e) {
      var $e = $(e);
      if (!$e.hasClass('media')) $e.addClass('media');
      if (options.type == 'recenttracks') {
        var method = 'user.getRecentTracks';
      } else {
        if (options.error) $e.html('<p>LastFM feed invalid</p>');
        return false;
      }
      var url = '//ws.audioscrobbler.com/2.0/?format=json&method=' + method + '&user=' + options.user + '&api_key=' + options.key + '&limit=' + options.limit + '&nowplaying=' + options.nowplaying + ' '; // Load Content Using AJAX
      $.ajax({
        type: 'GET',
        url: url,
        dataType: 'json',
        success: function(data) {
          if (data) {
            if (options.type == 'recenttracks') {
              showdata(e, type, data.recenttracks.track, options);
            }
          } else {
            if (options.error) $e.html('<p>LastFM information unavailable</p>');
          }
        },
        error: function(data) {
          if (options.error) $e.html('<p>LastFM request failed</p>');
        }
      });
    });
  };

  var srcurl = function(url) {
    var url = url;
    if (url != '' && url.substr(0, 8) != 'https://') url = 'https://' + url;
    return url;
  };

  // Show Pull Data From Last.FM
  var showdata = function(e, type, contents, options) {
    var $e = $(e);
    var html = '';
    if (contents) {
      html += '<ul class="media__list">';
      var count = contents.length;
      if (count > options.limit) count = options.limit;
      for (var i = 1; i < count; i++) {
        var item = contents[i];
        var artist = item.artist['#text'];
        var title = item.name;
        var imgsrc = '';

        html += '<li class="media__item">';
          html += '<div class="media__track">';
            if (options.coverart) {
              if (item.image) {
                if (options.coverartsize == 'small') {
                  var imgindex = 0;
                } else if (options.coverartsize == 'medium') {
                  var imgindex = 1;
                } else if (options.coverartsize == 'large') {
                  var imgindex = 2;
                } else if (options.coverartsize == 'extralarge') {
                  var imgindex = 3;
                }
                imgsrc = srcurl(item.image[imgindex]['#text']);
              }
              html += '<div class="media__cover"><img src="' + imgsrc + '" ></div>';
            }

            html += '<div class="media__content">';
              html += '<h4 class="media__title" >' + title + '</h5>';
              html += '<p class="media__artist">' + artist + '</p>';
            html += '</div>';
          html += '</div>';
        html += '</li>';
      }
      html += '</ul>';
    } else {
      html += '';
    };
    $e.append(html);
  };
})(jQuery);