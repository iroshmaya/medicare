 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="page.css">
    <style type="text/css">
		
    
      form{
        background: rgba(45, 45, 125, 0.58);
        color: white;
        padding: 40px;
        margin-top: 200px;
        padding-bottom: 60px;
        box-shadow: 10px 10px 5px rgba(6, 1, 1, 0.43)
      }
      h1{
        text-align: center;
      }
      .btn{
        width: 100%;
        border-radius: 0px;
        
      }
      .form-control{
        border-radius: 0px;
        background-color: rgba(23, 3, 3, 0.48);
        color: white;
        border-radius:1px solid #291212
      }
	  #body{
		  
			background-color:#F0FFFF;
			color: white;
			background-image: url("kk.jpg");
			  background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			 height: 100%; 
		  
	  }
	  #dates{
		  color: black;
		  
	  }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   
  </head>
  <body id="body">


		
		<div id="men1">
			<ul>
				<li><a href="index.php">Careers</a></li>
				<li><a href="signup.php">About Us</a></li>
				<li><a href="signup.php">Services</a></li>
				<li><a href="signup.php">Home</a></li>
				
				
			
			</ul>
			
		</div>
    

      <div class="container">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-8">
            <form>
            <h1>Lab Reports</h1>
              <div class="form-group">
                <label for="exampleInputEmail1">Lab Reference Number </label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ex : 000000/00/00">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Passcode (Printed on bill)</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Passcode">
              </div>
			  
              <br>
              
              <button type="button" class="btn btn-default" onclick="myFunction()">Get lab reports</button>
            </form>
          </div>
        </div>
      </div>


  </body>
 
</html>