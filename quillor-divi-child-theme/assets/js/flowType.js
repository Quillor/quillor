/*
* FlowType.JS v1.1
* Copyright 2013-2014, Simple Focus http://simplefocus.com/
*
* FlowType.JS by Simple Focus (http://simplefocus.com/)
* is licensed under the MIT License. Read a copy of the
* license in the LICENSE.txt file or at
* http://choosealicense.com/licenses/mit
*
* Thanks to Giovanni Difeterici (http://www.gdifeterici.com/)
*/

var $ = jQuery;

$( document ).ready(function() {
   (function($) {
      $.fn.flowtype = function(options) {

   // Establish default settings/variables
   // ====================================
         var settings = $.extend({
            maximum   : 9999,
            minimum   : 1,
            maxFont   : 9999,
            minFont   : 1,
            fontRatio : 35
         }, options),

   // Do the magic math
   // =================
         changes = function(el) {
            var $el = $(el),
               elw = $el.width(),
               width = elw > settings.maximum ? settings.maximum : elw < settings.minimum ? settings.minimum : elw,
               fontBase = width / settings.fontRatio,
               fontSize = fontBase > settings.maxFont ? settings.maxFont : fontBase < settings.minFont ? settings.minFont : fontBase;
            $el.css('font-size', fontSize + 'px');
         };

   // Make the magic visible
   // ======================
         return this.each(function() {
         // Context for resize callback
            var that = this;
         // Make changes upon resize
            $(window).resize(function(){changes(that);});
         // Set changes on load
            changes(this);
         });
      };


      
      
      $('.flowtype-h1').flowtype({
         minimum   : 200,
         maximum   : 1200,
         minFont   : 50,
         maxFont   : 150,
         fontRatio : 7
      });
	  $('h1').flowtype({
         minimum   : 200,
         maximum   : 1200,
         minFont   : 42,
         maxFont   : 110,
         fontRatio : 10
      });

   
	   
      $('.flowtype-h2').flowtype({
         minimum   : 200,
         maximum   : 1200,
         minFont   : 35,
         maxFont   : 80,
         fontRatio : 12
      });
	  
	  $('h2').flowtype({
         minimum   : 200,
         maximum   : 1200,
         minFont   : 35,
         maxFont   : 80,
         fontRatio : 12
      });


      $('.flowtype-h3').flowtype({
         minimum   : 200,
         maximum   : 1200,
         minFont   : 28,
         maxFont   : 60,
         fontRatio : 20
      });  

      $('.flowtype-h4').flowtype({
         minimum   : 200,
         maximum   : 1200,
         minFont   : 24,
         maxFont   : 40,
         fontRatio : 30
      }); 
	  
      $('.summary-h4').flowtype({
         minimum   : 200,
         maximum   : 1200,
         minFont   : 24,
         maxFont   : 40,
         fontRatio : 30
      });            

      $('.flowtype-p').flowtype({
         minimum   : 200,
         maximum   : 1200,
         minFont   : 18,
         maxFont   : 30,
         fontRatio : 50
      }); 
	  
	  $('.archetype-p').flowtype({
         minimum   : 200,
         maximum   : 1200,
         minFont   : 24,
         maxFont   : 40,
         fontRatio : 40
      }); 
	  
	  $('.quiz-archetypes .character_brand h3').flowtype({
         minimum   : 200,
         maximum   : 1200,
         minFont   : 30,
         maxFont   : 100,
         fontRatio : 10
      });      
	$('.flowtype-hero').flowtype({
         minimum   : 400,
         maximum   : 1680,
         minFont   : 110,
         maxFont   : 300,
         fontRatio : 4
      });      
	   $('h2.hero-title').flowtype({
         minimum   : 200,
         maximum   : 1200,
         minFont   : 20,
         maxFont   : 60,
         fontRatio : 12
      });
	  
	  $('.arrow-icon').flowtype({
         minimum   : 200,
         maximum   : 1200,
         minFont   : 100,
         maxFont   : 140,
         fontRatio : 10
      });

           

   }(jQuery));
});   