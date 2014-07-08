(function ($, root, undefined) {

	$(function () {

		'use strict';

    $( "#showAbout" ).click(function() {
      $( "#about" ).slideToggle();
    });

    function rainbowBG(){
      var color_index = 0;

      $(".post").each(function() {
          if (! $(this).hasClass('rainbowed')) {
              var hue = ['#FF8A8C','#FFB395','#FFD295','#FFEFB6','#FFFDD2','#E0FFBC','#BFFFCA','#DAFFE1','#A4E7FF','#BDF3FF'];
              // var rand = Math.floor(Math.random()*hue.length);
              color_index = (color_index < hue.length - 1) ? color_index + 1 : 0;

              $(this).addClass('rainbowed');
              $(this).css("background-color", hue[color_index]);
          }
      });
    }
    rainbowBG();

    $(".landing-page .post").click(function(){
         window.location=$(this).find("a").attr("href");
         return false;
    });


	}); //do not delete

})(jQuery, this);