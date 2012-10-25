<style type="text/css">

	body{
		background-image:url(http://yaranemahdi-313.ir/wp/wp-content/themes/ironArts%20wp/images/bottom_row.png);	
	}
	.contact-us-form{
		font-size:24px;
		font-family:"Comic Sans MS", cursive;
		width:700px;
		padding-top:30px;
		padding-bottom:10px;
		border-radius:30px;
		background-color:rgba(102, 102, 102,0.3);
		margin:350px auto;
		border-radius:25px;
		-moz-border-radius:25px;
		-ms-border-radius:25px;
		-o-border-radius:25px;
		-webkit-border-radius:25px;
		border-color:rgba(169, 169, 169,0.9);
		border-width:5px;
		border-style:double;
			
	}
	.send-alert-correct{
		color:green;
		width:300px;
		margin:0 auto;
	}
	.send-alert-error{
		color:red;
		width:300px;
		margin:0 auto;
	}
	.contact-us-form div.back{
		width:70px;
		margin:0 auto;
	}
	p{
		display:block;
		margin:0 auto;
		
	}
	a{
		font-size:10px;
		font-family:"Comic Sans MS", cursive;
		margin-bottom:1px;
		color:orange;	
		width:60px;
		margin:0 auto;
		text-align:center;
	}
	
</style>

<?php 

echo "<div class='contact-us-form'>";

				if(isset($_POST['user-email'])){

					$name = $_POST['name'];
					$email = $_POST['user-email'];
					$Subject = $_POST['subject'];
					$phone = $_POST['phone'];
					$Message = $_POST['Message'];
					
					if( @mail("ghassemsadeghi@gmail.com","contact form/ironAtrs ".$Subject,"Fullname: ".$name."\n"."user email: ".$email."\n"."phone: ".$phone."\n"."Message :".$Message,"From:info@ironarts.ir") ){
						echo 
						"<div class='send-alert-correct'><p>Thank's for sending mail.</p> </div>",
						"<div class='back'><a href='http://yaranemahdi-313.ir/wp'>click to back </a></div>";
					}
					else{
						echo 
						"<div class='send-alert-error'><p>Error in sending mail.</p> </div>",
						"<div class='back'><a href='http://yaranemahdi-313.ir/wp/orginall-menu/contact-us/'>click to back </a></div>";
					}
				}
echo "</div>";
			
?>