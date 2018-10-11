
// Use this file to require and init additional javascript, e.g require('jquery')
import {WOW} from 'wowjs';
import Barba from 'barba.js';
import $ from 'jquery';
import jQuery from 'jquery';
window.$ = $;
window.jQuery = jQuery;
window.Barba = Barba;

  //Set up Element animations on Scroll
    window.wow = new WOW(
    {
    boxClass:     'animate',      // default
    animateClass: 'animated', // default
    offset:       100,          // default
    mobile:       true,       // default
    live:         true        // default
}
)
  //Set up transition
$('document').ready(function(){
    var transEffect = 
    Barba.BaseTransition.extend({
        start: function(){
          this.newContainerLoading.then(val => this.fadeInNewcontent($(this.newContainer)));
        },
        fadeInNewcontent: function(nc) {
          nc.hide();
          var _this = this;
          $(this.oldContainer).fadeOut(1000).promise().done(() => {
            $(window).scrollTop(0); // scroll to top here
            nc.css('visibility','visible');
            nc.fadeIn(1000, function(){
              _this.done();
            })
          });
        }
    });
//setTimeout
//slideToggle, Donw, Up
//fadeToggle, Out, In

    Barba.Pjax.getTransition = function() {
      return transEffect;
    }
    Barba.Pjax.start();
    Barba.Prefetch.init();
  });