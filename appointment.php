<html>
<head>
<link rel="stylesheet" type="text/css" href="appointmentcss.css">
 
<style type="text/css">
 
 
 #table {
      margin-top: 30px;
	  color: #000;
	   padding-left: 150px;
	   
	  
 }
  #table2 {
      margin-top: 10px;
	  color: #000;
	   padding-left: 150px;
	   
	  
 }
 #button {
    padding-left: 350px;
	  
 }
 #body{
	 margin-top: 80px;
	 text-align: center;
	 color: #00BFFF;
	 font-family: sans-serif;
	 background-color: #00BFFF;
	 background-size: cover;
	 background-position: center; 
 }
 #h{
	 color: #000;
 }
 </style>

</head>

<body id="body">
<h2 id="h"> Personal informations</h2>
	<table id="table">
	<form action="includes/appointment.inc.php" method="POST">
		<tr>
			<td>
				User Name:
				
			</td>
			<td>
				<input type="text" placeholder="First Name"name="user_name" >
				
			</td>
		</tr>
		<tr>
			<td>
				First Name:
				
			</td>
			<td>
				<input type="text" placeholder="First Name"name="first_name" >
				
			</td>
		</tr>
		<tr>
			<td>
				Last Name:
				
			</td>
			<td>
				<input type="text" placeholder="Last Name"name="last_name" >
				
			</td>
		</tr>

			<tr>
				<td>
					E-mail:
				</td>
				<td>
					<input type="E-mail" placeholder="E-mail" name="e_mail">
				</td>
				
			</tr>
			<tr>
				<td>
					Date Of Birth:
				</td>
				<td>
					<input type="date" placeholder="" name="birth">
				</td>
				
			</tr>
			<tr >
				<td>
					Gender:
				</td>
				<td>
					<input type="radio"  name="Gender">Male
					<input type="radio"  name="Gender">Female
				</td>
				
			</tr>
			<tr>
				<td>
					Telephone Number:
				</td>
				<td>
					<select>
						<option>+94</option>
					</select>
					<input type="phone" placeholder="phone number"name="tele_no">
				</td>
			</tr>
			</table>
			<h2 id="h">Other Details</h2>
		<table id="table2">
			<tr>
				<td>
					Select your doctor:
				</td>
				<td>
					<select name="select_docter">
						<option value="damitha" name="damitha">Dr Damitha</option>
						<option value="lakshika" name="lakshika">Dr lakshika</option>
						<option value="kalindu" name="kalindu">Dr kalindu</option>
						<option value="unknown" name="unknown">Dr unknown</option>
						<option value="jhone cena" name="jhone">Dr jhone cena</option>
					</select>
					
					
				</td>
				</tr>
				<tr>
				<td>
					Channelling Date:
				</td>
				<td>
					<input type="date" placeholder="" name="chanel_date">
				</td>
				
			</tr>
			<tr>
			<td>
				Reason for Appointment:
				
			</td>
			<td>
				<input type="text" placeholder="text"name="reason" >
				
			</td>
		</tr>
		<tr>
				<td>
					<button  type="submit" name="submit">Check</button>
				</td>
			</tr>
			</form>
	</table>
	<footer  >
			<p> result</p>
	</footer>
</body>
</html>