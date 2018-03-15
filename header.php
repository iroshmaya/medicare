<?php
session_start();
?>

<!DOCTYPE html
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudlare.com/ajax/libs/font.awesome/4.7.0/css/font.awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.inputWithIcon input[type=text]{
			padding-left:40px;
			
		}
		.inputWithIcon{
			position:relative;
			
		}
		.inputWithIcon i{
			position:absolute;
			left:0;
			top:6px;
			padding:9px 8px;
			color: Blue; 
		}
		.inputWithIcon input[type=text]:focus +i{
			color: dodgerBlue;
			
		}
		
	</style>
	<title></title>
	
</head>
<body>     
	<header>
		<nav>
			<div class="main-wrapper">
				<ul>
					<li><a href ="index.php">Medi-Care</a></li>
				</ul>
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