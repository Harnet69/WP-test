<?
	function mygallery($args, $text=''){
		$images = explode(',', $args['ids']);
		echo '<ul id="slide_2" class="slidik">' ;
		foreach($images as $item){
			$myimg = wp_get_attachment_image($item, 'full');
			$pattern = '#(width|height)="\d+"#';
			$myimg = preg_replace($pattern, '',$myimg);
			echo "<li class='show'>".$myimg."</li>";
		}
		echo '<a data-slidik="slide_2" class="next" href="#">Next</a>
				<a data-slidik="slide_2" class="prev" href="#">Prev</a>
				<div class="captionWrap"><div data-slidik="slide_2" class="caption"></div></div>
				<a href="portfolio.html" class="portfolio-close"></a>';
		echo '<ul>';
	}
	add_shortcode('gallery', 'mygallery');