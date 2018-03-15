<?php
include_once 'header.php';
?>
	<section class="main-container">
		<div class="main-wrapper">
		<h2>Signup</h2>
		<form class="signup-form" action="includes/Signup.inc.php" method="POST">
			
			<div class="inputWithIcon">
			<i class="fa fa-user fa-lg fa-fw" aria.hidden="true">   </i>
			<input type="text" name="first" placeholder="Firstname">
			</div>
			
			<div class="inputWithIcon">
			<i class="fa fa-user fa-lg fa-fw" aria.hidden="true">   </i>
			<input type="text" name="last" placeholder="Lastname">
			</div>
			
			<div class="inputWithIcon">
			<i class="fa fa-envelope fa-lg fa-fw" aria.hidden="true">   </i>
			<input type="text" name="email" placeholder="E-mail">
			</div>
			
			<div class="inputWithIcon">
			<i class="fa fa-user fa-lg fa-fw" aria.hidden="true">   </i>
			<input type="text" name="uid" placeholder="Username">
			</div>
			
			<div class="inputWithIcon">
			<i class="fa fa-key fa-lg fa-fw" aria.hidden="true">   </i>
			<input type="text" name="pwd" placeholder="Password">
			</div>
			
			
			<button type="submit" name="submit">Sign up</button>
		</form>
		</div>
	</section>

<?php   
include_once 'footer.php';
?>
