			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="words">
					<h4>The phoneography party continues at the <a href="https://photojojo.com/">Photojojo Store</a>.</h4>
					<!-- copyright -->
					<a class="logo-footer" href="https://photojojo.com/store"></a>
					<h6>
						This super handy app-index was made by the photography obssessed people at © <a href="https://photojojo.com">Photojojo</a>
					</h6>

					<!-- /copyright -->
				</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
      <script type="text/javascript">
      $(document).ready(function() {
		    $('#container').isotope();
		    $('.filter').click(function(e) {
		        e.preventDefault();
		        var to_filter = $(this).attr('rel');
		        if(to_filter == 'all') {
		            $('#container').isotope({filter: '.post'});
		        } else {
		            $('#container').isotope({filter: '.'+ to_filter});
		        }
			    });
				    $('[name="view"]').on('change', function(e){
				        if(e.target.value == 'all') {
				            $('#container').isotope({filter: '.post'});
				        } else {
				            $('#container').isotope({filter: '.category-'+ e.target.value});
				        }
				    });
				$(function(){

		      var $container = $('#container');

		      $container.isotope({
		        itemSelector : '.post',
		        filter: '.category-apple',
		        animationEngine: 'css'
		      });

		      $container.infinitescroll({
		        navSelector  : '.pagination',    // selector for the paged navigation
		        nextSelector : 'a.page-numbers ',  // selector for the NEXT link (to page 2)
		        itemSelector : '.post',     // selector for all items you'll retrieve
		        loading: {
		            finishedMsg: 'No more pages to load.',
		            img: 'http://i.imgur.com/qkKy8.gif'
		          }
		        },
		        // call Isotope as a callback
		        function( newElements ) {
		          $container.isotope( 'appended', $( newElements ) );
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
		      );

		    });


				});
      </script>


		<!-- analytics -->

		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>



	</body>
</html>
