<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<? bloginfo('stylesheet_url');?>" />
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<!--[if lte IE 9]>
  <style type="text/css">
	body{
		background:url(<? bloginfo('template_url');?>/Images/back_IE8_2.png) repeat-x 0 730px;
	}
	.menu, .carousel-wrapper{
		background:url(<? bloginfo('template_url');?>/Images/back_IE8.png);
	}
	.content-main-blocks div{
			padding-right:3%;
		}
	.active{
		background:url(<? bloginfo('template_url');?>/Images/nav-hover.png) no-repeat top center; 
	}	
    </style>
<![endif]-->
<title><? bloginfo('name');?><? wp_title();?></title>
	<? wp_head()?>
</head>
<body>
	<div class="carcas">
		<div class="header">
			<a href="/"><img src="<? bloginfo('template_url');?>/Images/logo2.png"  class="logo "alt="" /></a>
				<? wp_nav_menu(array('theme_location' => 'Menuu','container' => ''));?>
				<!--
				<ul class="menu">
				<li><a href="#" class="active">Home</a></li>
				<li><a href="about.html">ABOUT ME</a></li>
				<li><a href="portfolio.html">PORTFOLIO</a></li>
				<li><a href="exhibition.html">EXHIBITIONS</a></li>
				<li><a href="contacts.html">CONTACT ME</a></li>
				</ul>-->
			
		</div>