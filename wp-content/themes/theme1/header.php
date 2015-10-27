<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<a href="/"><title><? bloginfo('name');?></title></a>
<? wp_head();?>
</head>
<body>
	<div class="head-wrapper">
		<div class="head">
			<div class="head-logo"><a href="/"><img src="<? bloginfo('template_url');?>/images/logo.jpg" alt="" /></a></div>
			<div class="head-banner"><img src="<? bloginfo('template_url');?>/images/728x90.jpg" alt="" /></div>
		</div>
	</div>
	<div class="menu-wrapper">
		<div class="menu-main">
			<? if(!dynamic_sidebar('header_menu')):?>
					<span>This is area for menu, added at widgets</span>
				<?endif;?>
			<ul class="ico-social">
				<li><a href="#"><img src="<? bloginfo('template_url');?>/images/ico-vk.png" alt=""></a></li>
				<li><a href="#"><img src="<? bloginfo('template_url');?>/images/ico-yt.png" alt=""/></a></li>
				<li><a href="#"><img src="<? bloginfo('template_url');?>/images/ico-f.png" alt=""/></a></li>
				<li><a href="#"><img src="<? bloginfo('template_url');?>/images/ico-tw.png" alt=""/></a></li>
			</ul>
		</div>
	</div>