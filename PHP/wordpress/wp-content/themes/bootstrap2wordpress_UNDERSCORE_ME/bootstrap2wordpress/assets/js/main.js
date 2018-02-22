$(function(){
	
	var $window = $(window);
	
	//parallax background effect
	$('section[data-type="background"]').each(function(){
		
		var $bgobj = $(this);
		
		$window.scroll(function(){		
			
/*
			scroll the background at var speed 
			the yPos is a negative value zcz we're scrolling it up
*/
			
			var yPos = -($window.scrollTop() / $bgobj.data('speed') );
			var coords = '50% ' + yPos + 'px';
			
			$bgobj.css({ backgroundPosition: coords});
		})
		
	})
	
	
})