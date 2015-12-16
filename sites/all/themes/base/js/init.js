Drupal.behaviors.init = {
	attach: function (context, settings) {
		(function ($) {
 			
 			
			// MENU TWEAKS!!!
 			//===================================
 			$('.menu-toggle').click(function(){
				$('#nav-main').slideToggle(300);
				return false;
			});

			var contact = $('#contact-holder');

			$('#contact-holder .icon-close').click(function(event) {
				contactClose();
				return false;
			});

			$('.contact-btn').click(function(event) {
				contactOpen();
				return false;
			});

			function contactOpen(){
				contact.fadeIn()
			}

			function contactClose(){
				contact.fadeOut();
			}


 			// MASONRY!!!
 			//===================================
			// var masonry_container = $('.node-image-gallery .field-name-field-other-images');
			
			// masonry_container.imagesLoaded(function(){
			// 	masonry_container.masonry({
			// 	  itemSelector: '.field-item'
			// 	});
			// });


			// SKROLR!!!
 			//===================================
			// if($(window).width() > 500){
	 		//		var s = skrollr.init({
	 		// 		forceHeight: false,
	 		// 	});
	 		// }


		}(jQuery));
	}	
}


