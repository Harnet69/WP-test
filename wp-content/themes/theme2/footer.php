</div>
</div>
<div class="footer-wrapper">
	<div class="footer-main">
		<div class="footer-left">
		<?php if ( !dynamic_sidebar('footer-logo') ) : ?>
			<p>Место для лого и копирайтов</p>"
		<?php endif; ?>
				<!--<a><img src="<? bloginfo('template_url');?>/Images/logo-footer2.png" alt="" /></a>
				<p>Design&create by<a href="#">www.aliot.eu</a></p>-->
		</div>
		<div class="footer-right">
		<?php if ( !dynamic_sidebar('footer-soc') ) : ?>
			<p>Место для лого и копирайтов</p>"
		<?php endif; ?>
			<!--<a><img src="<? bloginfo('template_url');?>/Images/footer-twitter.png" alt="" /></a>
			<a><img src="<? bloginfo('template_url');?>/Images/footer-facebook.png" alt="" /></a>-->
		</div>
	</div>
</div>		
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="<? bloginfo('template_url');?>/js/jquerypp.custom.js"></script>
<script type="text/javascript" src="<? bloginfo('template_url');?>/js/jquery.elastislide.js"></script>
<script type="text/javascript">
	$( '#carousel' ).elastislide();
</script>
<? wp_footer()?> 	
</body>
</html>