<h1>Log in to Gordon&#39;s Crown</h1>
			<!-- feedback message comes here -->

			<?php if(isset($_POST['email'])): ?>

			<?php if(!isset($_SESSION['login'])): ?>
				<p class="message_error">
					We could not find the E-Mail / nickname or password you have supplied.<br />
					Please check the entries.
				</p>
			<?php else : ?>
				<p class="message_ok">
					Hello <?=$_SESSION['commonname']?>&#39;ve successfully logged in.
				</p>
			<?php endif; ?>
			<?php endif; ?>

			<form action="" method="post">
				<fieldset class="input">
					<div class="text">
						<label for="email">E-Mail or nickname:</label>
						<input type="text" name="email" id="email" value="" />
						<span class="message"></span>
					</div>
					<div class="text">
						<label for="password">Password:</label>
						<input type="password" name="password" id="password" value="" />
						<span class="message"></span>
					</div>
				</fieldset>
				<fieldset class="submit">
					<div class="submit">
						<input type="submit" value="Log in" />
					</div>
				</fieldset>
			</form>