(function($, window) {

  'use strict';

  /************************************************************
  @description VirtualHosts
  *************************************************************/
  var VirtualHosts = {
    cacheElements: function() {
      this.$document = $(document);
      this.$iframe = $('.iframe');
      this.$li = $('.list-current').find('li');
      this.$a = $('.list-current').find('a');
    },
    init: function() {
      this.cacheElements();
      this.setupIframeWidth();
    },
    setupIframeWidth: function() {

      var
      ViewportWidth = this.$document.width(),
      ratio = ((100 / 1024) * ViewportWidth) / 100;

      // console.log(ViewportWidth);
      // console.log(ratio);

      if(ViewportWidth < 1024) {

        this.$iframe.css({
          '-moz-transform': 'scale(' + ratio + ')',
          '-webkit-transform': 'scale(' + ratio + ')',
        });

        var
        width = $('.iframe').width() * ratio,
        height = $('.iframe').height() * ratio;

        // console.log('Breite iframe: ', width );
        // console.log('Höhe iframe: ', height );

        this.$li.width(width-50).height(height-50);
        this.$a.width(width-50).height(height+40);

      }

    }
  };

  VirtualHosts.init();

}(jQuery, window));