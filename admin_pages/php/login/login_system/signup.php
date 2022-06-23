<?php
	include_once 'header.php';

  ?>
<section class="main-containter">
	<div class="main-wrapper">
		<h2> Sign up</h2>
		<form class="signup-form" action = "includes/signup-inc.php" method = "POST">
			<input type="text" name="first" placeholder="First Name" required>
			<input type="text" name="last" placeholder="Last Name" required>
			<input type="text" name="email" placeholder="E-mail" required>
			<input type="text" name="uid" placeholder="User Name" required>
			<input type="password" name="pwd" placeholder="Password" required>
			<button type="submit" name="submit">sign up</button>
		</form>
	</div>
	
</section>

<?php
	include_once 'footer.php';

  ?>