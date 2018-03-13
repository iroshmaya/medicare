<html>
<head>

<link rel="stylesheet" type="text/css" href="cssmenu.css">

 <style type="text/css">
 
 
 #button {
     line-height: 12px;
     width: 98px;
     font-size: 8pt;
     font-family: tahoma;
     margin-top: 1px;
     margin-right: 2px;
     position:absolute;
     top:40px;
     right:10px;
 }
 </style>

</head>
<body>
		<header>

			<form  action="includes/logout.inc.php" method="POST">

			<div id="button"><button type="submit" name="submit"> log out </button> </div>
			</form>
		</header>

		<form class="signup-form" action="includes/menu.inc.php" method="POST">
		
		<input type="submit" name="home" value=Home />
		<input type="submit" name="channel" value=Channel  />
		<input type="submit" name="update" value=Update>
		<input type="submit" name="reports" value=Reports />
		<input type="submit" name="contact" value=Contact  />
		</form>

</body>


</html>