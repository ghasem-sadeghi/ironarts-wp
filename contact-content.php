			<div class="contact-us-form w14">
				<div class='send-alert-error'>Error in sending mail. </div>
				<div class='send-alert-correct'>Thank's for sending mail. </div>
				<h1>SEND MESSAGE</h1>
				<form method="post" action="<?php bloginfo('template_url') ?>/send-contact-form.php">
					<table>
						<tr>
							<td><p>Full name <span>*</span></p></td>
							<td><input type="text" class="name" name="name" ></td>
						</tr>
						<tr>
							<td><p>Email <span>*</span></p></td>
							<td><input type="text" class="user-email" name="user-email" ></td>
						</tr>
						<tr>
							<td><p>Subject <span>*</span></p></td>
							<td><input type="text" class="subject" name="subject"></td>
						</tr>
						<tr>
							<td><p>Phone-number <span>*</span></p></td>
							<td><input type="text" class="phone" name="phone"></td>
						</tr>
						<tr>
							<td><p>Message <span>*</span></p></td>
							<td><textarea class="textarea" name="Message" ></textarea></td>
						</tr>
					</table>
					<input type="submit" class="ok" name="submit" value="SEND EMAIL">
					<input type='reset' class='ok' name='reset' value='RESET'>
				</form>
			</div>
			<div class="clear"></div>