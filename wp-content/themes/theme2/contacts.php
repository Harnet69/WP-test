<?
		/*
		Template Name: Шаблон страницы контактов
		*/
?> 
<? get_header();?>
		<div class="content-main">
				<div class="content-main-blocks" style="padding-bottom:75px">
					<div class="contact-me">

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<h2><? the_title();?></h2>
							<? the_content();?>
						<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>
					</div>
					
					<div class="contacts-details">
						<? the_post_thumbnail();?>
						<!--<img src="<? bloginfo('template_url');?>/Images/contacts2.png" alt="" />-->
						<h2>Contact Details</h2>
							<? $custom_fields = get_post_custom();
									if (isset($custom_fields['cont-addr'][0])){
										echo "<p class='cont-addr'>".$custom_fields['cont-addr'][0].'</p>';}
									else{echo "Укажите адрес!<br>";
									}
									if (isset($custom_fields['cont-tel'][0])){
									echo "<p class='cont-tel'>".$custom_fields['cont-tel'][0].'</p>';}
									else{echo "Укажите контактный номер телефона!<br>";
									}
									if (isset($custom_fields['cont-email'][0])){
									echo "<p class='cont-email'><a href='mailto:'>".$custom_fields['cont-email'][0].'</a></p>';}
									else{echo "Укажите контактный e-mail!<br>";
									}
									if (isset($custom_fields['cont-reg'][0])){
									echo "<p class='cont-reg'>".$custom_fields['cont-reg'][0].'</p>';}
									else{echo "Укажите номер лицензии!<br>";
									}
									if (isset($custom_fields['cont-vat'][0])){
									echo "<p class='cont-vat'>".$custom_fields['cont-vat'][0].'</p>';}
									else{echo "Укажите VAT!<br>";
									}
							?>
						<!--
						<p class='cont-tel'>0800 900 0003</p>
						<p class='cont-email'><a href="mailto:">youremail@yoursite.com</a></p>
						<p class='cont-reg'>Registered photographer No. 09900-CCC</p>
						<p class='cont-vat'>VAT registered business number 455-5559-000</p>-->
					</div>			
				</div>

<? get_footer();?> 