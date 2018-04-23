<?php
if(isset($_POST['appoint'])){
	include_once  'dbdoctor.inc.php';
	$name=mysqli_real_escape_string($conn,$_POST['select_docter']);
	$date=mysqli_real_escape_string($conn,$_POST['date']);
	$sql = "SELECT * FROM  doctor WHERE doctor_name='$name'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$resultcheck=mysqli_num_rows($result);
	
	$sqlnew = "SELECT dates FROM  doctor WHERE doctor_name='$name'";
	$resultnew = mysqli_query($conn, $sqlnew);
	$datas=array();
	if (mysqli_num_rows($resultnew)>0){
		while($rownew = mysqli_fetch_assoc($resultnew)){
			$datas[]=$rownew;
		}
	}
	?>
	<html>
	<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudlare.com/ajax/libs/font.awesome/4.7.0/css/font.awesome.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link rel="stylesheet" type="text/css" href="appointincstyle.css">
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudlare.com/ajax/libs/font.awesome/4.7.0/css/font.awesome.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <style>
		 
		 #docicon{
			 padding-top: 18px;
			 padding-left: 30px;
		 }
		 #titlee{
			color: red;	
			font-size:35px;
			font-weight:bold;
			padding-top: 20px;
			padding-left: 50px;
				}
		#btnid{
			padding-top: 20px;
		}
		#drdetails{
			color: red;	
			float: right;
			font-size:30px;
			font-weight:bold;
			padding-top: 20px;
			padding-right: 1200px;
		}
		#datedetails{
			color: black;	
			float: right;
			font-size:30px;
			font-weight:bold;
			padding-top: 10px;
			padding-right: 1100px;
		}
		#p11{
			color: blue;	
			float: left;
			font-size:20px;
			padding-top: 20px;
			padding-left: 66px;
		}
		#p12{
			color: black;	
			float: right;
			font-size:15px;
			padding-top: 20px;
			padding-left: 20px;
			padding-right: 813px;
		}
		#docicon{
			float: left;
		}
		#second2{
			float: left;
			padding-top: 0px;
			border: 1px solid black;
			background-color:  #DCDCDC;
			color: gray;
			width: 100%;
			height:100px;
			margin: 5px;
			
	
		}
		#btnfix{
			padding-top: 0px;
			float:  right;
			padding-left: 700px;
			
		}
		
		 </style>
	</head>
	<body> 
	<div id="wrapi">
		
		<div id="men1">
			<ul id="ul1">
				<li><a href="header.php">Contact Us</a></li>
				<li><a href="header.php">About Us</a></li>
				<li><a href="header.php">Services</a></li>
				<li><a href="header.php">Home</a></li>
				
			
			</ul>
			
		</div>
	<?php
	if(($name==$row["doctor_name"] && empty($date)) ||($name==$row["doctor_name"] && $date==$row["date"]) ){
		
		
	?>
	
		<div id="main1">
			<div id="first1">
			<i id="docicon" class="fa fa-user-md" style="font-size:100px;color:red"></i>
			<p id="drdetails"> Dr. Jone </p>
			<p id="p11"><?php echo $row["details"] ?> </p>
			<p id="p12"><?php	echo $row["special_note"]?> </p>
			</div>
			
			
		
		<?php 
		for($x = 0; $x < $resultcheck; $x++) { 
		foreach($datas[$x] as $data){ ?>
			<div id="second2">
			<p id="datedetails"><?php echo $data/////// ?> </p>
			<?php 
		}
			?>
					<form action="includes/menu.inc.php" method="POST">
				
				<div id="btnfix"  class="container">
				 <a href="#" class="btn btn-info btn-lg">
					<span type="input " class="glyphicon glyphicon-bookmark"></span> Book
				</a>
				</div>
				</form>
			</div>
			
				<?php 
			} 
			?>
		</div>	
		<?php 
	}
	else{
		?>
		<form action="retry.inc.php" method="POST">
		<div id="main1">
			<div id="first1">
			   <p id="titlee">Sorry. Search Unavailable</p>
			   <form >
				<div id="btnid" class="container">
				<button  type="input" class="btn btn-primary" name="appoint"   value=Reports>Retry</button>
				</div>
			</form>
			</div>
		</form>
		</div>
		
		<?php
	}
	?>
	</div>
	</body>
	</html>
	<?php

}
?>