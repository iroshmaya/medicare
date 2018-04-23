
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudlare.com/ajax/libs/font.awesome/4.7.0/css/font.awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="appoint.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudlare.com/ajax/libs/font.awesome/4.7.0/css/font.awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Confirm Dialog Box</title>
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
		.WebContainer{
			width:100%;
			min-width:1000px;
			height:auto;
		} 
		#body{
			background-color:#F0FFFF;
		}
        #white-background{
            display: none;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #fefefe;
            opacity: 0.7;
            z-index: 9999;
        }
        #dlgbox{
            /*initially dialog box is hidden*/
            display: none;
            position: fixed;
            width: 480px;
            z-index: 9999;
            border-radius: 10px;
            background-color: #7c7d7e;
        }
        #dlg-header{
            background-color: #6d84b4;
            color: white;
            font-size: 20px;
            padding: 10px;
            margin: 10px 10px 0 10px;
        }
        #dlg-body{
            background-color: white;
            color: black;
            font-size: 14px;
            padding: 10px;
            margin: 0 10px 0 10px;
        }
        #dlg-footer{
            background-color: #f2f2f2;
            text-align: right;
            padding: 10px;
            margin: 0 10px 10px 10px;
        }
        #dlg-footer button{
            background-color: #6d84b4;
            color: white;
            padding: 5px;
            border: 0;
        }
		#title1{
			color:red;
		}
		#myform{
			width: 400px;
			height: 200px;
			margin: 0px;
			padding-top: 30px;
			background-color: #F0FFFF;
			margin: 0px;
		}
		#boxid{
			height: 50px;
			width: 300px;
			color: gray;
		}
		#wrapi{
			border:1px solid white;
			width: 100%;
		}
		#seldoc{
			padding-left: 37px;
			height: 50px;
			width: 300px;
			color: gray;
		}
		#btnid{
			padding-top: 10px;
		}
		
		
    </style>
</head>
<body>

<div id="wrapi">
		
		<div id="men1">
			<ul id="ul1">
				<li><a href="index.php">Contact Us</a></li>
				<li><a href="signup.php">About Us</a></li>
				<li><a href="signup.php">Services</a></li>
				<li><a href="signup.php">Home</a></li>
				
			
			</ul>
			
		</div>
		<div id="main1">
			<div id="first1">
			
			</div>
			
			<div id="second2">
			   
			   <p id="title1">Find a Doctor. Book an Appointment. Pay easy.</p>
			<form id="myform"action="appointment.inc.php" method="POST">
				<div class="inputWithIcon">
				<i class="fa fa-user fa-lg fa-fw" aria.hidden="true">   </i>
			<select id="seldoc" name="select_docter">
						<option value="name" name="name">Dr name</option>
						<option value="x" name="x"> x</option>
						<option value="y" name="y"> y</option>
						<option value="unknown" name="unknown"> unknown</option>
						<option value="jone" name="jone"> jone </option>
			</select>
			</div>
			
			<div class="inputWithIcon">
			<i class="fa fa-pencil" aria.hidden="true">   </i>
			<input  id="boxid" type="text" name="reason" placeholder="Reason">
			</div>
			
			<div class="inputWithIcon">
			<i  aria.hidden="true">   </i>
			<input  id="boxid" type="date" placeholder="Any Date" name="date">
			
			</div>
			
			
		
				
			<form >
				<div id="btnid" class="container">
				<button type="input" class="btn btn-primary" name="appoint"  value=Reports>check</button>
				</div>
			</form>
			</form>
			</div>
			<div id="third3">
			
			</div>
		</div>
		</div>


</body>
</html>