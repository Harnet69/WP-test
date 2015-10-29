<div class="sidebar-main">
				<div class="sidebar-widget">
					<div class="search-main">
						<form action="" method="GET">
							<input name="s" class="search-txt" type="text" name="search" value="Search Blog" onfocus="if(this.value=='Search Blog')this.value=''" onblur="if(this.value=='')this.value='Search Blog'" />
							<input class="search-img" type="image" src="<? bloginfo('template_url');?>/images/search-btn.jpg">
						</form>
					</div>
								<? if(!dynamic_sidebar('sidebar1')):?>
					<div class="sidebar-categories">			
						<h2>This is area for sidebar</h2>
					</div>
				<?endif;?>
					<div class="sidebar-widget">
						<div class="sidebar-facebook">
							<img src="<? bloginfo('template_url');?>/images/sidebar-facebook.jpg" alt=""/>
						</div>
					</div>
					
					
				</div>
			</div>