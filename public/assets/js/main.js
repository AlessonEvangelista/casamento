;(function(){

			// Menu settings
			$('#menuToggle, .menu-close').on('mouseover', function(){
				$('#menuToggle').toggleClass('active');
				$('body').toggleClass('body-push-toleft');
				$('#theMenu').toggleClass('menu-open');
			});

			// $('#menuToggle, .menu-close').on('mouseout', function(){
			// 	$('#menuToggle').toggleClass('active');
			// 	$('body').toggleClass('body-push-toleft');
			// 	$('#theMenu').toggleClass('menu-open');
			// });


})(jQuery)