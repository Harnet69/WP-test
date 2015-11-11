<div class="footer-wrapper">
	<div class="footer-main">
		<div class="footer-left">
				<a><img src="<? bloginfo('template_url');?>/Images/logo-footer2.png" alt="" /></a>
				<p>Design&create by<a href="#">www.aliot.eu</a></p>
		</div>
		<div class="footer-right">
			<a><img src="<? bloginfo('template_url');?>/Images/footer-twitter.png" alt="" /></a>
			<a><img src="<? bloginfo('template_url');?>/Images/footer-facebook.png" alt="" /></a>
		</div>
	</div>
</div>		
</body>
<script>
$(function(){
	$(window).load(function(){
		$('#slide_2').liSlidik({
			auto:3000,
    		duration: 1000
		});
	})
});
</script>
<? wp_footer();?>
</html>