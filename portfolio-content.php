		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/scripts/jquery.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/scripts/jquery-ui.js"></script>
		<?php get_template_part("lightbox","js"); ?>

		<div class="portfolio-content">
			<h1>MY PORTFOLIO</h1>
			<div class="sample w11 last"> 
			<img class="left" src="<?php bloginfo('template_url') ?>/images/doors/thumb/thumb.jpg"   width="251" height="211">
				<div class="desc">
					<h1>DOORS</h1>
					<p> Praesent vestibulum molestie lacus. Aenean nonummy 1999 hendrerit mauris. Phasellus porta. Fusce sucipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus 2001 mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas 2011 tristique. </p>
					<div class="more"> 
						<a href="<?php bloginfo('template_url') ?>/images/doors/1.jpg" title="" rel="lightbox[group1]">More Samples</a> 
					</div>
					<script type="text/javascript">
						for(var i=2;i<=16;i++){
							document.write('<a href="<?php bloginfo("template_url") ?>/images/doors/'+i+'.jpg" title="" rel="lightbox[group1]" ></a>');
						}
					</script>
					
					<?php
						/*$pics_name = 1;
						$dir = "<?php bloginfo('template_url') ?>/images/doors";
						$allowed_type = array('jpg','jpeg','png','gif');
						$d = dir($dir);
						while($file_type = $d->read()){
							$files = end(explode('.',$file_type) );
							if(!in_array(strtolower($files) ,$allowed_type) ) continue;
							echo "<a href='$dir/$pics_name.jpg' title='' rel='lightbox[group1]' ></a>";
							$pics_name++;
						}*/
					?>
					
				</div>
			</div>
			<div class="clear"></div>
			<div class="sample w11 last"> 
			<img class="left" src="<?php bloginfo('template_url') ?>/images/staircase/thumb/thumb.jpg"  width="251" height="211">
				<div class="desc">
					<h1>STAIRCASES</h1>
					<p> Praesent vestibulum molestie lacus. Aenean nonummy 1999 hendrerit mauris. Phasellus porta. Fusce sucipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus 2001 mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas 2011 tristique. </p>
					<div class="more"> 
						<a href="<?php bloginfo('template_url') ?>/images/staircase/1.jpg" title="" rel="lightbox[group2]">More Samples</a> 
					</div>
					<script type="text/javascript">
						for(var i=2;i<=40;i++){
							
							document.write('<a href="<?php bloginfo('template_url') ?>/images/staircase/'+i+'.jpg" title="" rel="lightbox[group2]" ></a>');
						}
					</script>
					<?php
						/*$pics_name = 1;
						$dir = "<?php bloginfo('template_url') ?>/images/staircase";
						$allowed_type = array('jpg','jpeg','png','gif');
						$d = dir($dir);
						while($file_type = $d->read()){
							$files = end(explode('.',$file_type) );
							if(!in_array(strtolower($files) ,$allowed_type) ) continue;
							echo "<a href='$dir/$pics_name.jpg' title='' rel='lightbox[group2]' ></a>";
							$pics_name++;
						}*/
					?>
				</div>
			</div>
			<div class="clear"></div>
			<div class="sample w11 last">
			<img class="left" src="<?php bloginfo('template_url') ?>/images/furniture/thumb/thumb.jpg"  width="251" height="211">
				<div class="desc">
					<h1>FURNITURES</h1>
					<p> Praesent vestibulum molestie lacus. Aenean nonummy 1999 hendrerit mauris. Phasellus porta. Fusce sucipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus 2001 mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas 2011 tristique. </p>
					<div class="more"> 
						<a href="<?php bloginfo('template_url') ?>/images/furniture/1.jpg" title="" rel="lightbox[group3]">More Samples</a>
					</div>
					<script type="text/javascript">
						for(var i=2;i<=18;i++){
							document.write('<a href="<?php bloginfo('template_url') ?>/images/furniture/'+i+'.jpg" title="" rel="lightbox[group3]" ></a>');
						}
					</script>
					<?php
						/*$pics_name = 1;
						$dir = "<?php bloginfo('template_url') ?>/images/furniture";
						$allowed_type = array('jpg','jpeg','png','gif');
						$d = dir($dir);
						while($file_type = $d->read()){
							$files = end(explode('.',$file_type) );
							if(!in_array(strtolower($files) ,$allowed_type) ) continue;
							echo "<a href='$dir/$pics_name.jpg' title='' rel='lightbox[group3]' ></a>";
							$pics_name++;
						}*/
					?>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		