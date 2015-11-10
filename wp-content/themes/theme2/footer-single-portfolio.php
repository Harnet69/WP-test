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
		</div>
	</div>
</div>		
<script type="text/javascript">
$(function(){
	$(window).load(function(){
		$('#slide_2').liSlidik({
			auto:3000,
    		duration: 1000
		});
	})
});
</script>
<? wp_footer()?> 	
</body>
</html>