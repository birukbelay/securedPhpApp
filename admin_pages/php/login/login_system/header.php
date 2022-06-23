<?php
	session_start();

?>

<!DOCTYPE html>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css ">
</head>

<body>  
<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
				<div class="nav-about">
					<li> <a href="about.php"> About</a></li>
					<li><img src=""></li>
				</div>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])) {
                    
					echo '<form action="includes/logout-inc.php" method = "POST">
					<button type="submit" name="submit">Logout</button>
				</form>';
                }else {
					echo '<form action="includes/login-inc.php" method = "POST">
					<input type="text" name="uid" placeholder="Username/E-mail" required>
					<input type="password" name="pwd" placeholder="Password" required>
					<button type="submit" name="submit">Login</button>
				</form>
				<a href="signup.php">Sign up</a>';
                        
//        <form class="signup-form" action = "includes/signup-inc.php" method = "POST">
//			<input type="text" name="first" placeholder="First Name">
//			<input type="password" name="pwd" placeholder="Password">
//			<button type="submit" name="submit">sign up</button>
//		</form>
                        
					}
				?>
			</div>
		</div>
	</nav>
</header>
