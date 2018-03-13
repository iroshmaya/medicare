<?php
session_start();
?>


<!DOCTYPE html
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>     
	<header>
		<nav>
			<div class="main-wrapper">
			
			<div class="nav-login">
				<?php
				if(isset($_SESSION['u_id'])){
					
					echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">logout</button>
							</form>';
				}
				else{
					echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">login</button>
							</form>
							<a href="signup.php"> sign up</a>';
				}
				?>
				
				</div>
			
			
			
			
			</div>
		</nav>
	</header>
	<section class="main-container">
		<div class="main-wrapper">
		<h2>Medi-Care Medical Center</h2>
		</div>
	</section>
	</body>
</html>