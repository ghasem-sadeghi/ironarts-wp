<?php include('header.php') ?>
<div class="container">
		<div class="nav nav-portfolio left">
		<?php include('main-menu.php') ?>
	</div>
		
		<!--.......portfolio.........-->
	<div class="container-content ml7 cover">
		<div class="portfolio-content">
			<h1>MY PORTFOLIO</h1>
			<div class="sample w11 last"> <img class="left" src="images/doors/thumb/thumb.jpg"   width="251" height="211">
				<div class="desc">
					<h1>DOORS</h1>
					<p> Praesent vestibulum molestie lacus. Aenean nonummy 1999 hendrerit mauris. Phasellus porta. Fusce sucipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus 2001 mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas 2011 tristique. </p>
					<div class="more"> <a href="images/doors/1.jpg" title="" rel="lightbox[group1]">More Samples</a> </div>
					<?php
							$pics_name = 1;
							$dir = './images/doors';
							$allowed_type = array('jpg','jpeg','png','gif');
							$d = dir($dir);
							while($file_type = $d->read()){
								$files = end(explode('.',$file_type) );
								if(!in_array(strtolower($files) ,$allowed_type) ) continue;
								echo "<a href='$dir/$pics_name.jpg' title='' rel='lightbox[group1]' ></a>";
								$pics_name++;
							}
						?>
				</div>
			</div>
			<div class="clear"></div>
			<div class="sample w11 last"> <img class="left" src="images/staircase/thumb/thumb.jpg"  width="251" height="211">
				<div class="desc">
					<h1>STAIRCASES</h1>
					<p> Praesent vestibulum molestie lacus. Aenean nonummy 1999 hendrerit mauris. Phasellus porta. Fusce sucipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus 2001 mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas 2011 tristique. </p>
					<div class="more"> <a href="images/staircase/1.jpg" title="" rel="lightbox[group2]">More Samples</a> </div>
					<?php
							$pics_name = 1;
							$dir = './images/staircase';
							$allowed_type = array('jpg','jpeg','png','gif');
							$d = dir($dir);
							while($file_type = $d->read()){
								$files = end(explode('.',$file_type) );
								if(!in_array(strtolower($files) ,$allowed_type) ) continue;
								echo "<a href='$dir/$pics_name.jpg' title='' rel='lightbox[group2]' ></a>";
								$pics_name++;
							}
						?>
				</div>
			</div>
			<div class="clear"></div>
			<div class="sample w11 last"> <img class="left" src="images/furniture/thumb/thumb.jpg"  width="251" height="211">
				<div class="desc">
					<h1>FURNITURES</h1>
					<p> Praesent vestibulum molestie lacus. Aenean nonummy 1999 hendrerit mauris. Phasellus porta. Fusce sucipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus 2001 mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas 2011 tristique. </p>
					<div class="more"> <a href="images/furniture/1.jpg" title="" rel="lightbox[group3]">More Samples</a> </div>
					<?php
							$pics_name = 1;
							$dir = './images/furniture';
							$allowed_type = array('jpg','jpeg','png','gif');
							$d = dir($dir);
							while($file_type = $d->read()){
								$files = end(explode('.',$file_type) );
								if(!in_array(strtolower($files) ,$allowed_type) ) continue;
								echo "<a href='$dir/$pics_name.jpg' title='' rel='lightbox[group3]' ></a>";
								$pics_name++;
							}
						?>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!--..........footer.........-->
<div class="bottom-background">
		<?php include('footer.php') ?>
	</div>
<!------------backImage------------>

<div class="backimg">
		<div class="img1" style="opacity:.7"></div>
		<div style="background-color:black;opacity:.7;"></div>
	</div>
</body>
</html>
