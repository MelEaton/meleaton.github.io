//script for carousel	
		<script>
			$(document).ready(function(){
  				$('.bxslider').bxSlider();
			});

			$('.bxslider').bxSlider({
  				captions: true
			});

		</script>
//script to animate projector shutter - 'on click' attached to prev, next and pager buttons
		<script>
			$(document).ready(function() {
 				$('.bx-prev, .bx-next').click(function() {
 				$('.box').stop().animate({width:'100%'}, 0800 ).delay(0000).animate({width:'0%'}, 0800 );
				});
 			});
		</script>

//script for show text
		<script>
			$( document ).ready(function() {
				$( ".showit" ).first().show( 400, function showNext() {
					$( this ).next( ".showit" ).show( 400, showNext );
				});
			});
		</script>


