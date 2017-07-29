<!-- script for show text -->
		<script>
			$( document ).ready(function() {
				$( ".showit" ).first().show( 400, function showNext() {
					$( this ).next( ".showit" ).show( 400, showNext );
				});
			});
		</script>

<!-- script to animate projector shutter - 'on click' attached to prev, next and pager buttons-->
		<script>
			$(document).ready(function() {
 				$('.bx-prev').click(function() {
 				$('.box').stop().animate({width:'100%'}, 0800 ).delay(0000).animate({width:'0%'}, 0800 );
				});
 			});
		</script>

<!-- script for carousel -->	
		<script>
			$(document).ready(function(){
  				$('.bxslider').bxSlider();
			});

			$('.bxslider').bxSlider({
  				captions: true
			});

		</script>





<!-- jQuery Version 1.11.0 -->
    	<script src="js/jquery-1.11.0.js"></script>
	
<!-- Bootstrap Core JavaScript -->
    	<script src="js/bootstrap.min.js"></script>
	
<!-- script for scrolling nav -->
    	<script src="js/jquery.easing.min.js"></script>
    	<script src="js/scrolling-nav.js"></script>

<!-- script for modal -->
		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="modal/js/classie.js"></script>
		<script src="modal/js/modalEffects.js"></script>

		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="modal/js/cssParser.js"></script>
		<script src="modal/js/css-filters-polyfill.js"></script>




</body>
<footer>

</footer>