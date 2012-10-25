<?php get_header(); ?>
<div class="container">
	<div class="nav nav-index left">
		<?php 	get_template_part('main', 'menu'); ?>
		<div class="hide-nav mla mra"></div>
	</div>

	<div class="container-content ml7 cover"> 

	<?php 
	if($post->post_title == 'Portfolio'){
		get_template_part('portfolio','content');
	}
	else if($post->post_title == 'About us'){
		get_template_part('about','content');
	}
	else if($post->post_title == 'contact us'){
		get_template_part('contact','content');
	}
	 ?>

	</div>
	<div class="clear"></div>

</div>

<!--..........footer.........-->
<div class="bottom-background" style="<?php if($post->post_title != 'Portfolio' && $post->post_title != 'About us' && $post->post_title != 'contact us'){ echo'margin-top:700px;'; }else if($post->post_title == 'About us'){ echo'margin-top:150px;';} ?> ">
	<?php get_footer(); ?>
</div>
<!--.........backImage.........-->

<div class="noise"></div>
<div class="backimg <?php if($post->post_title != 'Portfolio' && $post->post_title != 'About us' && $post->post_title != 'contact us'){ echo'slideshow'; } ?>">
	<?php
		
		if($post->post_title != 'Portfolio'  && $post->post_title != 'contact us' && $post->post_title != 'About us'){
		echo"
			<div class='img1'></div>
			<div class='img2'></div>
			<div class='img3'></div>
			<div class='img4'></div>
			<div class='img5'></div>
		";}  
		else if($post->post_title == 'About us'){
		echo
			"<div class='img3' style='opacity:.7'></div>",
			"<div style='background-color:black;opacity:.7;'></div>";
		} 
		else if($post->post_title == 'Portfolio'){
		echo
			"<div class='img1' style='opacity:.7'></div>",
			"<div style='background-color:black;opacity:.7;'></div>";
		} 
		else if($post->post_title == 'contact us'){
		echo
			"<div class='img2' style='opacity:.7'></div>",
			"<div style='background-color:black;opacity:.7;'></div>";
		} 
	?>
	
	
	
</div>

</body>
</html>