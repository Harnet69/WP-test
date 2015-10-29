	<div class="footer-wrapper">
		<div class="footer-main">
		<? if(!dynamic_sidebar('footer')):?>
				<div class="footer-info">			
					<h3>This is area for footer</h3>
				</div>
				<div class="footer-info">			
					<h3>This is area for footer</h3>
				</div>
				<div class="footer-info">			
					<h3>This is area for footer</h3>
				</div>
		<?endif;?>
		</div>
	</div>
	<div class="footer-copy">
		<p class="copy">Copyright © 2010 All Rights Reserved</p>
		<p class="by-st">Designed by <a href="#">Harnet69</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powered by <a href="#">Wordpress</a></p>
	</div>
<script>
	$(document).ready( function(){
		$('#slideshowHolder').jqFancyTransitions({ navigation: true, width: 594, height: 279 });
	});
</script> 
<? wp_footer();?>
</body>
</html>